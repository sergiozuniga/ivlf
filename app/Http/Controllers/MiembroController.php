<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Miembro;
use App\Models\Comuna;

class MiembroController extends Controller
{
    public function index()
    {
        $miembros = Miembro::paginate(5);
        return view('miembros.index', ['miembros' => $miembros]);

    }

    public function comunas(Request $request){
        if ($request->ajax()) {
            
            $comunas = Comuna::where('region_id', $request->region_id)
                            ->orderBy('nombre')
                            ->get();
            return response()->json($comunas);
        } 
    }
    
    public function create()
    {
        return view('miembros.create');
    }

    public function store(Request $request)
    {
        $miembro             = new Miembro();
        $miembro->nombre     = $request->get('nombre');
        $miembro->email      = $request->get('email');
        $miembro->fono       = $request->get('fono');
        $miembro->region_id  = $request->get('region_id');
        $miembro->comuna_id  = $request->get('comuna_id');
        $miembro->direccion  = $request->get('direccion');
        $miembro->nacimiento = substr($request->get('nacimiento'),6,4) . "-" .
                               substr($request->get('nacimiento'),3,2) . "-" .
                               substr($request->get('nacimiento'),0,2);
        $miembro->invitado   = $request->get('invitado');
        $miembro->peticion   = $request->get('peticion');
        $miembro->save();

        return redirect('/miembros');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $miembro = Miembro::find($id);
        $nacimiento = substr($miembro->nacimiento,8,2) . "-" . 
                      substr($miembro->nacimiento,5,2) . "-" . 
                      substr($miembro->nacimiento,0,4);
        $miembro->nacimiento = $nacimiento;
        return view('miembros.edit', ['miembro' => $miembro]);
    }

    public function update(Request $request, $id)
    {
        $miembro             = Miembro::find($id);
        $miembro->nombre     = $request->get('nombre');
        $miembro->email      = $request->get('email');
        $miembro->fono       = $request->get('fono');
        $miembro->region_id  = $request->get('region_id');
        $miembro->comuna_id  = $request->get('comuna_id');
        $miembro->direccion  = $request->get('direccion');
        $miembro->nacimiento = substr($request->get('nacimiento'),6,4) . "-" . 
                               substr($request->get('nacimiento'),3,2) . "-" . 
                               substr($request->get('nacimiento'),0,2);
        $miembro->invitado   = $request->get('invitado');
        $miembro->peticion   = $request->get('peticion');
        $miembro->update();

        return redirect('/miembros');
    }

    public function destroy($id)
    {
        $miembro = Miembro::find($id);        
        $miembro->delete();

        return redirect('/miembros');
    }
}
