<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEtiquetasEntregaRequest extends FormRequest
{
    /**
     * Determina se o usuário está autorizado a fazer a solicitação.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Define as regras de validação para a solicitação.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'transportadora_id' => 'required|exists:transportadoras,id',
            'pedido_id' => 'required|exists:pedidos,id',
            'data_envio' => 'required|date',
        ];
    }
}
