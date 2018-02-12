<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parametros extends Model
{
    protected $table = 'parametros';

    protected $primaryKey = 'id';

    protected $fillable = [
    	'comite_id',
    	'valor_metro',
    	'valor_maximo_descuento',
    	'valor_sobre_consumo',
    	'metros_sobre_consumo',
    	'cargo_fijo',
    	'alcantarillado',
    	'multa_reunion',
    	'multa_corte',
    	'multa_adulteracion'
    ];

    protected $timetamps = false;

    public function comite() {
    	return $this->belongsTo('App\Comite');
    }
}
