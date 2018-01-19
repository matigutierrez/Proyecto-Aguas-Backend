<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comite extends Model
{
    protected $table = 'comite';

    protected $primarykey = 'id';

    protected $fillable = ['nombre'];

    //protected $appends = ['usuarios'];

    public $timestamps = false;

    public function administradores() {
        return $this->hasMany('App\Usuario', 'comite_id');
    }

    // $comite->usuarios
    /* (El metodo es muy pesado, utiliza mucha memoria y 'crashea')
    public function getUsuariosAttribute() {
        return $this->medidores->pluck('vivienda.clientes.*.usuarios')->collapse();
    }
    */

    public function comuna() {
    	return $this->belongsTo('App\Comuna', 'comuna_id');
    }

    public function medidores() {
    	return $this->hasMany('App\Medidor', 'comite_id');
    }

}
