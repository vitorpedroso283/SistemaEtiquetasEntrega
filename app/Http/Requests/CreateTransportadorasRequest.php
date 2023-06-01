<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateTransportadorasRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

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
