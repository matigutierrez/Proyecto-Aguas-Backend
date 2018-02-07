<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegistroMensual extends Model
{
    protected $table = 'registro_mensual';

    protected $primaryKey = 'id';

    protected $filllable = ['year', 'lectura', 'saldo_pagado', 'consumo', 'valor_pagar', 'lectura_anterior', 'cargo_fijo', 'alcantarillado', 'vivienda_id', 'medidor_id', 'mes_id'];

    public function vivienda() {
        return $this->belongsTo('App\Vivienda');
    }

    public function mes() {
    	return $this->belongsTo('App\Mes');
    }

    public function medidor() {
        return $this->belongsTo('App\Medidor', 'medidor_id');
    }

    public $timestamps = false;
}
