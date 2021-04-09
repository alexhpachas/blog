<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Post extends Model
{
    use HasFactory;
    protected $guarded = ['id','created_at','updated_at'];


    /*===========================================================================
    Relacion de 1 a Muchos INVERSA  POST - USER  ->  Nº 1   (USER - POST)
    ===========================================================================*/
    public function user(){
        return $this->belongsTo(User::class);
    }


    /*===========================================================================
    Relacion de 1 a Muchos INVERSA  POST - CATEGORIA  ->  Nº 2   (CATEGORIA - POST)
    ===========================================================================*/
    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }

    /*===========================================================================
    Relacion de Muchos a Muchos  POST - TAGS  -> Nº 3 (POST - TAGS)
    ===========================================================================*/

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    
    /*===========================================================================
    Relacion 1 a 1 POLIMORFICA POST - IMAGE Nº 4 
    ===========================================================================*/
    public function image(){
        return $this->morphOne(Image::class,'imageable');
    }
}
