<!-- resources/views/admin/create_user.blade.php -->

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Usuário</title>
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet"> <!-- Estilos para o admin -->
</head>
<body>
    <div class="admin-container">
        <h1>Criar Novo Usuário</h1>

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

        <!-- Formulário para criar o novo usuário -->
        <form method="POST" action="{{ route('admin.users.store') }}">
            @csrf

            <div>
                <label for="name">Nome:</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}" required>
            </div>

            <div>
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" required>
            </div>

            <div>
                <label for="password">Senha:</label>
                <input type="password" name="password" id="password" required>
            </div>

            <div>
                <label for="password_confirmation">Confirme a senha:</label>
                <input type="password" name="password_confirmation" id="password_confirmation" required>
            </div>

            <div>
                <label for="is_admin">É administrador?</label>
                <select name="is_admin" id="is_admin" required>
                    <option value="1" {{ old('is_admin') == 1 ? 'selected' : '' }}>Sim</option>
                    <option value="0" {{ old('is_admin') == 0 ? 'selected' : '' }}>Não</option>
                </select>
            </div>

            <button type="submit">Criar Usuário</button>
        </form>
    </div>
</body>
</html>