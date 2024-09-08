@extends('layouts.app')

@section('content')
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
    <a href="{{ route('posts.create') }}" class="button">Criar Novo Post</a>
@endsection
