<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AbonoBoleta extends Model
{
    protected $table = 'abono_boleta';

    protected $primaryKey = 'id';

    protected $fillable = ['cod_abono', 'monto_abonado', 'boleta_emitida_id'];

    public function boletaEmitida() {
    	return $this->belongsTo('App\BoletaEmitida');
    }

    public $timestamps = false;
}
