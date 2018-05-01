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
          'des_subsidio' => 'subsidio 1',
          'subsidio_porcentaje' => 10,
        ]);

        DB::table('subsidio')->insert([
          'des_subsidio' => 'subsidio 2',
          'subsidio_porcentaje' => 20,
        ]);

        DB::table('subsidio')->insert([
          'des_subsidio' => 'subsidio 3',
          'subsidio_porcentaje' => 30,
        ]);
    }
}
