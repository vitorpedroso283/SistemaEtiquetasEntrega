@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Etiquetas de Entrega</h1>

    <div class="text-right mb-3">
        <a href="{{ route('etiquetas.create') }}" class="btn btn-primary">Criar Etiqueta</a>
    </div>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Vendedor</th>
                <th>Transportadora</th>
                <th>Pedido</th>
                <th>Produto</th>
                <th>Quantidade</th>
                <th>Valor</th>
                <th>Data de Envio</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($etiquetas as $etiqueta)
            <tr>
                <td>{{ $etiqueta->id }}</td>
                <td>{{ $etiqueta->pedido->vendedor->nome }}</td>
                <td>{{ $etiqueta->transportadora->nome }}</td>
                <td>{{ $etiqueta->pedido_id }}</td>
                <td>{{ $etiqueta->pedido->produto }}</td>
                <td>{{ $etiqueta->pedido->quantidade }}</td>
                <td>{{ $etiqueta->pedido->valor_total }}</td>
                <td>{{ $etiqueta->data_envio }}</td>
                <td>
                    <a href="{{ route('etiquetas.show', $etiqueta->id) }}" class="btn btn-primary">Detalhes</a>
                    <a href="{{ route('etiquetas.edit', $etiqueta->id) }}" class="btn btn-secondary">Editar</a>
                    <form action="{{ route('etiquetas.destroy', $etiqueta->id) }}" method="POST" class="d-inline">
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