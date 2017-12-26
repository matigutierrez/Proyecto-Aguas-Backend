<?php

use Illuminate\Database\Seeder;

class ComunaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comuna')->insert([
          array('des_comu' => 'Iquique', 'region_id' => '1'),
          array('des_comu' => 'Alto Hospicio', 'region_id' => '1'),
          array('des_comu' => 'Pozo Almonte', 'region_id' => '1'),
          array('des_comu' => 'Camiña', 'region_id' => '1'),
          array('des_comu' => 'Colchane', 'region_id' => '1'),
          array('des_comu' => 'Huara', 'region_id' => '1'),
          array('des_comu' => 'Pica', 'region_id' => '1'),

          array('des_comu' => 'Antofagasta', 'region_id' => '2'),
          array('des_comu' => 'Mejillones', 'region_id' => '2'),
          array('des_comu' => 'Sierra Gorda', 'region_id' => '2'),
          array('des_comu' => 'Taltal', 'region_id' => '2'),
          array('des_comu' => 'Calama', 'region_id' => '2'),
          array('des_comu' => 'Ollagüe', 'region_id' => '2'),
          array('des_comu' => 'San Pedro de Atacama', 'region_id' => '2'),
          array('des_comu' => 'Tocopilla', 'region_id' => '2'),
          array('des_comu' => 'María Elena', 'region_id' => '2'),
        ]);
    }
}
