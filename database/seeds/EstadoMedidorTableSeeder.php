<?php

use Illuminate\Database\Seeder;

class EstadoMedidorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estado_medidor')->insert([
          array('des_estado_medidor' => 'Funcionando 100%'),
          array('des_estado_medidor' => 'Mal funcionamiento')
        ]);
    }
}
