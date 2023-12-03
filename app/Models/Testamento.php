<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testamento extends Model
{
    public $table = 'testamentos';

    protected $fillable = [
        'txt_testamento',
    ];

}
