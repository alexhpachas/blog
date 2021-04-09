<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

use Livewire\WithPagination;

class UsersIndex extends Component
{
    use WithPagination;
    //protected $paginationTheme="bootstrap";

    public $buscador="";

    public function updatingbuscador(){
        $this->resetPage();
    }

    public function render()
    {
        $usuarios = User::where('name','like','%'.$this->buscador.'%')
                        ->orwhere('email','like','%'.$this->buscador.'%')
                        ->latest('id')->paginate(10);
        return view('livewire.admin.users-index',compact('usuarios'));
    }
}
