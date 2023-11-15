<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subespectaculo extends Model
{
    protected $fillable = [
        'id',
        'espectaculo',
        'titulo',
        'categoriapadre',
        'descripcion',
        'foto',
        'contactodetalle',
    ];
}
