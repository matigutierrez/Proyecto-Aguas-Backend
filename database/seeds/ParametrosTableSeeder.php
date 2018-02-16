<?php

use Illuminate\Database\Seeder;

class ParametrosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('parametros')->insert([
          'comite_id' => '1',
          'valor_metro' => '0',
          'valor_maximo_descuento' => '0',
          'valor_sobre_consumo' => '0',
          'metros_sobre_consumo' => '0',
          'cargo_fijo' => '0',
          'alcantarillado' => '0',
          'multa_reunion' => '0',
          'multa_corte' => '0', 
          'multa_adulteracion' => '0'
        ]);

        DB::table('parametros')->insert([
          'comite_id' => '2',
          'valor_metro' => '0',
          'valor_maximo_descuento' => '0',
          'valor_sobre_consumo' => '0',
          'metros_sobre_consumo' => '0',
          'cargo_fijo' => '0',
          'alcantarillado' => '0',
          'multa_reunion' => '0',
          'multa_corte' => '0', 
          'multa_adulteracion' => '0'
        ]);

        DB::table('parametros')->insert([
          'comite_id' => '3',
          'valor_metro' => '0',
          'valor_maximo_descuento' => '0',
          'valor_sobre_consumo' => '0',
          'metros_sobre_consumo' => '0',
          'cargo_fijo' => '0',
          'alcantarillado' => '0',
          'multa_reunion' => '0',
          'multa_corte' => '0', 
          'multa_adulteracion' => '0'
        ]);
    }
}
