<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comite extends Model
{
    protected $table = 'comite';

    protected $primarykey = 'id';

    protected $fillable = ['nombre'];

    public $timestamps = false;

    public function administradores() {
    	return $this->belongsToMany('App\Usuario', 'usuario_administra_comite', 'comite_id', 'usuario_id');
    }

    public function usuariosDeClientes() {
        // Al llamar este metodo, usar: comite->usuarioDeClientes()
        // Los parentesis son importantes
        $usuarios = [];

        foreach ($this->medidores as $medidor) {
            foreach ($medidor->vivienda->getUsuarios() as $usuario) {
                array_push($usuarios, $usuario);
            }
        }

        return $usuarios;

    }

    public function comuna() {
    	return $this->belongsTo('App\Comuna', 'comuna_id');
    }

    public function medidores() {
    	return $this->hasMany('App\Medidor', 'comite_id');
    }

}
