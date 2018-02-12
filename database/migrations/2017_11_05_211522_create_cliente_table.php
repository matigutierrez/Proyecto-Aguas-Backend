<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('rut_cliente');
            $table->string('nombre',30);
            $table->string('apellido_pater',20);
            $table->string('apellido_mater',20);
            $table->string('telefono',20);
            $table->string('email',40);
            $table->boolean('estado_cliente');
            $table->integer('subsidio_id')->unsigned();
            $table->foreign('subsidio_id')->references('id')->on('subsidio')->onDelete('cascade')->onUpdate('cascade');
            $table->unique('rut_cliente');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cliente');
    }
}
