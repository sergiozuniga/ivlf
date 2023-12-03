<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Versiculo extends Model
{
    public $table = 'versiculos';

    protected $fillable = [
        'num_libro',
        'num_capitulo',
        'num_versiculo',
        'txt_versiculo',
    ];

}
