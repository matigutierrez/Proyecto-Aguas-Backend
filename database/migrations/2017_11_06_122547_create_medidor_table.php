<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedidorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medidor', function (Blueprint $table) {
            $table->increments('id');
            $table->string('num_medidor',20);
            $table->string('marca_medidor',20);
            $table->timestamp('fecha_registro');
            $table->integer('lectura_inicial');
            $table->integer('vivienda_id')->unsigned();
            $table->integer('estado_medidor_id')->unsigned();
            $table->integer('comite_id')->unsigned();
            $table->unique('num_medidor');
            $table->foreign('vivienda_id')->references('id')->on('vivienda')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('estado_medidor_id')->references('id')->on('estado_medidor')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('comite_id')->references('id')->on('comite')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medidor');
    }
}
