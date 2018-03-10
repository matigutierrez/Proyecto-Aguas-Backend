<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParametrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parametros', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('comite_id')->unsigned()->unique();
            $table->foreign('comite_id')->references('id')->on('comite')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('valor_metro');
            $table->integer('valor_maximo_descuento');
            $table->integer('valor_sobre_consumo');
            $table->integer('metros_sobre_consumo');
            $table->integer('cargo_fijo');
            $table->integer('alcantarillado');
            $table->integer('multa_reunion');
            $table->integer('multa_corte');
            $table->integer('multa_adulteracion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parametros');
    }
}
