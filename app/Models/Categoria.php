<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $guarded=[];

    
    use HasFactory;

    public function getRouteKeyName()
    {
        return 'slug';
    }

    /*=====================================================================
    Relacion de 1 a Muchos ( una Categoria puedete tener muchos Post) Nº 2
    ======================================================================*/
    public function posts(){
        return $this->hasMany(Post::class);
    }
}
