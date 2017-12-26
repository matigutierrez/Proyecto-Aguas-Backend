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
    }
}
