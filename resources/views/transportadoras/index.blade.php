@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Lista de Transportadoras</h1>
    <div class="text-right mb-3">
        <a href="{{ route('transportadoras.create') }}" class="btn btn-primary">Criar Transportadora</a>
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
            @foreach($transportadoras as $transportadora)
            <tr>
                <td>{{ $transportadora->id }}</td>
                <td>{{ $transportadora->nome }}</td>
                <td>{{ $transportadora->endereco }}</td>
                <td>{{ $transportadora->email }}</td>
                <td>{{ $transportadora->telefone }}</td>
                <td>
                    <a href="{{ route('transportadoras.show', $transportadora->id) }}" class="btn btn-primary">Detalhes</a>
                    <a href="{{ route('transportadoras.edit', $transportadora->id) }}" class="btn btn-secondary">Editar</a>
                    <form action="{{ route('transportadoras.destroy', $transportadora->id) }}" method="POST" class="d-inline">
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