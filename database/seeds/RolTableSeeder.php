<?php

use Illuminate\Database\Seeder;

class RolTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rol')->insert([
          array('des_rol' => 'admin'),
          array('des_rol' => 'usuario')
        ]);
    }
}