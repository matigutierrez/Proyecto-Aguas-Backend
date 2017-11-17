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

    public $timestamps = false;
}
