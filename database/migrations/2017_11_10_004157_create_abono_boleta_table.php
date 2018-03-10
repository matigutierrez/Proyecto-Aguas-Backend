<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbonoBoletaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abono_boleta', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cod_abono');
            $table->timestamp('fecha');
            $table->integer('monto_abonado');
            $table->integer('boleta_emitida_id')->unsigned();
            $table->foreign('boleta_emitida_id')->references('id')->on('boleta_emitida')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('abono_boleta');
    }
}
