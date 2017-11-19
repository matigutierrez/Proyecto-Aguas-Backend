<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ViviendaCliente extends Model
{
    protected $table = 'vivienda_cliente';

    protected $primaryKey = 'id';

    protected $fillable = ['cliente_id', 'vivienda_id'];

    public function cliente() {
      return $this->belongsTo('App\Cliente');
    }

    public function vivienda() {
      return $this->belongsTo('App\Vivienda');
    }

    public $timestamps = false;
}
