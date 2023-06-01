<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateVendedoresRequest extends FormRequest
{
    /**
     * Determina se o usuário está autorizado a fazer a requisição.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Define as regras de validação para a requisição.
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
