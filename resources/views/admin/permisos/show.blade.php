@extends('adminlte::page')

@section('title', 'KEYMI NET BLOG')

@section('content_header')
    {{-- Cargamos los Stylos de Tailwind --}}
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <h1>Actualizar Permiso</h1>
@stop

@section('content')
    

    {!! Form::model($permiso, ['route'=>['admin.permisos.update',$permiso],'method'=>'put']) !!}
        @include('admin.permisos.partials.formulario')
    {!! Form::submit('Actualizar Permiso', ['class'=>'btn btn-primary mt-3']) !!}
    {!! Form::close() !!}
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop