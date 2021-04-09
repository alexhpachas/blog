<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class TagController extends Controller
{

     /* __construc -> Para proteger las url segun rol de usuario*/
     public function __construct()
     {
         $this->middleware('can:admin.tags.index')->only('index');
         $this->middleware('can:admin.tags.create')->only('create','store');
         $this->middleware('can:admin.tags.show')->only('show','update');
         $this->middleware('can:admin.tags.destroy')->only('destroy');
     }   
 
    
    public function index()
    {        
        return view('admin.tags.index');
    }

    public function create()
    {        
        return view('admin.tags.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre'=>'required',
            'slug'=>'required|unique:Tags',
            'color'=>'required'
        ]);

        $tags = Tag::create($request->all());
        return redirect()->route('admin.tags.index')->with('info-create','La Etiqueta se creó Correctamente');    
    }

    public function show(Tag $tag)
    {       
        return view('admin.tags.show',compact('tag'));
    }

    public function edit(Tag $tag)
    {
        //
    }

    public function update(Request $request, Tag $tag)
    {
        $request->validate([
            'nombre'=>'required',
            'slug'=>"required|unique:tags,slug,$tag->id",
            'color'=>'required'
        ]);

        $tag->update($request->all());

        return redirect()->route('admin.tags.index')->with('info-update','La Etiqueta se Actualizo Correctamente');
    }

    public function destroy(Tag $tag)
    {
        $tag->delete();
        return redirect()->route('admin.tags.index')->with('info-delete','La Etiqueta se Eliminado Correctamente');
    }
}
