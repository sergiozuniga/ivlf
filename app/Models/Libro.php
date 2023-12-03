<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    public $table = 'libros';

    protected $fillable = [
        'num_testamento',
        'tot_capitulos',
        'txt_libro',
    ];

}
