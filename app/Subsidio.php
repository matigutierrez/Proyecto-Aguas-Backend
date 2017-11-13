<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subsidio extends Model
{
    protected $table = 'subsidio';

    protected $primaryKey = 'id';

    protected $fillable = ['des_subsidio'];

    public function vivienda() {
    	return $this->hasMany('App\Vivienda');
    }

    public $timestamps = false;
}
