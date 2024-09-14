<!-- resources/views/admin/login.blade.php -->

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login do Administrador</title>
    <link href="{{ asset('css/login.css') }}" rel="stylesheet"> <!-- Inclua o CSS do login -->
</head>
<body>
    <div class="login-container">
        <h1>Login do Administrador</h1>
        
        <!-- Exibe erros de validação, se houver -->
        @if ($errors->any())
            <div class="error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <!-- Formulário de login -->
        <form method="POST" action="{{ route('admin.login') }}">
            @csrf
            <input type="email" name="email" placeholder="E-mail" value="{{ old('email') }}" required>
            <input type="password" name="password" placeholder="Senha" required>
            <button type="submit">Entrar</button>
        </form>

        <!-- Link para criar novo usuário administrador -->
        <div class="create-admin">
            <p>Não tem um administrador? <a href="{{ route('admin.users.create') }}">Crie um aqui</a></p>
        </div>
    </div>
</body>
</html>
