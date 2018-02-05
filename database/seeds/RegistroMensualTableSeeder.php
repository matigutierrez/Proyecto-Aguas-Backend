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
          'year' => '2017',
          'lectura' => '14562',
          'saldo_pagado' => '50000',
          'consumo' => '253',
          'valor_pagar' => '26300',
          'lectura_anterior' => '0',
          'cargo_fijo' => '0',
          'alcantarillado' => '102',
          'vivienda_id' => '1',
          'medidor_id' => '1',
          'mes_id' => '11'
        ]);
    }
}
