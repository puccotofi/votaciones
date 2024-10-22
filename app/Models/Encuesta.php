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
        'p2',
        'p3',
        'p4',
        'p5',
        'p6',
        'p7',
        'p8',
        'p9',
        'p10',
        'p11',
        'p12',
        'p13',
        'p14',
        'p15',
        'p16',
        'p17',
        'p18',
        'p19',
        'p20',
        'p21',
        'p22',
        'p23',
    ];
}
