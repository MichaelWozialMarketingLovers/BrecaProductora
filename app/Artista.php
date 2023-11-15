<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artista extends Model
{
    protected $fillable = [
        'id', 
        'nombre', 
        'apellidos',
        'tipo_artista',
        'foto',
        'descripcion',
        'facebook',
        'instagram',
        'whatsapp',
    ];
}
