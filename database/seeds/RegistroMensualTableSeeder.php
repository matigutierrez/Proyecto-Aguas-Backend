<?php

use Illuminate\Database\Seeder;

class RegistroMensualTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('registro_mensual')->insert([
          'year' => '2018',
          'lectura' => '10',
          'saldo_pagado' => '0',
          'consumo' => '10',
          'valor_pagar' => '6034',
          'lectura_anterior' => '0',
          'cargo_fijo' => '1165',
          'alcantarillado' => '747',
          'vivienda_id' => '1',
          'medidor_id' => '1',
          'mes_id' => '4'
        ]);

        DB::table('registro_mensual')->insert([
          'year' => '2018',
          'lectura' => '20',
          'saldo_pagado' => '6034',
          'consumo' => '10',
          'valor_pagar' => '6034',
          'lectura_anterior' => '10',
          'cargo_fijo' => '1165',
          'alcantarillado' => '747',
          'vivienda_id' => '1',
          'medidor_id' => '1',
          'mes_id' => '5'
        ]);
    }
}
