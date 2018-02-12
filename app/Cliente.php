<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use DB;

class Cliente extends Model
{
    protected $table = 'cliente';

    protected $primaryKey = "id";

    protected $fillable = ['rut_cliente', 'nombre', 'apellido_pater', 'apellido_mater', 'telefono', 'email', 'estado_cliente', 'subsidio_id'];

    protected $appends = ['medidores'];
    
    public function usuarios() {
        return $this->hasMany('App\Usuario', 'cliente_id');
    }

    public function viviendasCliente() {
        return $this->hasMany('App\ViviendaCliente');
    }

    public function subsidio() {
      return $this->belongsTo('App\Subsidio');
    }

    public function viviendas() {
        return $this->belongsToMany('App\Vivienda', 'vivienda_cliente', 'cliente_id', 'vivienda_id');
    }

    public function addVivienda($id) {
        return $this->viviendas()->attach($id);
    }

    public function removeVivienda($id) {
        return $this->viviendas()->detach($id);
    }

    public function getMedidoresAttribute() {
        return $this->viviendas->pluck('medidores')->collapse()->unique('id');
    }

    public $timestamps = false;
}
