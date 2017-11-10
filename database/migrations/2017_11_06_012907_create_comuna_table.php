<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComunaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comuna', function (Blueprint $table) {
            $table->increments('id');
            $table->string('des_comu',30);
            $table->unique('des_comu');
            $table->integer('region_id')->unsigned();
            $table->foreign('region_id')->references('id')->on('region')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comuna');
    }
}
