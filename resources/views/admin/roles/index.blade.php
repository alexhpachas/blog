@extends('adminlte::page')

@section('title', 'KEYMI NET BLOG')

@section('content_header')
    {{-- Cargamos los Stylos de Tailwind --}}
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    {{-- Boton Tailwind CSS--}}
        <a class=" float-right bg-blue-500 font-semibold text-white hover:bg-blue-700 py-2 px-4 rounded inline-flex" href="{{route('admin.roles.create')}}">
            <span class="mr-2">Agregar</span>
            <svg class=" items-center" xmlns="http://www.w3.org/2000/svg" fill="none" width="24" height="24" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
            </svg>    
        </a>  
              
    <h1>Lista de Roles</h1>
@stop

@section('content')
    @livewire('admin.roles-index')
@stop

@section('js')

    @include('admin.alerta-global.alertas')
    
@stop