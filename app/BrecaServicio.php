<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BrecaServicio extends Model
{
    protected $fillable = [
        'id',
        'titulo',
        'descripcion',
        'foto',
        'contacto',
    ];
}
