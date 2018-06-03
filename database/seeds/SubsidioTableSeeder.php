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
          'subsidio_porcentaje' => 5,
        ]);

        DB::table('subsidio')->insert([
          'des_subsidio' => 'subsidio 2',
          'subsidio_porcentaje' => 10,
        ]);

        DB::table('subsidio')->insert([
          'des_subsidio' => 'subsidio 3',
          'subsidio_porcentaje' => 15,
        ]);

        DB::table('subsidio')->insert([
          'des_subsidio' => 'subsidio 4',
          'subsidio_porcentaje' => 20,
        ]);

        DB::table('subsidio')->insert([
          'des_subsidio' => 'subsidio 5',
          'subsidio_porcentaje' => 25,
        ]);

        DB::table('subsidio')->insert([
          'des_subsidio' => 'subsidio 6',
          'subsidio_porcentaje' => 30,
        ]);

        DB::table('subsidio')->insert([
          'des_subsidio' => 'subsidio 7',
          'subsidio_porcentaje' => 35,
        ]);

        DB::table('subsidio')->insert([
          'des_subsidio' => 'subsidio 8',
          'subsidio_porcentaje' => 40,
        ]);

        DB::table('subsidio')->insert([
          'des_subsidio' => 'subsidio 9',
          'subsidio_porcentaje' => 45,
        ]);

        DB::table('subsidio')->insert([
          'des_subsidio' => 'subsidio 10',
          'subsidio_porcentaje' => 50,
        ]);

        DB::table('subsidio')->insert([
          'des_subsidio' => 'subsidio 11',
          'subsidio_porcentaje' => 55,
        ]);

        DB::table('subsidio')->insert([
          'des_subsidio' => 'subsidio 12',
          'subsidio_porcentaje' => 60,
        ]);

        DB::table('subsidio')->insert([
          'des_subsidio' => 'subsidio 13',
          'subsidio_porcentaje' => 65,
        ]);

        DB::table('subsidio')->insert([
          'des_subsidio' => 'subsidio 14',
          'subsidio_porcentaje' => 70,
        ]);

        DB::table('subsidio')->insert([
          'des_subsidio' => 'subsidio 15',
          'subsidio_porcentaje' => 75,
        ]);

        DB::table('subsidio')->insert([
          'des_subsidio' => 'subsidio 16',
          'subsidio_porcentaje' => 80,
        ]);

        DB::table('subsidio')->insert([
          'des_subsidio' => 'subsidio 17',
          'subsidio_porcentaje' => 85,
        ]);

        DB::table('subsidio')->insert([
          'des_subsidio' => 'subsidio 18',
          'subsidio_porcentaje' => 90,
        ]);
    }
}
