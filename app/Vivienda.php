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

    public function getUsuarios() {
      // All llamar este metodo: vivienda->getUsuarios()
      // Los parentesis son importantes
      $usuarios = [];
      foreach ($this->clientes as $cliente) {
        foreach ($cliente->usuarios as $usuario) {
          array_push($usuarios, $usuario);
        }
      }
      return $usuarios;
    }

    public function registrosMensuales() {
      return $this->hasMany('App\RegistroMensual');
    }

    public function medidor() {
      return $this->hasOne('App\Medidor');
    }

    public $timestamps = false;
}
