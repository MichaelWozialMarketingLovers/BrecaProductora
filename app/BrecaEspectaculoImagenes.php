<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BrecaEspectaculoImagenes extends Model
{
    protected $fillable = [
        'id',
        'espectaculo',
        'foto',
    ];
}
