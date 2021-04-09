@extends('adminlte::page')

@section('title', 'KEYMI NET BLOG')

@section('content_header')
    {{-- Cargamos los Stylos de Tailwind --}}
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @can('admin.tags.create')            
        <a class="btn btn-secondary float-right" href="{{route('admin.tags.create')}}">Crear Etiqueta</a>
    @endcan

    <h1>Lista de Etiquetas</h1>
@stop

@section('content')

@if(session('info'))

    <div class="alert alert-success">
        <strong>{{session('info')}}</strong> 
    </div>
    
@endif

@livewire('admin.tags-index')
        {{-- <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Etiqueta</th>
                    <th>Color de Etiqueta</th>
                    <th colspan="2"></th>
                </tr>
    
            </thead>
    
            <tbody>
                @foreach ($tags as $tag)
                <tr>
                    <td>{{$tag->id}}</td>
                    <td>{{$tag->nombre}}</td>
                    <td>
                        <button  class="h-6 w-6 form-control rounded-full shadow-lg " style="background-color: {{$tag->color}}">
                            
                        </button>                        
                    </td>
                    <td width=10px><a class="btn btn-primary btn-sm" href="{{route('admin.tags.show',$tag)}}">Editar</a></td>
                    <td width=10px>
                        <form action="{{route('admin.tags.destroy',$tag)}}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
                    
                @endforeach
            </tbody>
        </table> --}}
    {{-- <div class="card">
        <div class="card-header">
            <x-buscador />
        </div>
        <div class="card-body">
            <x-tabla-tag-index :tags='$tags' />
        </div>
    </div> --}}
@stop

@section('js')
    @include('admin.alerta-global.alertas')    
@endsection
