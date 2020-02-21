<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cotizacion extends Model
{
    protected $table = 'cotizaciones';

     //relacion de muchos a uno

    public function users(){
        return $this->belongsTo('App\User','user_id');
    }


}
