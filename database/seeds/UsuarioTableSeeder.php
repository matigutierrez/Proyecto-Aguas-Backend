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
          'nombre_usu' => 'Matias20',
          'password' => bcrypt('1234'),
          'cliente_id' => '1',
          'rol_id' => '1'
        ]);
    }

}
