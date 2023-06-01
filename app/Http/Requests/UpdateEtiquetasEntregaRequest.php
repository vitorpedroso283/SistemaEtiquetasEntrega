<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEtiquetasEntregaRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules()
    {
        return [
            'transportadora_id' => 'required|exists:transportadoras,id',
            'pedido_id' => 'required|exists:pedidos,id',
            'data_envio' => 'required|date',
        ];
    }
}

