@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Pedido</h1>

    <form action="{{ route('pedidos.update', $pedido->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="vendedor_id">Vendedor:</label>
            <select name="vendedor_id" id="vendedor_id" class="form-control">
                @foreach($vendedores as $vendedor)
                <option value="{{ $vendedor->id }}" {{ $pedido->vendedor_id == $vendedor->id ? 'selected' : '' }}>{{ $vendedor->nome }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="produto">Produto:</label>
            <input type="text" name="produto" id="produto" class="form-control" value="{{ $pedido->produto }}">
        </div>

        <div class="form-group">
            <label for="quantidade">Quantidade:</label>
            <input type="number" name="quantidade" id="quantidade" class="form-control" value="{{ $pedido->quantidade }}">
        </div>

        <div class="form-group">
            <label for="valor_total">Valor Total:</label>
            <input type="number" name="valor_total" id="valor_total" class="form-control" value="{{ $pedido->valor_total }}">
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</div>
@endsection