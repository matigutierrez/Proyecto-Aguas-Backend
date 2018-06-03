<?php

use Illuminate\Database\Seeder;

class AbonoBoletaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abono_boleta')->insert([
          'monto_abonado' => '50000',
          'boleta_emitida_id' => '1'
        ]);
    }
}
