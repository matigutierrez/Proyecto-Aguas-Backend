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
          array('des_estado_medidor' => 'Activo'),
          array('des_estado_medidor' => 'Inactivo')
        ]);
    }
}
