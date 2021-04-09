@extends('adminlte::page')

@section('title', 'KEYMI NET BLOG')

@section('content_header')
    {{-- Cargamos los Stylos de Tailwind --}}
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    
    <h1>Crear Permiso</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">

    {!! Form::open(['route'=>'admin.permisos.store']) !!}

        @include('admin.permisos.partials.formulario')
    {!! Form::submit('Crear Permiso', ['class'=>'btn btn-primary mt-3']) !!}
    {!! Form::close() !!}
    </div>
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop