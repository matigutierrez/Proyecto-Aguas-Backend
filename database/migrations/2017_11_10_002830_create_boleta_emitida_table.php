<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoletaEmitidaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boleta_emitida', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nro_boleta')->nullable();
            $table->string('nombre_cliente', 70);
            $table->string('domicilio', 30);
            $table->integer('saldo');
            $table->integer('monto_pagar');
            $table->integer('lectura_anterior');
            $table->integer('lectura_actual');
            $table->integer('consumo');
            $table->integer('subsidio');
            $table->integer('total');
            $table->date('fecha_pago');
            $table->integer('cargo_fijo');
            $table->integer('alcantarillado');
            $table->integer('multa_reunion');
            $table->integer('multa_corte');
            $table->integer('multa_adulteracion');
            $table->integer('total_abono');
            $table->integer('paga_boleta');
            $table->unique('nro_boleta');
            $table->integer('medidor_id')->unsigned();
            $table->foreign('medidor_id')->references('id')->on('medidor')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('boleta_emitida');
    }
}
