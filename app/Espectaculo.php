<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Espectaculo extends Model
{
    protected $fillable = [
        'id', 
        'fotoshow', 
        'tituloshow',
        'subtituloshow',
        'fotocentro',
        'titulocentro',
        'subtitulocentro',
        'fotolateral',
        'titulolateral',
        'subtitulolateral',
        'descripcionlateral',
        'fotoizq',
        'fotoder',
        'categoria',
    ];
}
