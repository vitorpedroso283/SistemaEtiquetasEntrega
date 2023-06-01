@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Etiqueta de Entrega</h1>

    <form action="{{ route('etiquetas.update', $etiqueta->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="pedido_id">Pedido:</label>
            <select name="pedido_id" id="pedido_id" class="form-control">
                @foreach($pedidos as $pedido)
                <option value="{{ $pedido->id }}" {{ $etiqueta->pedido_id == $pedido->id ? 'selected' : '' }}>
                    {{ $pedido->produto }}
                </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="transportadora_id">Transportadora:</label>
            <select name="transportadora_id" id="transportadora_id" class="form-control">
                @foreach($transportadoras as $transportadora)
                <option value="{{ $transportadora->id }}" {{ $etiqueta->transportadora_id == $transportadora->id ? 'selected' : '' }}>
                    {{ $transportadora->nome }}
                </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="data_envio">Data de Envio:</label>
            <input type="date" name="data_envio" id="data_envio" class="form-control" value="{{ $etiqueta->data_envio }}">
        </div>

        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
</div>
@endsection