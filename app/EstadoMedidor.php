<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstadoMedidor extends Model
{
    protected $table = 'estado_medidor';

    protected $primarykey = 'id';

    protected $fillable = ['des_estado_medidor'];

    public function medidores() {
    	return $this->hasMany('App\Medidor');
    }

    public $timestamps = false;
}
