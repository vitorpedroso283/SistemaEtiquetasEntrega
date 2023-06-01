<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePedidosRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'vendedor_id' => 'required|exists:vendedores,id', // O campo vendedor_id é obrigatório e deve existir na tabela vendedores
            'produto' => 'required|string', // O campo produto é obrigatório e deve ser uma string
            'quantidade' => 'required|integer|min:1', // O campo quantidade é obrigatório, deve ser um número inteiro e no mínimo 1
            'valor_total' => 'required|numeric|min:0', // O campo valor_total é obrigatório, deve ser um número e no mínimo 0
        ];
    }
}
