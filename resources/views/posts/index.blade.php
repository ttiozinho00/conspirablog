<!-- resources/views/posts/index.blade.php -->
@extends('layouts.app')

@section('content')
    <!-- Incluindo o CSS específico para a lista de posts -->
    <link href="{{ asset('css/index-post.css') }}" rel="stylesheet">

    <header>
        <h1 class="text-3xl font-bold mb-6">Lista de Posts</h1>
    </header>
    
    <div class="post-list container mx-auto mt-8 p-6">
        @forelse ($posts as $post)
            <div class="post">
                <h3>{{ $post->title }}</h3>
                <p class="post-content">{{ Str::limit($post->content, 100) }}</p>
                <a href="{{ route('posts.show', $post->id) }}" class="post-button">Leia Mais</a>
            </div>
        @empty
            <p>Nenhum post encontrado.</p>
        @endforelse
    </div>
@endsection
