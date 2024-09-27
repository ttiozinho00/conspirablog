<!-- resources/views/admin/posts/index.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Posts</h1>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Título</th>
                <th>Conteúdo</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
                <tr>
                    <td>{{ $post->title }}</td>
                    <td>{{ Str::limit($post->content, 50) }}</td>
                    <td>
                        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary">Editar</a>
                        <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Deletar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
