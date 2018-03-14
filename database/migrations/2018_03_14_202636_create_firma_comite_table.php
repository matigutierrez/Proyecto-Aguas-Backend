<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFirmaComiteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('firma_comite', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('comite_id')->unsigned();
            $table->foreign('comite_id')->references('id')->on('comite')->onDelete('cascade')->onUpdate('cascade');
            $table->binary('firma');
            $table->timestamp('fecha_edicion');
        });
        DB::statement('ALTER TABLE firma_comite MODIFY COLUMN firma MEDIUMBLOB');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('firma_comite');
    }
}
