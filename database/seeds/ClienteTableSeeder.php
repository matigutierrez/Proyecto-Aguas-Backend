<?php

use Illuminate\Database\Seeder;

class ClienteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('cliente')->insert([
				 
					'rut_cliente' => '19418977',
				  'nombre' => 'Matias', 
				  'apellido_pater' =>	'Gutierrez',
				  'apellido_mater' => 'Luco',
				  'telefono' => '487392',
				  'email' => 'mgutierrezl1402@ufromail.cl',
				  'residencia' => 'Lomas'
					
				]);
    }
}
