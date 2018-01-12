<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Usuario extends Authenticatable
{
    use Notifiable;

    protected $table = 'usuario';

    protected $primaryKey = 'id';

    protected $fillable = ['nombre_usu', 'password', 'cliente_id'];

    protected $hidden = ['password', 'remember_token',];

    public function cliente() {
        return $this->belongsTo('App\Cliente');
    }

    public function roles() {
        return $this->hasMany('App\Rol_Usuario');
    }

    public function comites() {
        return $this->belongsToMany('App\Comite', 'usuario_comite', 'usuario_id', 'comite_id');
    }

    public $timestamps = false;
}
