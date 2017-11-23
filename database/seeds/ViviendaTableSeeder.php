<?php

use Illuminate\Database\Seeder;

class ViviendaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vivienda')->insert([
          'direccion' => 'Lomas 666',
          'estado_id' => '1',
          'comuna_id' => '2',
          'subsidio_id' => '1'
        ]);
    }
}
