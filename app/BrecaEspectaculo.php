<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BrecaEspectaculo extends Model
{
    protected $fillable = [
        'id',
        'categoria',
        'imagen',
        'titulo',
        'descripcion',
        'contacto',
        'activo',
    ];
}
