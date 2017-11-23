<?php

use Illuminate\Database\Seeder;

class MesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mes')->insert([
          array('des_mes' => 'Enero'),
          array('des_mes' => 'Febrero'),
          array('des_mes' => 'Marzo'),
          array('des_mes' => 'Abril'),
          array('des_mes' => 'Mayo'),
          array('des_mes' => 'Junio'),
          array('des_mes' => 'Julio'),
          array('des_mes' => 'Agosto'),
          array('des_mes' => 'Septiembre'),
          array('des_mes' => 'Octubre'),
          array('des_mes' => 'Noviembre'),
          array('des_mes' => 'Diciembre')
        ]);
    }
}
