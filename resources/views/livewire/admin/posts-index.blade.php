{{-- <div class="card">
    <div class="card-header">
        <input wire:model="buscador" class="form-control" name="buscador" type="text" placeholder="Ingrese el nombre de un post">
    </div>

    @if($posts->count() != 0 )
            
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre Post</th>
                        <th>Estado</th>
                        <th class="text-center" colspan="2">Acciones</th>
                    </tr>

                </thead>

                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{$post->id}}</td>
                            <td>{{$post->nombre}}</td>
                            <td>
                                @if ($post->estado == '1')
                                    <span class="text-danger font-weight-bold">Borrador</span>
                                @else
                                    <span class="text-success font-weight-bold">Publicado</span>
                                @endif
                            </td>
                            <td width=10px>
                                <a class="btn btn-primary btn-sm" href="{{route('admin.posts.show',$post)}}">Editar</a>
                            </td>
                            <td width=10px>
                                <form action="{{route('admin.posts.destroy',$post)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                                </form>
                            </td>

                        </tr>
                    @endforeach

                </tbody>
            </table>

        </div>

        <div class="card-footer">
            {{$posts->links()}}
        </div>
    @else
        <div class="card-body">
            <strong>No se encontro ningun registro...!</strong>
        </div>
    @endif
    
</div> --}}


<div class="card">
    
    <div class="card-header">  
        @can('busquedatotal')
        <select class="float-center"  wire:model="tipo" name="nombre" id="nombre">
            <option value="2">Mis Post</option>
            <option value="1">Todos los Post</option>
        </select>          
        @endcan
        
        <x-buscador :type="$type='Post'" /> 
        
    </div>

    <div class="card-body">
       
        <x-tabla-post-index :posts='$posts' />
    </div>

    <div class="card-footer">
        {{$posts->links()}}
    </div>
</div>

