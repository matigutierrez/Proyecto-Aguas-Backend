<?php

use Illuminate\Database\Seeder;

class UsuarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('usuario')->insert([
        ['nombre_usu' => 'Matias21', 'password' => bcrypt('1234'), 'cliente_id' => '1', 'superadmin' => false, 'comite_id' => 1],
        ['nombre_usu' => 'Matias20', 'password' => bcrypt('1234'), 'cliente_id' => '1', 'superadmin' => true, 'comite_id' => null]
        
      ]);
    }

}
