<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

use Spatie\Permission\Models\Role;



class RolesIndex extends Component
{

    public $buscador="";

    public function render()
    {
        $roles = Role::where('name','like','%'.$this->buscador.'%')->paginate(10);
        return view('livewire.admin.roles-index',compact('roles'));
    }
}
