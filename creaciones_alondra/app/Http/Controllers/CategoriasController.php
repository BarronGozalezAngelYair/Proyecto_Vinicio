<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorias; // Asegúrate de importar el modelo correcto

class CategoriasController extends Controller
{
    /**
     * Muestra el formulario para crear una nueva categoría.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $categorias = Categorias::all();
        return view('categorias.index', compact('categorias'));
    }
    public function create()
    {
        return view('categorias.add');
    }

    /**
     * Almacena una nueva categoría en la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $rules = [
            'nombre' => 'required',
            'descripcion' => 'required',
            
        ];
    
         $message = [
            'nombre.required' => 'El nombre es requerido',
            'descripcion.required' => 'La descripcion es requerido',
            
    ];
    
    $this->validate($request, $rules, $message);
    $input = $request->all();
    Categorias::create($input);
    return redirect('categorias')->with('message', 'Se ha creado correctamente el registro');
    }
    
}
