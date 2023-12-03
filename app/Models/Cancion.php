<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cancion extends Model
{
    public $table = 'canciones';
    public $timestamps = false;

    protected $fillable = [
        'titulo',
        'letra',
        'mp3',
    ];

    public function quitar_tildes($cadena) {
        $no_permitidas = array("á","é","í","ó","ú","ñ", "Á","É","Í","Ó","Ú","Ñ", " ");
        $permitidas    = array("a","e","i","o","u","n", "A","E","I","O","U","N", "");
        $texto         = str_replace($no_permitidas, $permitidas ,$cadena);
        return $texto;
    }
}
