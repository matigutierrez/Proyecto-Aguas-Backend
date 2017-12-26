<?php

use Illuminate\Database\Seeder;

class EstadoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estado')->insert([
            array('des_estado' => 'Sin Pagar'),
            array('des_estado' => 'Pagada'),
        ]);
    }
}
