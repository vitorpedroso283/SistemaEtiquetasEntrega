<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendedores;
use App\Http\Requests\CreateVendedoresRequest;
use App\Http\Requests\UpdateVendedoresRequest;
use App\Http\Resources\VendedoresResource;
use Illuminate\Support\Facades\Auth;

class VendedoresController extends Controller
{
    /**
     * Middleware de autenticação para o controller.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Exibe a lista de vendedores.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $vendedores = (new Vendedores())->getVendedores();
        return view('vendedores.index', ['vendedores' => VendedoresResource::collection($vendedores)]);
    }

    /**
     * Exibe o formulário de criação de vendedor.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('vendedores.create');
    }

    /**
     * Armazena um novo vendedor.
     *
     * @param CreateVendedoresRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CreateVendedoresRequest $request)
    {
        $vendedor = (new Vendedores())->createVendedor($request->validated());

        return redirect()->route('vendedores.show', $vendedor->id);
    }

    /**
     * Exibe os detalhes de um vendedor.
     *
     * @param Vendedores $vendedor
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Vendedores $vendedor)
    {
        return view('vendedores.show', ['vendedor' => new VendedoresResource($vendedor)]);
    }

    /**
     * Exibe o formulário de edição de vendedor.
     *
     * @param Vendedores $vendedor
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Vendedores $vendedor)
    {
        return view('vendedores.edit', ['vendedor' => new VendedoresResource($vendedor)]);
    }

    /**
     * Atualiza um vendedor existente.
     *
     * @param UpdateVendedoresRequest $request
     * @param Vendedores $vendedor
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateVendedoresRequest $request, Vendedores $vendedor)
    {
        $vendedor->updateVendedor($request->validated());

        return redirect()->route('vendedores.show', $vendedor->id);
    }

    /**
     * Exclui um vendedor.
     *
     * @param Vendedores $vendedor
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Vendedores $vendedor)
    {
        $vendedor->deleteVendedor();

        return redirect()->route('vendedores.index');
    }
}
