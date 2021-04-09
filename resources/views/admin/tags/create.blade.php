@extends('adminlte::page')

@section('title', 'KEYMI NET BLOG')

@section('content_header')
    <h1>Crear Etiquetas</h1>
@stop

{{-- Creando Objeto tipo Array para pasarlo al componente Color --}}
@php
  $tag = (object) array(
        //a color le pasamos el color azul por defecto
      'color' => '#2196F3'
   );
@endphp

@section('content')
<div class="card">
    <div class="card-body">

        {!! Form::open(['route'=>'admin.tags.store']) !!}        

            @include('admin.tags.partials.formulario')

            {{-- Aqui Asigno el Objeto tipo Array al Componente --}}
            <x-color :tag='$tag'/> 
            

            {!! Form::submit('Crear Etiqueta', ['class'=>'btn btn-primary']) !!}
            
            {{-- <input id="colorSelected" type="text" placeholder="Pick a color" class="border border-transparent shadow px-4 py-2 leading-normal text-gray-700 bg-white rounded-md focus:outline-none focus:shadow-outline" readonly="" x-model="colorSelected"> --}}

        {!! Form::close() !!}

    </div>
</div>    
@stop


