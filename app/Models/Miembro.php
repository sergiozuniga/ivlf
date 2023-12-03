<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Miembro extends Model
{
    public $table = 'miembros';
    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'direccion',
        'email',
        'fono',
        'invitado',
        'peticion',
        'fecha',
        'comuna_id',
        'region_id'
    ];

    public function comuna()
    {
        return $this->belongsTo('App\Models\Comuna');
    }

    public function region()
    {
        return $this->belongsTo('App\Models\Region');
    }
}
