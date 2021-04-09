<?php

namespace App\Http\Livewire\Admin;


use App\Models\Post;
use App\Models\User;
use Livewire\Component;
//With pagination para poder utilizar la paginacion de livewire
use Livewire\WithPagination;


class PostsIndex extends Component
{
    //pagination para poder usar la pagnacion
    use WithPagination;
    
    //protected $paginationTheme = "bootstrap";

    public $buscador="";
    public $tipo;
    public $campo = 'id';
    public $direccion = 'desc';
  
    
    //Esto es para buscar estando en cualquier pagina updating + la variable definida como buscador
    public function updatingbuscador(){
        $this->resetPage();
    }

    public function render()
    {
        
        if($this->tipo != '1'){
            $posts = Post::where('user_id',auth()->user()->id)
                         ->where('nombre','like' ,'%'.$this->buscador.'%')
                         ->orderBy($this->campo,$this->direccion)
                         ->latest('id')->paginate(10);
            return view('livewire.admin.posts-index',compact('posts'));
        }     

        if($this->tipo != '2') {
            $posts = Post::where('nombre','like' ,'%'.$this->buscador.'%')
                         ->orderBy($this->campo,$this->direccion)
                         ->latest('id')->paginate(10);
            return view('livewire.admin.posts-index',compact('posts'));
        }  
                        
    }       
    
    public function order($campo){
        if ($this->campo == $campo) {
            if ($this->direccion == 'desc') {
                $this->direccion = 'asc';
            } else {
                $this->direccion = 'desc';
            }
                     
        } else {
            $this->campo = $campo;
            $this->direccion = 'desc';
        }
        
        
    }

    public function index(){
        return view('admin.posts.index');
    }
}
