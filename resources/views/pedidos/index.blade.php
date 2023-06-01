@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Pedidos</h1>

    <div class="text-right mb-3">
        <a href="{{ route('pedidos.create') }}" class="btn btn-primary">Criar Pedido</a>
    </div>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Vendedor</th>
                <th>Produto</th>
                <th>Quantidade</th>
                <th>Valor Total</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pedidos as $pedido)
            <tr>
                <td>{{ $pedido->id }}</td>
                <td>{{ $pedido->vendedor->nome }}</td>
                <td>{{ $pedido->produto }}</td>
                <td>{{ $pedido->quantidade }}</td>
                <td>{{ $pedido->valor_total }}</td>
                <td>
                    <a href="{{ route('pedidos.show', $pedido->id) }}" class="btn btn-primary">Detalhes</a>
                    <a href="{{ route('pedidos.edit', $pedido->id) }}" class="btn btn-secondary">Editar</a>
                    <form action="{{ route('pedidos.destroy', $pedido->id) }}" method="POST" class="d-inline">
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