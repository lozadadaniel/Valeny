<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categorias';

     //relacion one to many

    public function catalogos(){
    	return $this->hasMany('App\Catalogo');
    }

     //relacion one to many

    public function joyas(){
    	return $this->hasMany('App\Joya');
    }
}
