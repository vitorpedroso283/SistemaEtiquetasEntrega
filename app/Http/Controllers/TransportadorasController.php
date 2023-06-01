<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transportadoras;
use App\Http\Requests\CreateTransportadorasRequest;
use App\Http\Requests\UpdateTransportadorasRequest;
use App\Http\Resources\TransportadorasResource;

class TransportadorasController extends Controller
{
    public function index()
    {
        $transportadoras = (new Transportadoras())->getTransportadoras();
        return view('transportadoras.index', compact('transportadoras'));
    }

    public function create()
    {
        return view('transportadoras.create');
    }

    public function store(CreateTransportadorasRequest $request)
    {
        $transportadora = (new Transportadoras())->createTransportadora($request->validated());

        return redirect()->route('transportadoras.show', $transportadora->id);
    }

    public function show(Transportadoras $transportadora)
    {
        return view('transportadoras.show', compact('transportadora'));
    }

    public function edit(Transportadoras $transportadora)
    {
        return view('transportadoras.edit', compact('transportadora'));
    }

    public function update(UpdateTransportadorasRequest $request, Transportadoras $transportadora)
    {
        $transportadora->updateTransportadora($request->validated());

        return redirect()->route('transportadoras.show', $transportadora->id);
    }

    public function destroy(Transportadoras $transportadora)
    {
        $transportadora->deleteTransportadora();

        return redirect()->route('transportadoras.index');
    }
}
