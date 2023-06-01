<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateTransportadorasRequest extends FormRequest
{
    /**
     * Determine se o usuário tem autorização para fazer esta requisição.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Obtenha as regras de validação que se aplicam à requisição.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome' => 'required|string',
            'endereco' => 'required|string',
            'email' => 'required|email',
            'telefone' => 'required|string',
        ];
    }
}
