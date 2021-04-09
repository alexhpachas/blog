<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Models\Categoria;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Auth\Middleware\Authorize;
use Illuminate\Support\Facades\Storage;




class PostController extends Controller
{
     /* __construc -> Para proteger las url segun rol de usuario*/
     public function __construct()
     {
         $this->middleware('can:admin.posts.index')->only('index');
         $this->middleware('can:admin.posts.create')->only('create','store');
         $this->middleware('can:admin.posts.show')->only('show','update');
         $this->middleware('can:admin.posts.destroy')->only('destroy');
     }
 
    public function index()
    {
        return view('admin.posts.index');
    }

  
    public function create()
    {
          
        $categorias = Categoria::pluck('nombre','id');
        $tags = Tag::all();
        return view('admin.posts.create',compact('categorias','tags'));
    }

    public function store(PostRequest $request)
    {                
        $post = Post::create($request->all());

        if($request->file('file')){            
            $url = Storage::put('posts', $request->file('file'));
            $post->image()->create([
                'url'=>$url
            ]);
        }

        if($request->tags){
            $post->tags()->attach($request->tags);
        }

        return redirect()->route('admin.posts.index')->with('info-create','Creado Correctamente');
        
    }

    public function show(Post $post)
    {
        //Policy Encargado de verificar si el post que se quiere visualizar pertenete al usuario logeado
        //App\polices/PostPolicy
        $this->authorize('autorizado',$post);

        $categorias = Categoria::pluck('nombre','id');
        $tags = Tag::all();
        return view('admin.posts.show',compact('post','categorias','tags'));
    }

    public function update(PostRequest $request, Post $post)
    {        
        $this->authorize('autorizado',$post);
        
        $post->update($request->all());

        if($request->file('file')){
            $url = Storage::put('posts', $request->file('file'));

            if($post->image){
                Storage::delete($post->image->url);

                $post->image->update([
                    'url'=>$url
                ]);

            }else{
                $post->image()->create([
                    'url'=>$url
                ]);
            }
        }
        if($request->tags){
            $post->tags()->sync($request->tags);
        }
        return redirect()->route('admin.posts.index')->with('info-update','Actualizo Correctamente');
    }

    public function destroy(Post $post)
    {
        //Policy encargado de - Solo puede eliminarlo el usuario que aya creado el post
        $this->authorize('autorizado',$post);

        /* Eliminamos la Imagen a Travez de un Observer -> APP/Observer/PostObserver*/ 
        $post->delete();
        return redirect()->route('admin.posts.index')->with('info-delete','Registro Eliminado con Exito');
    }
}
