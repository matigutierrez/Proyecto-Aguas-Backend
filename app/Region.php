<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $table = 'region';

    protected $primaryKey = 'id';

    protected $fillable = ['des_zona'];

    public function comunas() {
    	return $this->hasMany('App\Comuna');
    }

    public $timestamps = false;
}
