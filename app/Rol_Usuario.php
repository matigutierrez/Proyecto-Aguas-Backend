<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol_Usuario extends Model
{
    protected $table = 'rol_usuario';

    protected $primaryKey = 'id';

    protected $fillable = ['usuario_id', 'rol_id'];

    public function usuario() {
    	return $this->belongsTo('App\Usuario');
    }

    public function rol() {
    	return $this->belongsTo('App\Rol');
    }

    public $timestamps = false;
}
