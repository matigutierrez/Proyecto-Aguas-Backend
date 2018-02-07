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
          'apellido_pater' => 'Gutierrez',
          'apellido_mater' => 'Luco',
          'telefono' => '487392',
          'email' => 'mgutierrezl1402@ufromail.cl',
          'residencia' => 'Vilcún'         
        ]);
        DB::table('cliente')->insert([
          'rut_cliente' => '78954562',
          'nombre' => 'Juan', 
          'apellido_pater' => 'Pérez',
          'apellido_mater' => 'Gonzáles',
          'telefono' => '89563456',
          'email' => 'juan@hotmail.cl',
          'residencia' => 'Temuco'         
        ]);
        DB::table('cliente')->insert([
          'rut_cliente' => '185044890',
          'nombre' => 'Daniel Enoc', 
          'apellido_pater' => 'Coronado',
          'apellido_mater' => 'Mendoza',
          'telefono' => '+56947149803',
          'email' => 'danielcoronado@hotmail.cl',
          'residencia' => 'Pitrufquén'         
        ]);
        DB::table('cliente')->insert([
          'rut_cliente' => '124567898',
          'nombre' => 'Carlos', 
          'apellido_pater' => 'Espinoza',
          'apellido_mater' => 'Sandoval',
          'telefono' => '+56945456478',
          'email' => 'carlos@hotmail.cl',
          'residencia' => 'Pitrufquén'         
        ]);
        DB::table('cliente')->insert([
          'rut_cliente' => '195643210',
          'nombre' => 'Matías Alonso', 
          'apellido_pater' => 'Hermosilla',
          'apellido_mater' => 'De La Fuente',
          'telefono' => '+56945678912',
          'email' => 'm.hermosilla03o@ufromail.cl',
          'residencia' => 'Temuco'         
        ]);
        DB::table('cliente')->insert([
          'rut_cliente' => '201234562',
          'nombre' => 'Julio', 
          'apellido_pater' => 'Retamal',
          'apellido_mater' => 'De La Fuente',
          'telefono' => '+56978965489',
          'email' => 'julio@ufromail.cl',
          'residencia' => 'Temuco'         
        ]);
    }
}
