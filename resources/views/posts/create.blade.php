<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Novo Post</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="title is-3">Criar Novo Post</h2>

        <form action="{{ route('posts.store') }}" method="POST">
            @csrf

            <div class="field">
                <label for="title" class="label">Título</label>
                <div class="control">
                    <input type="text" name="title" id="title" class="input" placeholder="Digite o título" required>
                </div>
            </div>

            <div class="field">
                <label for="content" class="label">Conteúdo</label>
                <div class="control">
                    <textarea name="content" id="content" rows="6" class="textarea" placeholder="Escreva o conteúdo aqui..." required></textarea>
                </div>
            </div>

            <button type="submit" class="button is-primary">Salvar</button>
        </form>
    </div>
</body>
</html>
