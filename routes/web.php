<?php
/* conspirablog/routes/web.php */

use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Página inicial
Route::get('/', function () {
    return view('home'); // Exibe a view 'home.blade.php' na rota principal
});

// Rotas de autenticação do admin (acessíveis sem autenticação)
Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');

// Rota de logout do administrador
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

// Rota de criação de usuário admin (também acessível sem autenticação para criar o primeiro admin)
Route::get('/admin/users/create', [UserController::class, 'create'])->name('admin.users.create');
Route::post('/admin/users', [UserController::class, 'store'])->name('admin.users.store');

// Agrupamento de rotas para administradores autenticados
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::delete('/posts/{id}', [AdminController::class, 'destroy'])->name('posts.destroy');

    // Rota para listar posts
    Route::get('/posts', [PostController::class, 'index'])->name('posts.index');

    // Rotas para gerenciamento de usuários (somente para admins autenticados)
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
    Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
});

// Rotas públicas para posts
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
