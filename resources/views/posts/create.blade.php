@extends('layouts.app')

@section('content')
    <h2>Criar Novo Post</h2>
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <label for="title">Título</label>
        <input type="text" name="title" id="title" placeholder="Digite o título" required>

        <label for="content">Conteúdo</label>
        <textarea name="content" id="content" rows="6" placeholder="Escreva o conteúdo aqui..." required></textarea>

        <button type="submit" class="button">Salvar</button>
    </form>
@endsection
