<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveVendedorIdFromEtiquetasEntrega extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('etiquetas_entrega', function (Blueprint $table) {
            $table->dropForeign(['vendedor_id']);
            $table->dropColumn('vendedor_id');
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('etiquetas_entrega', function (Blueprint $table) {
            $table->unsignedBigInteger('vendedor_id')->after('transportadora_id');
            $table->foreign('vendedor_id')->references('id')->on('vendedores');
        });
    }
}
