@extends('adminlte::page')

@section('title', 'KEYMI NET BLOG')

@section('content_header')
    {{-- Cargamos los Stylos de Tailwind --}}
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @can('admin.categorias.create')            
        <a class="btn btn-secondary float-right" href="{{route('admin.categorias.create')}}">Agregar Categoria</a>
    @endcan
  
    <h1>Lista de Categoria</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success text-center">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

    @livewire('admin.categorias-index')
    


@stop

@section('js')
    @include('admin.alerta-global.alertas')
@endsection
