<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table = 'rol';

    protected $primaryKey = 'id';

    protected $fillable = ['des_rol'];

    public function usuarios() {
    	return $this->hasMany('App\Rol_Usuario');
    }

    public $timestamps = false;

}
