<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MasterClasses extends Model
{
    protected $fillable = [
        'id',
        'imagen',
        'titulo',
        'descripcion',
        'contacto',
    ];
}
