<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PedidosResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id, // ID do pedido
            'vendedor' => $this->vendedor->nome, // Nome do vendedor associado ao pedido
            'produto' => $this->produto, // Nome do produto do pedido
            'quantidade' => $this->quantidade, // Quantidade do produto no pedido
            'valor_total' => $this->valor_total, // Valor total do pedido
            'created_at' => $this->created_at, // Data de criação do pedido
            'updated_at' => $this->updated_at, // Data de atualização do pedido
        ];
    }
}
