<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subsidio extends Model
{
    protected $table = 'subsidio';

    protected $primaryKey = 'id';

    protected $fillable = ['des_subsidio', 'subsidio_porcentaje'];

    public function clientes() {
    	return $this->hasMany('App\Cliente');
    }

    public $timestamps = false;
}
