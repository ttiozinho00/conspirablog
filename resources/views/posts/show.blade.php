<!-- resources/views/posts/show.blade.php -->
@extends('layouts.app')

@section('content')
    <!-- Incluindo o CSS específico para a exibição do post -->
    <link href="{{ asset('css/show-post.css') }}" rel="stylesheet">

    <div class="container mx-auto mt-8 p-6">
        <h1 class="text-3xl font-bold mb-4">{{ $post->title }}</h1>
        <div class="mb-4">
            <p>{{ $post->content }}</p>
        </div>
        <a href="{{ route('posts.index') }}" class="button">Voltar para a Lista de Posts</a>
    </div>
@endsection
