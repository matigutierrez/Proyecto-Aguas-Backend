<?php

use Illuminate\Database\Seeder;

class MedidorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('medidor')->insert([
          'num_medidor' => 'A000001',
          'marca_medidor' => 'MediWater',
          'lectura_inicial' => '0',
          'vivienda_id' => '1',
          'estado_medidor_id' => '1'
        ]);
    }
}
