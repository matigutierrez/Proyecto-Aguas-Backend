<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FirmaComite extends Model
{
    protected $table = 'firma_comite';

    protected $primarykey = 'id';

    protected $fillable = ['comite_id', 'fecha_edicion'];

    protected $hidden = ['firma'];

    const CREATED_AT = 'fecha_edicion';
    const UPDATED_AT = 'fecha_edicion';

    public function comite() {
        return $this->belongsTo('App\Comite', 'comite_id');
    }
}
