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
          'estado_medidor_id' => '1',
          'comite_id' => '1'
        ]);

        DB::table('medidor')->insert([
          'num_medidor' => 'B000005',
          'marca_medidor' => 'Marca 2',
          'lectura_inicial' => '0',
          'vivienda_id' => '2',
          'estado_medidor_id' => '1',
          'comite_id' => '1'
        ]);

        DB::table('medidor')->insert([
          'num_medidor' => 'Hqe0005',
          'marca_medidor' => 'Marca 3',
          'lectura_inicial' => '0',
          'vivienda_id' => '3',
          'estado_medidor_id' => '1',
          'comite_id' => '2'
        ]);

        DB::table('medidor')->insert([
          'num_medidor' => 'ZZx006',
          'marca_medidor' => 'Marca 4',
          'lectura_inicial' => '0',
          'vivienda_id' => '4',
          'estado_medidor_id' => '1',
          'comite_id' => '2'
        ]);

        DB::table('medidor')->insert([
          'num_medidor' => 'PP9005',
          'marca_medidor' => 'Marca 5',
          'lectura_inicial' => '0',
          'vivienda_id' => '5',
          'estado_medidor_id' => '1',
          'comite_id' => '3'
        ]);

        DB::table('medidor')->insert([
          'num_medidor' => 'HHH0005',
          'marca_medidor' => 'Marca 6',
          'lectura_inicial' => '0',
          'vivienda_id' => '6',
          'estado_medidor_id' => '1',
          'comite_id' => '3'
        ]);
    }
}
