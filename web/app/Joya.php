<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Joya extends Model
{
   protected $table = 'joyas';

    protected $fillable = ['name', 'description', 'categoria_id','precio','image_path'];

    //relacion de muchos a uno

    public function categorias(){
        return $this->belongsTo('App\Categoria','categoria_id');
    }
}
