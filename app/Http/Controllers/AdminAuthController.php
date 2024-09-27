<?php
/* app/Http/Controllers/AdminAuthController.php */

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    /**
     * Exibe o formulário de login para o administrador.
     */
    public function showLoginForm()
    {
        return view('admin.login');
    }

    /**
     * Processa o login do administrador.
     */
    public function login(Request $request)
    {
        // Validação dos dados
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Tenta autenticar o administrador
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'is_admin' => true])) {
            // Redireciona para o dashboard do administrador
            return redirect()->route('admin.index')->with('success', 'Login realizado com sucesso.');
        }

        // Se a autenticação falhar, redireciona de volta para o login com erro
        return back()->withErrors(['email' => 'Credenciais incorretas ou você não é administrador.']);
    }

    /**
     * Realiza o logout do administrador.
     */
    public function logout()
    {
        Auth::logout(); // Faz logout do administrador
        return redirect()->route('admin.login')->with('success', 'Logout realizado com sucesso.'); // Redireciona para a página de login
    }
}
