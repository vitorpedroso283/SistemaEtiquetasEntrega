<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EtiquetasEntrega;
use App\Models\Transportadoras;
use App\Http\Requests\CreateEtiquetasEntregaRequest;
use App\Http\Requests\UpdateEtiquetasEntregaRequest;
use App\Http\Resources\EtiquetasEntregaResource;
use App\Models\Pedidos;

class EtiquetasEntregaController extends Controller
{
    public function index()
    {
        $etiquetas = EtiquetasEntrega::with('pedido.vendedor')->get();
        return view('etiquetas.index', compact('etiquetas'));
    }

    public function create()
    {
        $pedidos = Pedidos::all();
        $transportadoras = Transportadoras::all();

        return view('etiquetas.create', compact('pedidos', 'transportadoras'));
    }

    public function store(CreateEtiquetasEntregaRequest $request)
    {
        $etiqueta = EtiquetasEntrega::createEtiqueta($request->validated());

        return redirect()->route('etiquetas.show', $etiqueta->id);
    }

    public function show(EtiquetasEntrega $etiqueta)
    {
        $etiqueta->load('pedido.vendedor', 'transportadora');

        return view('etiquetas.show', compact('etiqueta'));
    }

    public function edit(EtiquetasEntrega $etiqueta)
    {
        $pedidos = Pedidos::all();
        $transportadoras = Transportadoras::all();

        return view('etiquetas.edit', compact('etiqueta', 'pedidos', 'transportadoras'));
    }


    public function update(UpdateEtiquetasEntregaRequest $request, EtiquetasEntrega $etiqueta)
    {
        $etiqueta->updateEtiqueta($request->validated());

        return redirect()->route('etiquetas.show', $etiqueta->id);
    }

    public function destroy(EtiquetasEntrega $etiqueta)
    {
        $etiqueta->deleteEtiqueta();

        return redirect()->route('etiquetas.index');
    }
}
