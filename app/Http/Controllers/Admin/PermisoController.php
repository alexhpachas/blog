<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;



class PermisoController extends Controller
{
    public function __construct()
    {

        $this->middleware('can:admin.permisos.index')->only('index');
        $this->middleware('can:admin.permisos.create')->only('create','store');
        $this->middleware('can:admin.permisos.show')->only('show','update');
        $this->middleware('can:admin.permisos.destroy')->only('destroy');                
        
    }
  
    public function index()
    {        
        return view('admin.permisos.index');
    }

    public function create()
    {
        return view('admin.permisos.create');
    }

    public function store(Request $request)
    {
        $request-> validate([
            'name'=>'required',
            'description'=>'required'
        ]);
        $permiso = Permission::create($request->all());

        return redirect()->route('admin.permisos.index')->with('info-create','Creado correctamente');
    }

    public function show(Permission $permiso)
    {
        return view('admin.permisos.show',compact('permiso'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request,Permission $permiso)
    {
        $request->validate([
            'name'=>'required',
            'description'=>'required'
        ]);

        $permiso->update($request->all());
        return redirect()->route('admin.permisos.index')->with('info-update','Actualizado con exito');
    }

    public function destroy(Permission $permiso)
    {
        $permiso->delete();
        return redirect()->route('admin.permisos.index')->with('info-delete','Eliminado Correctamente');
    }
}
