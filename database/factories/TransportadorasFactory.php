<?php

namespace Database\Factories;

use App\Models\Transportadoras;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransportadorasFactory extends Factory
{
    protected $model = Transportadoras::class;

    public function definition()
    {
        return [
            'nome' => $this->faker->company,
            'endereco' => $this->faker->address,
            'email' => $this->faker->email,
            'telefone' => $this->faker->phoneNumber,
        ];
    }
}
