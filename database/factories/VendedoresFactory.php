<?php

namespace Database\Factories;

use App\Models\Vendedores;
use Illuminate\Database\Eloquent\Factories\Factory;

class VendedoresFactory extends Factory
{
    protected $model = Vendedores::class;

    public function definition()
    {
        return [
            'nome' => $this->faker->name,
            'endereco' => $this->faker->address,
            'email' => $this->faker->email,
            'telefone' => $this->faker->phoneNumber,
        ];
    }
}
