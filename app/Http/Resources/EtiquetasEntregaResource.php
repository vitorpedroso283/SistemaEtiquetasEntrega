<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EtiquetasEntregaResource extends JsonResource
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
            'transportadora' => new TransportadorasResource($this->transportadora),
            'pedido_id' => $this->pedido_id,
            'data_envio' => $this->data_envio,
            // Outros campos desejados
        ];
    }
}
