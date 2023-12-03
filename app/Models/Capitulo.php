<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Capitulo extends Model
{
    public $table = 'capitulos';

    protected $fillable = [
        'num_libro',
        'num_capitulo',
        'tot_versiculos',
        'txt_capitulo',
    ];

}
