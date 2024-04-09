<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios;
use Illuminate\Support\Facades\Hash; 


class UsuariosController extends Controller
{
    public function index()
    {
        $usuarios = Usuarios::all();
        return view('usuarios.index', compact('usuarios'));
    }

    public function create()
    {
        return view('usuarios.add');
    }
    public function store(Request $request)
    {
        //

        $rules = [
            'nombre' => 'required',
            'ap_materno' => 'required',
            'ap_paterno' => 'required',
            'correo' => 'required',
            'contraseña' => 'required',
        ];
    
        $message = [
            'nombre.required' => 'El nombre es requerido',
            'ap_materno.required' => 'El apellido materno es requerido',
            'ap_paterno.required' => 'El apellido paterno es requerido',
            'correo.required' => 'El correo es requerido',
            'contraseña.required' => 'La contraseña es requerida',
        ];
    
        $this->validate($request, $rules, $message);
        $input = $request->all();
        $input['contraseña'] = Hash::make($input['contraseña']); // Encripta la contraseña
        Usuarios::create($input);
        return redirect('usuarios')->with('message', 'Se ha creado correctamente el registro');
    }

    public function show(string $id)
    {
        $usuario = Usuarios::findOrFail($id);
        return view('usuarios.show')->with('usuario', $usuario);
    }
    public function edit(string $id)
    {
        //
        $usuario = Usuarios::findOrFail($id);
        return view('usuarios.edit', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $rules = [
            'nombre' => 'required',
            'ap_materno' => 'required',
            'ap_paterno' => 'required',
            'correo' => 'required',
            'contraseña' => 'required',

        ];

        $message = [
            'nombre.required' => 'El nombre es requerido',
            'ap_materno.required' => 'El apellido materno es requerido',
            'ap_paterno.required' => 'El apellido paterno es requerido',
            'correo.required' => 'El correo es requerido',
            'contraseña.required' => 'El correo es requerido',

        ];

        $this->validate($request, $rules, $message);
        $usuario = Usuarios::findOrFail($id);
        $input = $request->all();
        $input['contraseña'] = Hash::make($input['contraseña']); // Encripta la contraseña
        $usuario->update($input);
        return redirect('usuarios')->with('info', 'Se ha actualizado el registro correctamente');
    }   
    public function destroy(string $id)
    {
        //
        $usuarios = Usuarios::findOrFail($id);
        $usuarios->delete();
        return back()->with('danger','correctamente el registro');
    }

    
}

