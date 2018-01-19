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

    protected $fillable = ['nombre_usu', 'password', 'superadmin', 'cliente_id', 'comite_id'];

    protected $hidden = ['password', 'remember_token'];

    protected $appends = ['rol'];

    public function cliente() {
        return $this->belongsTo('App\Cliente', 'cliente_id');
    }

    public function comite() {
        return $this->belongsTo('App\Comite', 'comite_id');
    }

    public function getRolAttribute() {
        if ( $this->superadmin ) {
            return "Super Administrador";
        } elseif ( isset($this->comite) ) {
            return "Administrador";
        }
        return "Cliente";
    }

    public $timestamps = false;
}
