<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use DB;

class Cliente extends Model
{
    protected $table = 'cliente';

    protected $primaryKey = "id";

    protected $fillable = ['rut_cliente', 'nombre', 'apellido_pater', 'apellido_mater', 'telefono', 'email', 'residencia']; 

    public function usuario() {
    	return $this->hasOne('App\Usuario');
    }

    public function viviendas() {
        return $this->hasMany('App\ViviendaCliente');
    }

    public $timestamps = false;
}
