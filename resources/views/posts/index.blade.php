<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-900">
    <div class="container mx-auto mt-8 p-6 bg-white rounded-lg shadow-md">
        <h2 class="text-3xl font-bold mb-6">Lista de Posts</h2>
        <table class="min-w-full bg-white border border-gray-300 rounded-lg shadow-md">
            <thead>
                <tr class="bg-gray-100 border-b">
                    <th class="py-2 px-4 text-left text-gray-700 font-medium">Título do Post</th>
                    <th class="py-2 px-4 text-left text-gray-700 font-medium">Conteúdo Resumido</th>
                    <th class="py-2 px-4 text-left text-gray-700 font-medium">Ações</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($posts as $post)
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-2 px-4">{{ $post->title }}</td>
                        <td class="py-2 px-4">{{ Str::limit($post->content, 100) }}</td>
                        <td class="py-2 px-4">
                            <a href="{{ route('posts.edit', $post->id) }}" class="text-blue-500 hover:text-blue-700">Editar</a>
                            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:text-red-700" onclick="return confirm('Tem certeza que deseja excluir este post?')">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="py-2 px-4 text-center text-gray-500">Nenhum post encontrado.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        <a href="{{ route('posts.create') }}" class="inline-block mt-4 bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Criar Novo Post</a>
    </div>
</body>
</html>
