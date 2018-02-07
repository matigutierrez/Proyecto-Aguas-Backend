<?php

use Illuminate\Database\Seeder;

class ComiteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comite')->insert([
            'nombre' => 'Comite Arica', 
            'comuna_id' => '1'
        ]);
        DB::table('comite')->insert([
            'nombre' => 'Comite Alto Hospicio', 
            'comuna_id' => '5'
        ]);
        DB::table('comite')->insert([
            'nombre' => 'Comite Antofagasta', 
            'comuna_id' => '12'
        ]);
    }
}
