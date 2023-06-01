@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalhes do Pedido</h1>

    <div class="card">
        <div class="card-body">
            <p class="card-text"><strong>ID:</strong> {{ $pedido->id }}</p>
            <p class="card-text"><strong>Vendedor:</strong> {{ $pedido->vendedor->nome }}</p>
            <p class="card-text"><strong>Produto:</strong> {{ $pedido->produto }}</p>
            <p class="card-text"><strong>Quantidade:</strong> {{ $pedido->quantidade }}</p>
            <p class="card-text"><strong>Valor Total:</strong> {{ $pedido->valor_total }}</p>
        </div>
    </div>

    <div class="mt-3">
        <a href="{{ route('pedidos.edit', $pedido->id) }}" class="btn btn-primary">Editar</a>

        <form action="{{ route('pedidos.destroy', $pedido->id) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Excluir</button>
        </form>
    </div>
</div>
@endsection