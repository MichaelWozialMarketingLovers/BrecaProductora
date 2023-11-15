<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeriasubespectaculo extends Model
{
    protected $fillable = [
        'id',
        'subespectaculo',
        'foto',
    ];
}
