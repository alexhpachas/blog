<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
     protected $guarded = [];

     public function  getRouteKeyName()
     {
        return 'slug';        
     }

    /*===========================================================================
    Relacion de Muchos a Muchos  TAS - POST  -> Nº 3 (POST - TAGS)
    ===========================================================================*/   
    public function posts(){
        return $this->belongsToMany(Post::class);
    } 
}
