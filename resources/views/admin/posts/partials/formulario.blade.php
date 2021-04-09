<div class="form-group">
    {!! Form::label('nombre', 'Nombre :') !!}
    {!! Form::text('nombre', null, ['class'=>'form-control','placeholder'=>'Ingrese nombre del post']) !!}

    @error('nombre')
        <small class="text-danger">*{{$message}}</small>
    @enderror
</div>   

<div class="form-group">
    {!! Form::label('slug', 'Slug :') !!}
    {!! Form::text('slug', null, ['class'=>'form-control','placeholder'=>'Slug del post','readonly']) !!}

    @error('slug')
        <small class="text-danger">*{{$message}}</small>
    @enderror
</div>       


<div class="form-group">         
    {!! Form::label('categoria', 'Categoria :') !!}      
    {!! Form::select('categoria_id', $categorias, null, ['class'=>'form-control']) !!}

    @error('categoria_id')
        <small class="text-danger">*{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    <p class="font-weight-bold">Etiquetas :</p>
    @foreach ($tags as $tag)
        <label class="mr-4">
            {!! Form::checkbox('tags[]', $tag->id, null) !!}
            {{$tag->nombre}}
        </label>
    @endforeach                            

    @error('tags')
    <br>
        <small class="text-danger">*{{$message}}</small>
    @enderror
                    
</div>

<div class="form-group">
    <p class="font-weight-bold">Estado :</p>
    <label class="mr-4">
        {!! Form::radio('estado', 1, true) !!} Borrador                    
    </label>
    <label >
        {!! Form::radio('estado', 2 ) !!}Publicado
    </label>

    @error('estado')
    <br>
        <small class="text-danger">*{{$message}}</small>
    @enderror
</div>

<div class="row mb-3">
    <div class="col">
        <div class="image-wrapper">
            @isset ($post->image)
                <img id="picture" src="{{Storage::url($post->image->url)}}" alt="">                        
            @else
                <img id="picture" src="https://cdn.pixabay.com/photo/2018/10/19/10/43/social-media-3758364_960_720.jpg" alt="">                        
            @endif
        </div>
        
    </div>

    <div class="col">
        <div class="form-group">
            {!! Form::label('file', 'Imagen del Post') !!}
            {!! Form::file('file', ['class'=>'form-control-file','accept'=>'image/*']) !!}

            @error('file')
                <span class="text-danger">*{{$message}}</span>
            @enderror
        </div>
        

    </div>

</div>

<div class="form-group">
    {!! Form::label('extract', 'Extracto :') !!}                   
    {!! Form::textarea('extract', null, ['class'=>'form-control','placeholder'=>'Ingrese Resumen del post']) !!}

    @error('extract')
        <small class="text-danger">*{{$message}}</small>
    @enderror
</div>  

<div class="form-group">

    {!! Form::label('body', 'Contenido del Post :') !!}
    {!! Form::textarea('body', null, ['class'=>'form-control']) !!}

    @error('body')
        <small class="text-danger">*{{$message}}</small>
    @enderror
</div>