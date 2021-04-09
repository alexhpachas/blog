@extends('adminlte::page')

@section('title', 'KEYMI NET BLOG')

@section('content_header')
    <h1>Detalle de Categoria</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::model($categoria,['route'=>['admin.categorias.update',$categoria],'method' =>'PUT']) !!}

        <div class="form-group">
            {!! Form::label('nombre', 'Nombre') !!}
            {!! Form::text('nombre', null, ['class'=>'form-control','placeholder'=>'Ingrese Nombre de la Categoria']) !!}

            @error('nombre')
                <p><span class="text text-danger">*{{$message}}</span></p>
            @enderror
        </div>

        <div class="form-group">
            {!! Form::label('slug', 'Slug') !!}
            {!! Form::text('slug', null ,['class'=>'form-control','readonly','placeholder'=>'Ingrese el slug de la categoria']) !!}

            @error('slug')
                <p><span class="text text-danger">*{{$message}}</span></p>
            @enderror
        </div>

        {!! Form::submit('Actualizar Categoria', ['class'=>'btn btn-primary']) !!}

        {!! Form::close() !!}

    </div>
</div>
    
    
@stop

@section('js')
    <script src="{{asset('/vendor/stringToSlug/jquery.stringToSlug.min.js')}}"></script>    
    <script>
        $(document).ready( function() {
            $("#nombre").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });
    </script>
@stop