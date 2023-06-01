<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TransportadorasResource extends JsonResource
{
    /**
     * Transforma a transportadora em um array para representação JSON.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'nome' => $this->nome,
            'endereco' => $this->endereco,
            'email' => $this->email,
            'telefone' => $this->telefone,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
