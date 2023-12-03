<?php

namespace App\Services;

use App\Models\Region;

class Regiones
{
    public function get()
    {
        $regiones = Region::orderby('orden')->get();
        foreach ($regiones as $region) {
            $regionesArray[$region->id] = $region->nombre;
        }
        return $regionesArray;
    }
}