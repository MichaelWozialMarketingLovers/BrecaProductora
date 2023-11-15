<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarruselSubespectaculo extends Model
{
    protected $fillable = [
        'id',
        'subespectaculo',
        'foto',
    ];
}
