<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $table = 'estado';

    protected $primaryKey = 'id';

    protected $fillable = ['des_estado'];

    public function viviendas() {
    	return $this->hasMany('App\Vivienda');
    }

    public $timestamps = false;
}
