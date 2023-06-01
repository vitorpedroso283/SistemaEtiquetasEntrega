<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transportadoras;
use App\Http\Requests\CreateTransportadorasRequest;
use App\Http\Requests\UpdateTransportadorasRequest;
use App\Http\Resources\TransportadorasResource;
use Illuminate\Support\Facades\Auth;

class TransportadorasController extends Controller
{
    /**
     * Middleware de autenticação para o controller.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Exibe a lista de transportadoras.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $transportadoras = (new Transportadoras())->getTransportadoras();
        return view('transportadoras.index', ['transportadoras' => TransportadorasResource::collection($transportadoras)]);
    }

    /**
     * Exibe o formulário de criação de transportadora.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('transportadoras.create');
    }

    /**
     * Armazena uma nova transportadora.
     *
     * @param CreateTransportadorasRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CreateTransportadorasRequest $request)
    {
        $transportadora = (new Transportadoras())->createTransportadora($request->validated());

        return redirect()->route('transportadoras.show', $transportadora->id);
    }

    /**
     * Exibe os detalhes de uma transportadora.
     *
     * @param Transportadoras $transportadora
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Transportadoras $transportadora)
    {
        return view('transportadoras.show', ['transportadora' => new TransportadorasResource($transportadora)]);
    }

    /**
     * Exibe o formulário de edição de transportadora.
     *
     * @param Transportadoras $transportadora
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Transportadoras $transportadora)
    {
        return view('transportadoras.edit', ['transportadora' => new TransportadorasResource($transportadora)]);
    }

    /**
     * Atualiza uma transportadora existente.
     *
     * @param UpdateTransportadorasRequest $request
     * @param Transportadoras $transportadora
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateTransportadorasRequest $request, Transportadoras $transportadora)
    {
        $transportadora->updateTransportadora($request->validated());

        return redirect()->route('transportadoras.show', $transportadora->id);
    }

    /**
     * Exclui uma transportadora.
     *
     * @param Transportadoras $transportadora
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Transportadoras $transportadora)
    {
        $transportadora->deleteTransportadora();

        return redirect()->route('transportadoras.index');
    }
}
