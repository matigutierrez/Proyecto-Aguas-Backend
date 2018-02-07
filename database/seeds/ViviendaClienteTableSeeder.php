<?php

use Illuminate\Database\Seeder;

class ViviendaClienteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vivienda_cliente')->insert([
          'cliente_id' => '1',
          'vivienda_id' => '1'
        ]);

        DB::table('vivienda_cliente')->insert([
          'cliente_id' => '2',
          'vivienda_id' => '2'
        ]);

        DB::table('vivienda_cliente')->insert([
          'cliente_id' => '3',
          'vivienda_id' => '3'
        ]);

        DB::table('vivienda_cliente')->insert([
          'cliente_id' => '4',
          'vivienda_id' => '4'
        ]);

        DB::table('vivienda_cliente')->insert([
          'cliente_id' => '5',
          'vivienda_id' => '5'
        ]);

        DB::table('vivienda_cliente')->insert([
          'cliente_id' => '6',
          'vivienda_id' => '6'
        ]);
    }
}
