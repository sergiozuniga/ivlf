<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Peticion;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class PeticionController extends Controller
{
    public function index()
    {
        $peticiones = Peticion::paginate(5);
        return view('peticiones.index', ['peticiones' => $peticiones]);

    }
    
    public function create()
    {
        return view('peticiones.create');
    }

    public function store(Request $request)
    {
        $peticion            = new Peticion();
        $peticion->nombre    = $request->get('nombre');
        $peticion->email     = $request->get('email');
        $peticion->sujeto    = $request->get('sujeto');
        $peticion->peticion  = $request->get('peticion');
        $peticion->save();

        return redirect('/peticiones');
    }

    public function show($id)
    {
        $peticion = Peticion::find($id);
        return view('peticiones.answer', ['peticion' => $peticion]);
    }

    public function edit($id)
    {
        $peticion = Peticion::find($id);
        return view('peticiones.edit', ['peticion' => $peticion]);
    }

    public function update(Request $request, $id)
    {
        $peticion            = Peticion::find($id);
        $peticion->nombre    = $request->get('nombre');
        $peticion->email     = $request->get('email');
        $peticion->sujeto    = $request->get('sujeto');
        $peticion->peticion  = $request->get('peticion');
        //dd("res: ".$request->get('answer'));
        if ($request->get('answer') == "SI") {
            $peticion->respuesta = $request->get('respuesta');
        }
        $peticion->update();
        if ($request->get('answer') == "SI") {
            $this->email($peticion);
        }
        return redirect('/peticiones');
    }

    public function email(Peticion $peticion) 
    {
        $data = [
            'nombre'    => $peticion->nombre,
            'email'     => $peticion->email,
            'sujeto'    => $peticion->sujeto,
            'peticion'  => $peticion->peticion,                  
            'respuesta' => $peticion->respuesta                   
        ];

        Mail::to($peticion->email, $peticion->nombre)
            ->send(new SendMail($data));
    }
   
    public function destroy($id)
    {
        $peticion = Peticion::find($id);        
        $peticion->delete();

        return redirect('/peticiones');
    }

}
