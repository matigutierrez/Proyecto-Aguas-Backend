<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuario';

    protected $primaryKey = 'id';

    protected $fillable = ['nombre_usu', 'pass_usu', 'cliente_id'];

    protected $hidden = ['pass_usu', 'remember_token',];

    public function cliente() {
    	return $this->belongsTo('App\Cliente');
    }

    public function usuario_rol() {
    	return $this->hasMany('App\Rol_Usuario');
    }

    public $timestamps = false;
}
