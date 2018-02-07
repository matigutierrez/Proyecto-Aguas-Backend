<?php

use Illuminate\Database\Seeder;

class RegionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('region')->insert([
          array('des_zona' => 'ARICA Y PARINACOTA'),
          array('des_zona' => 'TARAPACÁ'),
          array('des_zona' => 'ANTOFAGASTA'),
          array('des_zona' => 'ATACAMA'),
          array('des_zona' => 'COQUIMBO'),
          array('des_zona' => 'VALPARAÍSO'),
          array('des_zona' => 'GRAL. BERNARDO O´HIGGINS'),
          array('des_zona' => 'DEL MAULE'),
          array('des_zona' => 'DEL BIOBÍO'),
          array('des_zona' => 'DE LA ARAUCANÍA'),
          array('des_zona' => 'DE LOS RÍOS'),
          array('des_zona' => 'DE LOS LAGOS'),
          array('des_zona' => 'AISÉN'),
          array('des_zona' => 'MAGALLANES Y DE LA ANTÁRTICA'),
          array('des_zona' => 'METROPOLITANA DE SANTIAGO')
        ]);
    }
}
