<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

use Spatie\Permission\Models\Permission;
use Livewire\WithPagination;



class PermisosIndex extends Component
{
    use WithPagination;

    public $buscador="";

    public function updatingbuscador(){
        $this->resetPage();
    }

    public function render()
    {
        $permisos = Permission::where('name','like','%'.$this->buscador.'%')
                            ->orwhere('description','like','%'.$this->buscador.'%')
                            ->paginate(10);
        return view('livewire.admin.permisos-index',compact('permisos'));
    }
}
