@extends('adminlte::page')

@section('title', 'KEYMI NET BLOG')

@section('content_header')
    {{-- Cargamos los Stylos de Tailwind --}}
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    {{--Cargamos los Iconos de FontAwesome--}}
    <link rel="stylesheet" href="{{asset('vendor/fontawesome-free/css/all.min.css')}}">
    
<a class="btn btn-secondary float-right" href="{{route('admin.posts.create')}}">Crear Nuevo Post</a>

    <h1>Lista de Post</h1>    
@stop

@section('content')
    
    {{-- Si viene variable de Session Mostramos una Alerta. --}}    
    @if(session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
            
        </div>                
    @endif            
        
    {{-- Mostrando una formulario desde un Componente de LiveWire --}}    
    @livewire('admin.posts-index')

@stop

@section('js')

    @include('admin.alerta-global.alertas')
    
@stop