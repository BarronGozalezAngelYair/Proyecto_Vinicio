<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;


class ProductosController extends Controller
{
    //
    public function index()
    {
        $productos = Productos::all();
        return view('productos.index', compact('productos'));
    }

    public function create()
    {
        return view('productos.add');
    }
    public function store(Request $request)
    {
    //

        $rules = [
            'nombre' => 'required',
            'descripcion' => 'required',
            'precio' => 'required',
            'stock' => 'required',
        ];
    
         $message = [
            'nombre.required' => 'El nombre es requerido',
            'descripcion.required' => 'La descripcion es requerido',
            'precio.required' => 'El precio es requerido',
            'stock.required' => 'El stock es requerido',
    ];
    
    $this->validate($request, $rules, $message);
    $input = $request->all();
    Productos::create($input);
    return redirect('productos')->with('message', 'Se ha creado correctamente el registro');
    }

    public function show(string $id)
    {
        $producto = Productos::findOrFail($id);
        return view('productos.show', compact('producto'));
    }



}
