<?php

namespace App\Http\Livewire\Admin;

use App\Models\Tag;
use Livewire\Component;
use Livewire\WithPagination;

class TagsIndex extends Component
{
    public $buscador;
    use WithPagination;
    public function updatingbuscador(){
        $this->resetPage();
    }

    public function render()
    {
        $tags = Tag::where('nombre','like','%'.$this->buscador.'%')->latest('id')->paginate(10);
        return view('livewire.admin.tags-index',compact('tags'));
    }
}
