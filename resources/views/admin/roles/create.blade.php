@extends('adminlte::page')

@section('title', 'KEYMI NET BLOG')

@section('content_header')
    {{-- Cargamos los Stylos de Tailwind --}}
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <h1>Crear Nuevo Rol</h1>
@stop

@section('content')

<div class="card w-full">

    <div class="card-body">

        {!! Form::open(['route'=>'admin.roles.store','autocomplete'=>'off']) !!}

        {{-- Llamamos al contenido del formulario archivo parecido al componente--}}        
        @include('admin.roles.partials.formulario')

        {!! Form::submit('Crear Rol', ['class'=>'btn btn-primary mt-3']) !!}
        {!! Form::close() !!}
    </div>

</div>
    
@stop

