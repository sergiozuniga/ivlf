<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios = User::paginate(5);
        return view('usuarios.index', ['usuarios' => $usuarios]);

    }
    
    public function create()
    {
        return view('usuarios.create');
    }

    public function store(Request $request)
    {
        $usuario           = new User();
        $usuario->name     = $request->get('name');
        $usuario->email    = $request->get('email');
        $usuario->password = Hash::make($request->get('password'));
        $usuario->save();

        return redirect('/usuarios');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $usuario = User::find($id);
        return view('usuarios.edit', ['usuario' => $usuario]);
    }

    public function update(Request $request, $id)
    {
        $usuario           = User::find($id);
        $usuario->name     = $request->get('name');
        $usuario->email    = $request->get('email');
        if ($request->get('password') != ''){
            //dd('pass=',Hash::make($request->get('password')));
            $usuario->password = Hash::make($request->get('password'));
        }
        $usuario->update();

        return redirect('/usuarios');
    }

    public function destroy($id)
    {
        $usuario = User::find($id);        
        $usuario->delete();

        return redirect('/usuarios');
    }
}
