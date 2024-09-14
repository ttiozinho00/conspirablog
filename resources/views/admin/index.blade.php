<!-- resources/views/admin/index.blade.php -->

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel do Administrador</title>
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet"> <!-- Inclua o CSS do admin -->
</head>
<body>
    <div class="admin-container">
        <h1>Painel do Administrador</h1>

        <!-- Exibe uma mensagem de sucesso, se houver -->
        @if (session('success'))
            <div class="success">
                {{ session('success') }}
            </div>
        @endif

        <div class="admin-options">
            <a href="{{ route('admin.posts.index') }}">Gerenciar Posts</a>
            <a href="{{ route('admin.users.index') }}">Gerenciar Usuários</a>
            <a href="{{ route('admin.users.create') }}">Criar Novo Administrador</a>
        </div>

        <a href="{{ route('admin.logout') }}">Logout</a>
    </div>
</body>
</html>
