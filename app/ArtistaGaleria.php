<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArtistaGaleria extends Model
{
    protected $fillable = [
        'id','artista','foto',
    ];
}
