<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('etiquetas_entrega', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vendedor_id');
            $table->unsignedBigInteger('transportadora_id');
            $table->unsignedBigInteger('pedido_id');
            $table->date('data_envio');
            $table->timestamps();

            $table->foreign('vendedor_id')->references('id')->on('vendedores');
            $table->foreign('transportadora_id')->references('id')->on('transportadoras');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etiquetas_entrega');
    }
};
