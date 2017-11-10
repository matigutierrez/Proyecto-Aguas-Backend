<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateViviendaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vivienda', function (Blueprint $table) {
            $table->increments('id');
            $table->string('direccion',50);
            $table->timestamp('fecha_ingreso');
            $table->integer('estado_id')->unsigned();
            $table->integer('comuna_id')->unsigned();
            $table->integer('subsidio_id')->unsigned();
            $table->foreign('subsidio_id')->references('id')->on('subsidio')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('comuna_id')->references('id')->on('comuna')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('estado_id')->references('id')->on('estado')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vivienda');
    }
}
