<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){            
        $posts = Post::where('estado','2')->latest('id')->paginate(8);        
        return view('posts.index',compact('posts'));
    }

    public function show(Post $post){
        
        $this->authorize('publicado',$post);
        $similares = Post::where('categoria_id',$post->categoria_id)
                         ->where('estado','2')
                         ->where('id','!=',$post->id)
                         ->latest('id')//latest ordena de forma descendente
                         ->take(4)//Take solo trae 4 registros
                         ->get();//Trae la coleccion
                         
        return view('posts.show',compact('post','similares'));
    }

    public function categoria(Categoria $categoria){

        $posts = Post::where('categoria_id',$categoria->id)
                    ->where('estado','2')
                    ->latest('id')
                    ->paginate(6);

        return view('posts.categoria',compact('posts','categoria'));        

    }

    public function etiqueta(Tag $etiqueta){
        
        
        $posts =  $etiqueta->posts()->where('estado','2')->latest('id')->paginate(6);
        return view('posts.etiqueta',compact('posts','etiqueta'));
        
    }
    
}
