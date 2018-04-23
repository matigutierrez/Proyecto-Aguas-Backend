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
          'lectura' => '12',
          'saldo_pagado' => '0',
          'consumo' => '12',
          'valor_pagar' => '7408',
          'lectura_anterior' => '0',
          'cargo_fijo' => '1165',
          'alcantarillado' => '747',
          'vivienda_id' => '1',
          'medidor_id' => '1',
          'mes_id' => '4'
        ]);

        DB::table('registro_mensual')->insert([
          'year' => '2018',
          'lectura' => '12',
          'saldo_pagado' => '0',
          'consumo' => '12',
          'valor_pagar' => '7408',
          'lectura_anterior' => '0',
          'cargo_fijo' => '1165',
          'alcantarillado' => '747',
          'vivienda_id' => '2',
          'medidor_id' => '2',
          'mes_id' => '4'
        ]);
    }
}
