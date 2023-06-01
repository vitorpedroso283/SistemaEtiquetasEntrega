<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedidos;
use App\Models\Vendedores;
use App\Http\Requests\CreatePedidosRequest;
use App\Http\Requests\UpdatePedidosRequest;
use App\Http\Resources\PedidosResource;

class PedidosController extends Controller
{
    public function index()
    {
        $pedidos = (new Pedidos())->getPedidos();
        return view('pedidos.index', compact('pedidos'));
    }

    public function create()
    {
        $vendedores = Vendedores::all();
        return view('pedidos.create', compact('vendedores'));
    }

    public function store(CreatePedidosRequest $request)
    {
        $pedido = (new Pedidos())->createPedido($request->validated());

        return redirect()->route('pedidos.show', $pedido->id);
    }

    public function show(Pedidos $pedido)
    {
        return view('pedidos.show', compact('pedido'));
    }

    public function edit(Pedidos $pedido)
    {
        $vendedores = Vendedores::all();
        return view('pedidos.edit', compact('pedido', 'vendedores'));
    }
    
    public function update(UpdatePedidosRequest $request, Pedidos $pedido)
    {
        $pedido->updatePedido($request->validated());

        return redirect()->route('pedidos.show', $pedido->id);
    }

    public function destroy(Pedidos $pedido)
    {
        $pedido->deletePedido();

        return redirect()->route('pedidos.index');
    }
}
