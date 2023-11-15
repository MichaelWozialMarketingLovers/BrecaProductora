<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MasterClass extends Model
{
    protected $fillable = [
        'id',
        'imagen1',
        'titulo1',
        'descripcion1',
        'contacto',
        'imagen2',
        'titulo2',
        'descripcion2',
    ];
}
