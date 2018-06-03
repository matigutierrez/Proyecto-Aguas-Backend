<?php

use Illuminate\Database\Seeder;

class BoletaEmitidaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('boleta_emitida')->insert([
          'nro_boleta' => '00001',
          'nombre_cliente' => 'Matias Gutierrez',
          'domicilio' => 'Lomas 666',
          'saldo' => '0',
          'monto_pagar' => '6034',
          'lectura_anterior' => '0',
          'lectura_actual' => '10',
          'consumo' => '10',
          'subsidio' => '5', 
          'total' => '7946',
          'fecha_pago' => '2018/04/22',
          'cargo_fijo' => '1165',
          'alcantarillado' => '747',
          'multa_reunion' => '0',
          'multa_corte' => '0',
          'multa_adulteracion' => '0',
          'medidor_id' => '1'
        ]);

        DB::table('boleta_emitida')->insert([
          'nro_boleta' => '00002',
          'nombre_cliente' => 'Matias Gutierrez',
          'domicilio' => 'Lomas 666',
          'saldo' => '6034',
          'monto_pagar' => '6034',
          'lectura_anterior' => '10',
          'lectura_actual' => '20',
          'consumo' => '10',
          'subsidio' => '5', 
          'total' => '13980',
          'fecha_pago' => '2018/05/22',
          'cargo_fijo' => '1165',
          'alcantarillado' => '747',
          'multa_reunion' => '0',
          'multa_corte' => '0',
          'multa_adulteracion' => '0',
          'medidor_id' => '1'
        ]);
    }
}
