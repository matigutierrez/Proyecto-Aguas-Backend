<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mes extends Model
{
    protected $table = 'mes';

    protected $primaryKey = 'id';

    protected $fillable = ['des_mes'];

    public function registrosMensuales() {
      return $this->hasMany('App\RegistroMensual');
    }

    public $timestamps = false;
}
