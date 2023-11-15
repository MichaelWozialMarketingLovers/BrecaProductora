<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServicioDetalle extends Model
{
    protected $fillable = [
        'id',
        'servicio',
        'titulo',
        'descripcion',
        'foto',
        'titulo_tarjeta',
        'descripcion_tarjeta',
        'foto_tarjeta',
    ];
}
