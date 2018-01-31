<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vivienda extends Model
{
    protected $table = 'vivienda';

    protected $primaryKey = 'id';

    protected $fillable = ['direccion', 'estado_id', 'comuna_id', 'subsidio_id'];

    public function estado(){
      return $this->belongsTo('App\Estado');
    }

    public function comuna() {
      return $this->belongsTo('App\Comuna');
    }

    public function subsidio() {
      return $this->belongsTo('App\Subsidio');
    }

    public function clientes() {
      return $this->belongsToMany('App\Cliente', 'vivienda_cliente', 'vivienda_id', 'cliente_id');
    }

    public function usuarios() {
      // Llamar como metodo (usando parentesis)
      return $this->clientes->pluck('usuarios');
    }

    public function registrosMensuales() {
      return $this->hasMany('App\RegistroMensual');
    }

    public function medidores() {
      return $this->hasMany('App\Medidor');
    }

    public function addCliente($id) {
      return $this->clientes->attach($id);
    }

    public function removeCliente($id) {
      return $this->clientes->detach($id);
    }

    public $timestamps = false;
}
