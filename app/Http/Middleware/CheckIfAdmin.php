<?php
/* app/Http/Middleware/CheckIfAdmin.php */

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckIfAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // Permite o acesso às rotas de criação de admin sem checar autenticação
        if ($request->is('admin/users/create') || $request->is('admin/users')) {
            return $next($request);
        }

        // Verifica se o usuário está autenticado e se ele é administrador
        if (Auth::check() && Auth::user()->is_admin) {
            return $next($request);
        }

        // Redireciona para a página inicial com uma mensagem de erro se não for admin
        return redirect('/')->with('error', 'Acesso negado. Apenas administradores podem acessar esta página.');
    }
}
