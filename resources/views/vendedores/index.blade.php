@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Vendedores</h1>

    <div class="text-right mb-3">
        <a href="{{ route('vendedores.create') }}" class="btn btn-primary">Criar Vendedor</a>
    </div>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th style="width:15px">Endereço</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($vendedores as $vendedor)
            <tr>
                <td>{{ $vendedor->id }}</td>
                <td>{{ $vendedor->nome }}</td>
                <td>{{ $vendedor->endereco }}</td>
                <td>{{ $vendedor->email }}</td>
                <td>{{ $vendedor->telefone }}</td>
                <td>
                    <a href="{{ route('vendedores.show', $vendedor->id) }}" class="btn btn-primary">Detalhes</a>
                    <a href="{{ route('vendedores.edit', $vendedor->id) }}" class="btn btn-secondary">Editar</a>
                    <form action="{{ route('vendedores.destroy', $vendedor->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Excluir</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection