<?php

namespace Database\Factories;

use App\Models\Pedidos;
use App\Models\Vendedores;

use Illuminate\Database\Eloquent\Factories\Factory;

class PedidosFactory extends Factory
{
    protected $model = Pedidos::class;

    public function definition()
    {
        return [
            'vendedor_id' => function () {
                return Vendedores::factory()->create()->id;
            },
            'produto' => $this->faker->word,
            'quantidade' => $this->faker->randomNumber(2),
            'valor_total' => $this->faker->randomFloat(2, 10, 1000),
        ];
    }
}
