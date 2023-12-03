<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Peticion extends Model
{
    public $table = 'peticiones';
    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'email',
        'sujeto',
        'peticion',
        'respuesta',
        'fecha',
    ];

}
