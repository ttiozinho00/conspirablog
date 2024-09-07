<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="title is-3">Lista de Posts</h2>
        <table class="table is-fullwidth">
            <thead>
                <tr>
                    <th>Título do Post</th>
                    <th>Conteúdo Resumido</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($posts as $post)
                    <tr>
                        <td>{{ $post->title }}</td>
                        <td>{{ Str::limit($post->content, 100) }}</td>
                        <td>
                            <a href="{{ route('posts.edit', $post->id) }}" class="button is-link">Editar</a>
                            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="button is-danger" onclick="return confirm('Tem certeza que deseja excluir este post?')">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">Nenhum post encontrado.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        <a href="{{ route('posts.create') }}" class="button is-primary">Criar Novo Post</a>
    </div>
</body>
</html>
