@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalhes da Transportadora</h1>

    <div class="card">
        <div class="card-body">
            <p><strong>ID:</strong> {{ $transportadora->id }}</p>
            <p><strong>Nome:</strong> {{ $transportadora->nome }}</p>
            <p><strong>Endereço:</strong> {{ $transportadora->endereco }}</p>
            <p><strong>Email:</strong> {{ $transportadora->email }}</p>
            <p><strong>Telefone:</strong> {{ $transportadora->telefone }}</p>
        </div>
    </div>

    <a href="{{ route('transportadoras.edit', $transportadora->id) }}" class="btn btn-primary">Editar</a>

    <form action="{{ route('transportadoras.destroy', $transportadora->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Excluir</button>
    </form>
</div>
@endsection