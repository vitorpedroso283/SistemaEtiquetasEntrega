@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h1>Detalhes da Etiqueta de Entrega</h1>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <p><strong>ID do Envio:</strong> {{ $etiqueta->id }}</p>
                    <p><strong>ID do Pedido:</strong> {{ $etiqueta->pedido_id }}</p>
                    <p><strong>Produto:</strong> {{ $etiqueta->pedido->produto }}</p>
                    <p><strong>Quantidade:</strong> {{ $etiqueta->pedido->quantidade }}</p>
                    <p><strong>Valor:</strong> {{ $etiqueta->pedido->valor_total }}</p>
                </div>
                <div class="col-md-6">
                    <p><strong>Vendedor:</strong> {{ $etiqueta->pedido->vendedor->nome }}</p>
                    <p><strong>Endereço do Vendedor:</strong> {{ $etiqueta->pedido->vendedor->endereco }}</p>
                    <p><strong>Transportadora:</strong> {{ $etiqueta->transportadora->nome }}</p>
                    <p><strong>Endereço da Transportadora:</strong> {{ $etiqueta->transportadora->endereco }}</p>
                    <p><strong>Data de Envio:</strong> {{ $etiqueta->data_envio }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection