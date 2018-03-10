<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComiteClienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comite_cliente', function (Blueprint $table) {
            $table->integer('comite_id')->unsigned();
            $table->foreign('comite_id')->references('id')->on('comite')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('cliente_id')->unsigned();
            $table->foreign('cliente_id')->references('id')->on('cliente')->onDelete('cascade')->onUpdate('cascade');
            $table->primary(['comite_id', 'cliente_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comite_cliente');
    }
}
