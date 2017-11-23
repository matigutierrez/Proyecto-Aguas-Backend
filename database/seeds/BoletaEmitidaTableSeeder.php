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
          'nro_boleta' => '00543',
          'nombre_cliente' => 'Matias Gutierrez',
          'domicilio' => 'Lomas 666',
          'saldo' => '12500',
          'monto_pagar' => '26300',
          'lectura_anterior' => '0',
          'lectura_actual' => '12356',
          'consumo' => '253',
          'subsidio' => '15000', 
          'total' => '38800',
          'fecha_pago' => '2017/11/19',
          'cargo_fijo' => '0',
          'alcantarillado' => '102',
          'multa_reunion' => '0',
          'multa_corte' => '0',
          'multa_adulteracion' => '0',
          'total_abono' => '50000',
          'paga_boleta' => '00025',
          'medidor_id' => '1'
        ]);
    }
}
