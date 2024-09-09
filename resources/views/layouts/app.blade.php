<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Conspira Blog') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @stack('styles') <!-- Pilha de estilos para incluir CSS específico de páginas -->
</head>
<body>
    <header>
        <h1>Conspira Blog</h1>
    </header>

    <nav class="navbar">
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ route('posts.index') }}">Posts</a>
        <a href="{{ route('posts.create') }}">Criar Post</a>
        
        @if(isset($post))
            <a href="{{ route('posts.edit', ['post' => $post->id]) }}">Editar Post</a>
        @endif
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <footer>
        <p>&copy; {{ date('Y') }} Conspira Blog. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
