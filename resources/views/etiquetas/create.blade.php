@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Criar Etiqueta de Entrega</h1>

    <form action="{{ route('etiquetas.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="pedido_id">Pedido:</label>
            <select name="pedido_id" id="pedido_id" class="form-control" required>
                <option value="" selected disabled>Selecione um pedido</option>
                @foreach($pedidos as $pedido)
                <option value="{{ $pedido->id }}">{{ $pedido->id }} - {{ $pedido->produto }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="transportadora_id">Transportadora:</label>
            <select name="transportadora_id" id="transportadora_id" class="form-control" required>
                <option value="" selected disabled>Selecione uma transportadora</option>
                @foreach($transportadoras as $transportadora)
                <option value="{{ $transportadora->id }}">{{ $transportadora->nome }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="data_envio">Data de Envio:</label>
            <input type="date" name="data_envio" id="data_envio" class="form-control" required>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</div>
@endsection