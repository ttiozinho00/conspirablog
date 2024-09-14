<!-- resources/views/admin/index_users.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Usuários</h1>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>É Admin?</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->is_admin ? 'Sim' : 'Não' }}</td>
                    <td>
                        <!-- Botões de ação para editar ou excluir usuários -->
                        <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-primary">Editar</a>
                        <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" style="display:inline;">
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
