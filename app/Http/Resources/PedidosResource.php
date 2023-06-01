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
            'id' => $this->id,
            'vendedor' => new VendedoresResource($this->vendedor),
            'produto' => $this->produto,
            'quantidade' => $this->quantidade,
            'valor_total' => $this->valor_total,
            // Outros campos desejados
        ];
    }
}
