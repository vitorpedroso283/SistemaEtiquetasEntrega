<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EtiquetasEntregaResource extends JsonResource
{
    /**
     * Transforma a instância em um array para ser retornada como resposta.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'pedido_id' => $this->pedido_id,
            'transportadora_id' => $this->transportadora_id,
            'numero_etiqueta' => $this->numero_etiqueta,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'pedido' => new PedidosResource($this->whenLoaded('pedido')),
            'transportadora' => new TransportadorasResource($this->whenLoaded('transportadora')),
        ];
    }
}
