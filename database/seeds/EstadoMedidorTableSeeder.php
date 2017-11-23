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
          'des_estado_medidor' => 'Funcionando 100%'
        ]);
    }
}
