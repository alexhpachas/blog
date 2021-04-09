<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $guarded = [];

    /*===========================================================================
    Relacion de IMAGEABLE -> DEBE LLEVAR EL MISMO NOMBRE DEL CAMPO IMAGEABLE
    ===========================================================================*/
    public function imageable(){
        return $this->morphTo();
    }
}
