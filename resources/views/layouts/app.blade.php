<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel Blog') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/blog.css') }}" rel="stylesheet">
</head>
<body>
    <header>
        <h1>Laravel Blog</h1>
    </header>

    <nav class="navbar">
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ route('posts.index') }}">Posts</a>
        <a href="{{ route('posts.create') }}">Criar Post</a>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <footer>
        <p>&copy; {{ date('Y') }} Laravel Blog. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
