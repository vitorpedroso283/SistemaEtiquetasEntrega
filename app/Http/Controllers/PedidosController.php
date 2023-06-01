<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedidos;
use App\Models\Vendedores;
use App\Http\Requests\CreatePedidosRequest;
use App\Http\Requests\UpdatePedidosRequest;
use App\Http\Resources\PedidosResource;
use Illuminate\Support\Facades\Auth;

class PedidosController extends Controller
{
    /**
     * Middleware de autenticação para o controller.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Exibe a lista de pedidos.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $pedidos = (new Pedidos())->getPedidos();
        return view('pedidos.index', ['pedidos' => PedidosResource::collection($pedidos)]);
    }

    /**
     * Exibe o formulário de criação de pedido.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $vendedores = Vendedores::all();
        return view('pedidos.create', compact('vendedores'));
    }

    /**
     * Armazena um novo pedido.
     *
     * @param CreatePedidosRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CreatePedidosRequest $request)
    {
        $pedido = (new Pedidos())->createPedido($request->validated());

        return redirect()->route('pedidos.show', $pedido->id);
    }

    /**
     * Exibe os detalhes de um pedido.
     *
     * @param Pedidos $pedido
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Pedidos $pedido)
    {
        return view('pedidos.show', ['pedido' => new PedidosResource($pedido)]);
    }

    /**
     * Exibe o formulário de edição de pedido.
     *
     * @param Pedidos $pedido
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Pedidos $pedido)
    {
        $vendedores = Vendedores::all();
        return view('pedidos.edit', compact('pedido', 'vendedores'));
    }
    
    /**
     * Atualiza um pedido existente.
     *
     * @param UpdatePedidosRequest $request
     * @param Pedidos $pedido
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdatePedidosRequest $request, Pedidos $pedido)
    {
        $pedido->updatePedido($request->validated());

        return redirect()->route('pedidos.show', $pedido->id);
    }

    /**
     * Exclui um pedido.
     *
     * @param Pedidos $pedido
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Pedidos $pedido)
    {
        $pedido->deletePedido();

        return redirect()->route('pedidos.index');
    }
}
