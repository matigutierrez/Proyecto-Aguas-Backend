<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'cliente';

    protected $primaryKey = "id";

    protected $fillable = ['nombre', 'apellido_pater', 'apellido_mater', 'telefono', 'email', 'residencia'];

    public $timestamps = false;
}
