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
          'saldo' => '7408',
          'monto_pagar' => '7408',
          'lectura_anterior' => '0',
          'lectura_actual' => '12',
          'consumo' => '12',
          'subsidio' => '10000', 
          'total' => '0',
          'fecha_pago' => '2018/04/22',
          'cargo_fijo' => '1165',
          'alcantarillado' => '747',
          'multa_reunion' => '0',
          'multa_corte' => '0',
          'multa_adulteracion' => '0',
          'total_abono' => '0',
          'paga_boleta' => '0',
          'medidor_id' => '1'
        ]);

        DB::table('boleta_emitida')->insert([
          'nro_boleta' => '00002',
          'nombre_cliente' => 'Juan Perez',
          'domicilio' => 'Tucapel 1256',
          'saldo' => '7408',
          'monto_pagar' => '7408',
          'lectura_anterior' => '0',
          'lectura_actual' => '12',
          'consumo' => '12',
          'subsidio' => '10000', 
          'total' => '0',
          'fecha_pago' => '2018/04/22',
          'cargo_fijo' => '1165',
          'alcantarillado' => '747',
          'multa_reunion' => '0',
          'multa_corte' => '0',
          'multa_adulteracion' => '0',
          'total_abono' => '0',
          'paga_boleta' => '0',
          'medidor_id' => '2'
        ]);
    }
}
