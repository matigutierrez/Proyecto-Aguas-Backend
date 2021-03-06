<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(SubsidioTableSeeder::class);
        $this->call(ClienteTableSeeder::class);
        $this->call(RegionTableSeeder::class);
        $this->call(ComunaTableSeeder::class);
        $this->call(ComiteTableSeeder::class);
        $this->call(ParametrosTableSeeder::class);
        $this->call(UsuarioTableSeeder::class);
        $this->call(EstadoTableSeeder::class);
        $this->call(ViviendaTableSeeder::class);
        $this->call(EstadoMedidorTableSeeder::class);
        $this->call(MedidorTableSeeder::class);
        $this->call(MesTableSeeder::class);
        $this->call(RegistroMensualTableSeeder::class);
        $this->call(BoletaEmitidaTableSeeder::class);
        $this->call(AbonoBoletaTableSeeder::class);
        $this->call(ViviendaClienteTableSeeder::class);
    }
}
