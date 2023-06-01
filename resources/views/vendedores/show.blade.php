@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalhes do Vendedor</h1>

    <div class="card">
        <div class="card-body">
            <p><strong>ID:</strong> {{ $vendedor->id }}</p>
            <p><strong>Nome:</strong> {{ $vendedor->nome }}</p>
            <p><strong>Endereço:</strong> {{ $vendedor->endereco }}</p>
            <p><strong>Email:</strong> {{ $vendedor->email }}</p>
            <p><strong>Telefone:</strong> {{ $vendedor->telefone }}</p>
        </div>
    </div>

    <div class="mt-3">
        <a href="{{ route('vendedores.edit', $vendedor->id) }}" class="btn btn-primary">Editar</a>

        <form action="{{ route('vendedores.destroy', $vendedor->id) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Excluir</button>
        </form>
    </div>
</div>
@endsection