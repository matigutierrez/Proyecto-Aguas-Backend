<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comuna extends Model
{
    protected $table = 'comuna';

    protected $primaryKey = 'id';

    protected $fillable = ['des_comu', 'region_id'];

    public function region() {
      return $this->belongsTo('App\Region');
    }

    public function vivienda() {
      return $this->hasMany('App\Vivienda');
    } 

    public $timestamps = false;
}
