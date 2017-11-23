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
            array('des_zona' => 'Tarapaca'),
            array('des_zona' => 'Antofagasta'),
            array('des_zona' => 'Atacama'),
            array('des_zona' => 'Coquimbo'),
            array('des_zona' => 'Valparaiso'),
            array('des_zona' => 'Metropolitana'),
            array('des_zona' => 'O Higgins'),
            array('des_zona' => 'Maule'),
            array('des_zona' => 'Bio Bio'),
            array('des_zona' => 'Araucania'),
            array('des_zona' => 'Los Rios'),
            array('des_zona' => 'Los Lagos'),
            array('des_zona' => 'Aisen'),
            array('des_zona' => 'Magallanes')
        ]);
    }
}
