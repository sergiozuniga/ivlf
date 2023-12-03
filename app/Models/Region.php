<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    public $table = 'regiones';
    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'orden'
    ];

    public function comunas()
    {
        return $this->hasMany('App\Models\Comuna');
    }
}
