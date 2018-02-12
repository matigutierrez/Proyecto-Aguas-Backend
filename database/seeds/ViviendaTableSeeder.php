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
          'comuna_id' => '1'
        ]);

        DB::table('vivienda')->insert([
          'direccion' => 'Tucapel 1256',
          'estado_id' => '1',
          'comuna_id' => '1'
        ]);

        DB::table('vivienda')->insert([
          'direccion' => 'Caupolican 430',
          'estado_id' => '1',
          'comuna_id' => '5'
        ]);

        DB::table('vivienda')->insert([
          'direccion' => 'Teniente Merino 030',
          'estado_id' => '1',
          'comuna_id' => '5'
        ]);

        DB::table('vivienda')->insert([
          'direccion' => 'Fco. Salzar 340',
          'estado_id' => '1',
          'comuna_id' => '12'
        ]);

        DB::table('vivienda')->insert([
          'direccion' => 'Bilbao 209',
          'estado_id' => '1',
          'comuna_id' => '12'
        ]);
    }
}
