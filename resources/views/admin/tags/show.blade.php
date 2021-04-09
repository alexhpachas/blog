@extends('adminlte::page')

@section('title', 'KEYMI NET BLOG')

@section('content_header')
    <h1>Editar Etiquetas</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">

        {!! Form::model($tag,['route'=>['admin.tags.update',$tag],'method'=>'PUT']) !!}
    
            @include('admin.tags.partials.formulario')

            <x-color :tag='$tag' /> 
            
            {!! Form::submit('Actualizar Etiqueta', ['class'=>'btn btn-primary']) !!}
    
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