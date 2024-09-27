<?php
/* app/Http/Controllers/AdminController.php */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class AdminController extends Controller
{
    public function __construct()
    {
        // Apenas administradores podem acessar este controller
        $this->middleware('admin');
    }

    // Página de administração
    public function index()
    {
        $posts = Post::all();
        return view('admin.index', compact('posts'));
    }

    // Função para deletar posts
    public function destroy($id)
    {
        $post = Post::find($id);
        if ($post) {
            $post->delete();
            return redirect()->route('admin.index')->with('success', 'Post deletado com sucesso.');
        }

        return redirect()->route('admin.index')->with('error', 'Post não encontrado.');
    }
}
