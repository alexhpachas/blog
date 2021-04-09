@extends('adminlte::page')

@section('title', 'KEYMI NET BLOG')

@section('content_header')
    {{-- Cargamos los Stylos de Tailwind --}}
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <h1>Actualizar Rol</h1>
@stop

@section('content')
<div class="card w-full">

    <div class="card-body">
        {!! Form::model($role,['route'=>['admin.roles.update',$role],'method' =>'PUT']) !!}

            @include('admin.roles.partials.formulario')

        {!! Form::submit('Actualizar Rol', ['class'=>'btn btn-primary mt-3']) !!}
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