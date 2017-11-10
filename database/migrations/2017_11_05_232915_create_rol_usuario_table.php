<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rol_usuario', function (Blueprint $table) {
            $table->integer('usu_id')->unsigned();
            $table->integer('rol_id')->unsigned();
            $table->primary(['usu_id', 'rol_id']);
            $table->foreign('usu_id')->references('id')->on('usuario')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('rol_id')->references('id')->on('rol')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rol_usuario');
    }
}
