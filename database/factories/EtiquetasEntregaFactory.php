<?php

namespace Database\Factories;

use App\Models\EtiquetasEntrega;
use App\Models\Pedidos;
use App\Models\Transportadoras;

use Illuminate\Database\Eloquent\Factories\Factory;

class EtiquetasEntregaFactory extends Factory
{
    protected $model = EtiquetasEntrega::class;

    public function definition()
    {
        return [
            'transportadora_id' => function () {
                return Transportadoras::factory()->create()->id;
            },
            'pedido_id' => function () {
                return Pedidos::factory()->create()->id;
            },
            'data_envio' => $this->faker->dateTime,
        ];
    }
}
