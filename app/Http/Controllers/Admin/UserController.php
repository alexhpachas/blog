<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use GuzzleHttp\Middleware;
use Illuminate\Http\Request;

use Spatie\Permission\Models\Role;


class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.users.index')->only('index');
        $this->middleware('can:admin.users.show')->only('show','update');
        
    }
    public function index()
    {        
        return view('admin.users.index');
    }

    public function show(User $user)
    {
        
        $roles = Role::all();
        return view('admin.users.show',compact('user','roles'));
    }

    public function update(Request $request,User $user)
    {
        $user->roles()->sync($request->roles);
        return redirect()->route('admin.users.index')->with('info-role','Rol Asignado Con Exito');
    }
}
