@extends('adminlte::page')

@section('title', 'KEYMI NET BLOG')

@section('content_header')
<link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <h1>Lista de usuarios</h1>
@stop

@section('content')
    
    {{-- Componente de Livewire Que trae la tabla usuarios --}}
    @livewire('admin.users-index')
    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    @include('admin.alerta-global.alertas')
@endsection