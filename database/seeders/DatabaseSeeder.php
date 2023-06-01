<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Vendedores;
use App\Models\Transportadoras;
use App\Models\Pedidos;
use App\Models\EtiquetasEntrega;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Chame as factories para criar os registros no banco de dados
        Vendedores::factory(10)->create();
        Transportadoras::factory(5)->create();
        Pedidos::factory(20)->create();
        EtiquetasEntrega::factory(50)->create();
    }
}
