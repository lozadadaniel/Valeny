<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catalogo extends Model
{
	protected $guarded = [];
     protected $table = 'catalogos';

     //relacion de muchos a uno

    public function categorias(){
        return $this->belongsTo('App\Categoria','categoria_id');
    }
}
