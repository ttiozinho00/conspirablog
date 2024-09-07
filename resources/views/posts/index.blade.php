<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container mx-auto mt-5">
        <h2 class="text-3xl font-bold mb-5">Lista de Posts</h2>
        <table class="min-w-full bg-white border border-gray-300">
            <thead>
                <tr class="bg-gray-100 border-b">
                    <th class="py-2 px-4 text-left">Título do Post</th>
                    <th class="py-2 px-4 text-left">Conteúdo Resumido</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($posts as $post)
                    <tr class="border-b">
                        <td class="py-2 px-4">{{ $post->title }}</td>
                        <td class="py-2 px-4">{{ Str::limit($post->content, 100) }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="2" class="py-2 px-4 text-center">Nenhum post encontrado.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        <a href="{{ route('posts.create') }}" class="inline-block mt-4 bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Criar Novo Post</a>
    </div>
</body>
</html>
