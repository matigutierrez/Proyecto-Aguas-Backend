<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistroMensualClienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro_mensual', function (Blueprint $table) {
            $table->integer('year');
            $table->timestamp('fecha_registro_consumo');
            $table->integer('lectura');
            $table->integer('saldo_pagado');
            $table->integer('consumo');
            $table->integer('valor_pagar');
            $table->integer('lectura_anterior');
            $table->integer('cargo_fijo');
            $table->integer('alcantarillado');
            $table->integer('vivienda_id')->unsigned();
            $table->integer('mes_id')->unsigned();
            $table->primary(['year', 'vivienda_id', 'mes_id']);
            $table->foreign('vivienda_id')->references('id')->on('vivienda')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('mes_id')->references('id')->on('mes')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registro_mensual');
    }
}
