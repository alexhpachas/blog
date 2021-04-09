<?php

namespace App\Http\Livewire\Admin;

use App\Models\Categoria;
use Livewire\Component;
use Livewire\WithPagination;

class CategoriasIndex extends Component
{
    use WithPagination;
    public $buscador="";
   

    public function updatingbuscador(){
        $this->resetPage();
    }

    
    public function render()
    {
        $categorias = Categoria::where('nombre','like','%'.$this->buscador.'%')->latest('id')->paginate(10);
        return view('livewire.admin.categorias-index',compact('categorias'));
    }
}
