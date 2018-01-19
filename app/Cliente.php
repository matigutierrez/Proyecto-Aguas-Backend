<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use DB;

class Cliente extends Model
{
    protected $table = 'cliente';

    protected $primaryKey = "id";

    protected $fillable = ['rut_cliente', 'nombre', 'apellido_pater', 'apellido_mater', 'telefono', 'email', 'residencia'];
    
    public function usuarios() {
        return $this->hasMany('App\Usuario', 'cliente_id');
    }

    public function viviendasCliente() {
        return $this->hasMany('App\ViviendaCliente');
    }

    public function viviendas() {
        return $this->belongsToMany('App\Vivienda', 'vivienda_cliente', 'cliente_id', 'vivienda_id');
    }

    public $timestamps = false;
}
