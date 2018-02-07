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
        ['nombre_usu' => 'hochstetter01', 'password' => bcrypt('1234'), 'cliente_id' => null, 'superadmin' => true, 'comite_id' => null],
        ['nombre_usu' => 'villagra02', 'password' => bcrypt('1234'), 'cliente_id' => null, 'superadmin' => true, 'comite_id' => null],

        ['nombre_usu' => 'Matias03', 'password' => bcrypt('1234'), 'cliente_id' => '1', 'superadmin' => false, 'comite_id' => 1],
        ['nombre_usu' => 'Daniel02', 'password' => bcrypt('1234'), 'cliente_id' => '3', 'superadmin' => false, 'comite_id' => 2],
        ['nombre_usu' => 'Alonso01', 'password' => bcrypt('1234'), 'cliente_id' => '5', 'superadmin' => false, 'comite_id' => 3],
        
      ]);
    }

}
