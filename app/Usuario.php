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

    protected $fillable = ['nombre_usu', 'password', 'superadmin', 'cliente_id'];

    protected $hidden = ['password', 'remember_token'];

    protected $appends = ['rol'];

    public function cliente() {
        return $this->belongsTo('App\Cliente', 'cliente_id');
    }

    public function comites() {
        return $this->belongsToMany('App\Comite', 'usuario_administra_comite', 'usuario_id', 'comite_id');
    }

    public function getRolAttribute() {
        if ($this->superadmin) {
            return "Super Administrador";
        }
        if ( count($this->comites) > 0) {
            return "Administrador";
        }
        return "Cliente";
    }

    public $timestamps = false;
}
