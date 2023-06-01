<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendedores;
use App\Http\Requests\CreateVendedoresRequest;
use App\Http\Requests\UpdateVendedoresRequest;
use App\Http\Resources\VendedoresResource;

class VendedoresController extends Controller
{
    public function index()
    {
        $vendedores = (new Vendedores())->getVendedores();
        return view('vendedores.index', compact('vendedores'));
    }

    public function create()
    {
        return view('vendedores.create');
    }

    public function store(CreateVendedoresRequest $request)
    {
        $vendedor = (new Vendedores())->createVendedor($request->validated());

        return redirect()->route('vendedores.show', $vendedor->id);
    }

    public function show(Vendedores $vendedor)
    {
        return view('vendedores.show', compact('vendedor'));
    }

    public function edit(Vendedores $vendedor)
    {
        return view('vendedores.edit', compact('vendedor'));
    }

    public function update(UpdateVendedoresRequest $request, Vendedores $vendedor)
    {
        $vendedor->updateVendedor($request->validated());

        return redirect()->route('vendedores.show', $vendedor->id);
    }

    public function destroy(Vendedores $vendedor)
    {
        $vendedor->deleteVendedor();

        return redirect()->route('vendedores.index');
    }
}
