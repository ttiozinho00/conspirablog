<!-- resources/views/posts/edit.blade.php -->
@extends('layouts.app')

@push('styles')
    <!-- Incluindo o CSS específico para a página de edição de posts -->
    <link href="{{ asset('css/edit-post.css') }}" rel="stylesheet">
@endpush

@section('content')
    <h2>Editar Post</h2>

    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="title">Título</label>
        <input type="text" name="title" id="title" value="{{ old('title', $post->title) }}" required>

        <label for="content">Conteúdo</label>
        <textarea name="content" id="content" rows="6" required>{{ old('content', $post->content) }}</textarea>

        <button type="submit" class="button">Atualizar</button>
    </form>
@endsection
