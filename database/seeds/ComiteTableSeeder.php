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
            ['nombre' => 'Comite Iquique', 'comuna_id' => '1'],
            ['nombre' => 'Alto Hospicio', 'comuna_id' => '2']
        ]);
    }
}
