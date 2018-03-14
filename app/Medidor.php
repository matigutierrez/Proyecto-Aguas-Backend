<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medidor extends Model
{
    protected $table = 'medidor';

    protected $primaryKey = 'id';

    protected $fillable = ['num_medidor', 'marca_medidor', 'lectura_inicial', 'vivienda_id', 'estado_medidor_id', 'comite_id'];
    
    public function estadoMedidor() {
    	return $this->belongsTo('App\EstadoMedidor');
    }

    public function vivienda() {
    	return $this->belongsTo('App\Vivienda');
    }

    public function boletas() {
    	return $this->hasMany('App\BoletaEmitida');
    }

    public function comite() {
        return $this->belongsTo('App\Comite', 'comite_id');
    }

    public function registrosMensuales() {
        return $this->hasMany('App\RegistroMensual', 'medidor_id');
    }

    public $timestamps = false;
}
