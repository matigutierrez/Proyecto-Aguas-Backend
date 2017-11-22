<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BoletaEmitida extends Model
{
    protected $table = 'boleta_emitida';

    protected $primaryKey = 'id';

    protected $fillable = ['nro_boleta', 'nombre_cliente', 'domicilio', 'saldo', 'monto_pagar', 'lectura_anterior', 'lectura_actual', 'consumo', 'subsidio', 'total', 'fecha_pago', 'cargo_fijo', 'alcantarillado', 'multa_reunion', 'multa_corte', 'multa_adulteracion', 'total_abono', 'paga_boleta', 'medidor_id'];

    public function medidor() {
    	return $this->belongsTo('App\Medidor');
    }

    public function abonosBoletas() {
    	return $this->hasMany('App\AbonoMedidor');
    }

    public $timestamps = false;
}
