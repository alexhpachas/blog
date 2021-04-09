<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use Illuminate\Http\Request;


class CategoriaController extends Controller
{
    /* __construc -> Para proteger las url segun rol de usuario*/
    public function __construct()
    {
        $this->middleware('can:admin.categorias.index')->only('index');
        $this->middleware('can:admin.categorias.create')->only('create','store');
        $this->middleware('can:admin.categorias.show')->only('show','update');
        $this->middleware('can:admin.categorias.destroy')->only('destroy');
    }

    public function index()
    {                
        return view('admin.categorias.index');
    }

 
    public function create()
    {
        return view('admin.categorias.create');
    }


    public function store(Request $request)
    {   
        $request->validate([
            'nombre'=>'required',
            'slug'=>'required|unique:categorias'
        ]);

        $categorias = Categoria::create($request->all());
        return redirect()->route('admin.categorias.index')->with('info-create','La Categoria se creó con éxito..!!');

    }

    public function show(Categoria $categoria)
    {        
        return view('admin.categorias.show',compact('categoria'));
    }

    public function edit(Categoria $categoria)
    {
        return view('admin.categorias.edit',compact('categoria'));
    }

    public function update(Request $request,Categoria $categoria)
    {
        $request->validate([
            'nombre'=>'required',
            'slug'=>"required|unique:categorias,slug,$categoria->id"
        ]);

        $categoria->update($request->all());
        return redirect()->route('admin.categorias.index')->with('info-update','La Categoria Se Actualizo con éxito');

    }

  
    public function destroy(Categoria $categoria)
    {
        $categoria->delete();
        return redirect()->route('admin.categorias.index')->with('info-delete','La Categoria Se Elimino con éxito');
        
    }
}
