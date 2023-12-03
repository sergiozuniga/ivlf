<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comuna extends Model
{
    public $table = 'comunas';
    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'region_id'
    ];

    public function region()
    {
        return $this->belongsTo('App\Models\Region');
    }
}
