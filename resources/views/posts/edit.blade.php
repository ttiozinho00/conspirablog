<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Post</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-900">
    <div class="container mx-auto mt-8 p-6 bg-white rounded-lg shadow-md">
        <h2 class="text-3xl font-bold mb-6">Editar Post</h2>

        <form action="{{ route('posts.update', $post->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-700">Título</label>
                <input type="text" name="title" id="title" value="{{ $post->title }}" 
                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50" 
                    required>
            </div>

            <div class="mb-4">
                <label for="content" class="block text-sm font-medium text-gray-700">Conteúdo</label>
                <textarea name="content" id="content" rows="6" 
                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50" 
                    required>{{ $post->content }}</textarea>
            </div>

            <button type="submit" class="bg-blue-600 text-white px-6 py-3 rounded-lg shadow-md hover:bg-blue-700 transition duration-300">
                Atualizar
            </button>
        </form>
    </div>
</body>
</html>
