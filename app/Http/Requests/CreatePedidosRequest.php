<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePedidosRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules()
    {
        return [
            'vendedor_id' => 'required|exists:vendedores,id',
            'produto' => 'required|string',
            'quantidade' => 'required|integer|min:1',
            'valor_total' => 'required|numeric|min:0',
        ];
    }
}
