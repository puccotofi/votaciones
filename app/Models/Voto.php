<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Encuesta extends Model
{
    use HasFactory;
    // para que composer pueda guardar debemos agregar al modelo los campos que son fillables

    protected $fillable = [
        'i1',
        'i2',
        'i3',
        'p1',
    ];
}
