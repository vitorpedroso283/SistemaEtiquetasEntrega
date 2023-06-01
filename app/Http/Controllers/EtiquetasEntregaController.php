<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EtiquetasEntrega;
use App\Models\Transportadoras;
use App\Models\Pedidos;
use App\Http\Requests\CreateEtiquetasEntregaRequest;
use App\Http\Requests\UpdateEtiquetasEntregaRequest;
use App\Http\Resources\EtiquetasEntregaResource;
use Illuminate\Support\Facades\Auth;

class EtiquetasEntregaController extends Controller
{
    /**
     * Middleware de autenticação para o controller.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Exibe a lista de etiquetas de entrega.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $etiquetas = EtiquetasEntrega::with('pedido.vendedor')->get();
        return view('etiquetas.index', ['etiquetas' => EtiquetasEntregaResource::collection($etiquetas)]);
    }

    /**
     * Exibe o formulário de criação de etiqueta de entrega.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $pedidos = Pedidos::all();
        $transportadoras = Transportadoras::all();

        return view('etiquetas.create', compact('pedidos', 'transportadoras'));
    }

    /**
     * Armazena uma nova etiqueta de entrega.
     *
     * @param CreateEtiquetasEntregaRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CreateEtiquetasEntregaRequest $request)
    {
        $etiqueta = EtiquetasEntrega::createEtiqueta($request->validated());

        return redirect()->route('etiquetas.show', $etiqueta->id);
    }

    /**
     * Exibe os detalhes de uma etiqueta de entrega.
     *
     * @param EtiquetasEntrega $etiqueta
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(EtiquetasEntrega $etiqueta)
    {
        $etiqueta->load('pedido.vendedor', 'transportadora');

        return view('etiquetas.show', ['etiqueta' => new EtiquetasEntregaResource($etiqueta)]);
    }

    /**
     * Exibe o formulário de edição de etiqueta de entrega.
     *
     * @param EtiquetasEntrega $etiqueta
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(EtiquetasEntrega $etiqueta)
    {
        $pedidos = Pedidos::all();
        $transportadoras = Transportadoras::all();

        return view('etiquetas.edit', compact('etiqueta', 'pedidos', 'transportadoras'));
    }

    /**
     * Atualiza uma etiqueta de entrega existente.
     *
     * @param UpdateEtiquetasEntregaRequest $request
     * @param EtiquetasEntrega $etiqueta
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateEtiquetasEntregaRequest $request, EtiquetasEntrega $etiqueta)
    {
        $etiqueta->updateEtiqueta($request->validated());

        return redirect()->route('etiquetas.show', $etiqueta->id);
    }

    /**
     * Exclui uma etiqueta de entrega.
     *
     * @param EtiquetasEntrega $etiqueta
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(EtiquetasEntrega $etiqueta)
    {
        $etiqueta->deleteEtiqueta();

        return redirect()->route('etiquetas.index');
    }
}
