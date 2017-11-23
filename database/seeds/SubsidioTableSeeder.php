<?php

use Illuminate\Database\Seeder;

class SubsidioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subsidio')->insert([
          'des_subsidio' => 'Descuento del 20%'
        ]);
    }
}
