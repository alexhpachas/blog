@extends('adminlte::page')

@section('title', 'KEYMI NET BLOG')

@section('content_header')
    <h1>Asignar un Rol</h1>
@stop

@section('content')

    <div class="card">
        <div class="card-body">
            <p class="h5">Nombre de usuario</p>
            <p class="form-control">{{$user->name}}</p>
           
            <h5>Roles :</h5>
            {!! Form::model($user, ['route'=>['admin.users.update',$user], 'method'=>'put']) !!}
            @foreach ($roles as $role)
                <div>            
                    <label>
                        {!! Form::checkbox('roles[]', $role->id, null,['class'=>'mr-2']) !!}
                        {{$role->name}}
                    </label>
                </div>
            @endforeach
            {!! Form::submit('Asignar Rol', ['class'=>'btn btn-primary']) !!}
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