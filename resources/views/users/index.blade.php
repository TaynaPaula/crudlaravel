@extends('layouts.admin')

@section('content')
    <div class="card mt-4 mb-4 border-0 shadow-sm bg-light">

        <div class="card-header hstack gap-2 bg-white border-bottom">
            <span class="fw-bold text-secondary">Listar Usuários</span>

            <span class="ms-auto">
                <a href="{{ route('user.create') }}" class="btn btn-outline-success btn-sm">Cadastrar</a>
            </span>
        </div>

        <div class="card-body bg-white">

            <x-alert />

            <table class="table table-hover text-secondary">
                <thead class="table-light">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">E-mail</th>
                        <th scope="col" class="text-center">Ações</th>
                    </tr>
                </thead>
                <tbody>

                    @forelse ($users as $user)
                        <tr>
                            <th>{{ $user->id }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td class="text-center">
                                <a href="{{ route('user.show', ['user' => $user->id]) }}"
                                    class="btn btn-outline-primary btn-sm">Visualizar</a>
                                <a href="{{ route('user.edit', ['user' => $user->id]) }}"
                                    class="btn btn-outline-warning btn-sm">Editar</a>
                                <form method="POST" action="{{ route('user.destroy', ['user' => $user->id]) }}"
                                    class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-outline-danger btn-sm"
                                        onclick="return confirm('Tem certeza que deseja apagar este registro?')">Apagar</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center text-muted">Nenhum usuário encontrado!</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            <div class="d-flex justify-content-center">
                {{ $users->links() }}
            </div>
        </div>
    </div>
@endsection
