<!-- resources/views/posts/create.blade.php -->
@extends('layouts.app')

@section('content')
    <!-- Link para o CSS específico desta página -->
    <link rel="stylesheet" href="{{ asset('css/create-post.css') }}">

    <h2>Criar Novo Post</h2>
    
    <!-- Formulário para criação do post com upload de imagem -->
    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Campo para o título -->
        <label for="title">Título</label>
        <input type="text" name="title" id="title" placeholder="Digite o título" required>

        <!-- Campo para o conteúdo -->
        <label for="content">Conteúdo</label>
        <textarea name="content" id="content" rows="6" placeholder="Escreva o conteúdo aqui..." required></textarea>

        <!-- Botão de envio -->
        <button type="submit" class="button">Salvar</button>
    </form>
@endsection
