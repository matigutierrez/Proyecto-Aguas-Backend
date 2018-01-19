<?php

use Illuminate\Database\Seeder;

class UsuarioComiteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuario_administra_comite')->insert(['usuario_id' => 2, 'comite_id' => 1]);
    }
}
