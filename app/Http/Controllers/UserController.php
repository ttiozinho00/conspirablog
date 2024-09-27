<?php
/* app/Http/Controllers/UserController.php */

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Construtor para aplicar middleware de autenticação e verificar admin.
     */
    public function __construct()
    {
        // Aplica os middlewares em todas as rotas, exceto na criação do primeiro usuário admin
        $this->middleware('auth')->except(['create', 'store']);
        $this->middleware('admin')->except(['create', 'store']);
    }

    /**
     * Exibe o formulário para criar um novo usuário administrador.
     */
    public function create()
    {
        return view('admin.create_user');
    }

    /**
     * Salva o novo usuário administrador no banco de dados.
     */
    public function store(Request $request)
    {
        // Validação dos dados do formulário
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'is_admin' => 'required|boolean',
        ], [
            'name.required' => 'O nome é obrigatório.',
            'email.required' => 'O email é obrigatório.',
            'email.unique' => 'Este email já está em uso.',
            'password.required' => 'A senha é obrigatória.',
            'password.confirmed' => 'A confirmação da senha não corresponde.',
        ]);

        // Criação do novo usuário
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'is_admin' => $request->is_admin, // Define se o usuário é admin
        ]);

        return redirect()->route('admin.users.index')->with('success', 'Usuário criado com sucesso.');
    }

    /**
     * Lista todos os usuários (administradores e não administradores).
     */
    public function index()
    {
        $users = User::all(); // Lista todos os usuários
        return view('admin.index_users', compact('users'));
    }

    /**
     * Exibe o formulário para editar um usuário existente.
     */
    public function edit(User $user)
    {
        return view('admin.edit_user', compact('user')); // Passa o usuário para a view de edição
    }

    /**
     * Atualiza os dados de um usuário no banco de dados.
     */
    public function update(Request $request, User $user)
    {
        // Validação dos dados do formulário
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'is_admin' => 'required|boolean',
        ], [
            'name.required' => 'O nome é obrigatório.',
            'email.required' => 'O email é obrigatório.',
            'email.unique' => 'Este email já está em uso.',
        ]);

        // Atualiza o usuário
        $user->update($request->only('name', 'email', 'is_admin'));

        return redirect()->route('admin.users.index')->with('success', 'Usuário atualizado com sucesso.');
    }

    /**
     * Exclui um usuário do banco de dados.
     */
    public function destroy(User $user)
    {
        $user->delete(); // Exclui o usuário
        return redirect()->route('admin.users.index')->with('success', 'Usuário excluído com sucesso.');
    }
}
