<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voto extends Model
{
    use HasFactory;
    // para que composer pueda guardar debemos agregar al modelo los campos que son fillables

    protected $fillable = [
        'voto1',
        'voto2',
        'voto3',
        'voto4',
    ];
}
