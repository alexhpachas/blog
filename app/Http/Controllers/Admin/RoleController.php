<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;



class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.roles.index')->only('index');
        $this->middleware('can:admin.roles.show')->only('show','update');
        $this->middleware('can:admin.roles.create')->only('create','store');
        $this->middleware('can:admin.roles.destroy')->only('destroy');
        
    }
    
    public function index()
    {
        return view('admin.roles.index');
    }

  
    public function create()
    {
        $permisos = Permission::latest('id')->paginate();
        
        return view('admin.roles.create',compact('permisos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required'
        ]);

        $rol = Role::create($request->all());

        $rol->permissions()->sync($request->permissions);

        return redirect()->route('admin.roles.index')->with('info-create','Rol se Creo con exito');
    
    }

    public function show(Role $role)
    {
        $permisos = Permission::latest('id')->get();
        return view('admin.roles.show',compact('role','permisos'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request,Role $role)
    {
        $request->validate([
            'name'=>'required'
        ]);

        $role->update($request->all());

        $role->permissions()->sync($request->permissions);

        return redirect()->route('admin.roles.index')->with('info-update','Rol se Creo con exito');
    }

    public function destroy(Role $role)
    {
        $role->delete();
        return redirect()->route('admin.roles.index')->with('info-delete','Eliminado correctamente');
    }
}
