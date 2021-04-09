@extends('adminlte::page')

@section('title', 'KEYMI NET BLOG')

@section('content_header')
    <h1>Crear Nuevo Post</h1>    
@stop

@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::open(['route'=>'admin.posts.store','autocomplete'=>'off','files'=>true]) !!}  

        {{-- {!! Form::hidden('user_id', Auth::user()->id) !!} --}}
        
            @include('admin.posts.partials.formulario')

            {!! Form::submit('Crear Post', ['class'=>'btn btn-primary btn-sm']) !!}

        {!! Form::close() !!}
    </div>
</div>
@stop

@section('css')
    <style>
        .image-wrapper{
            position: relative;
            padding-bottom: 56.25%
        }

        .image-wrapper img{
            position: absolute;
            object-fit: cover;
            width: 100%;
            height: 100%
        }
    </style>
    
@endsection

@section('js')

    <script src="{{asset('/vendor/stringToSlug/jquery.stringToSlug.min.js')}}"></script>  
    <script src="https://cdn.ckeditor.com/ckeditor5/26.0.0/classic/ckeditor.js"></script>  
    <script>
        $(document).ready( function() {
            $("#nombre").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
         });
    </script>

<script>
    /* Text Enriquecido en los inpute de typo text*/
    ClassicEditor
        .create( document.querySelector( '#extract' ) )
        .catch( error => {
            console.error( error );
        } );

    ClassicEditor
        .create( document.querySelector( '#body' ) )
        .catch( error => {
            console.error( error );
        } );


        /* MOSTRAR IMAGEN AL CAMBIAR IMAGEN EN EL INPUT */
        document.getElementById("file").addEventListener('change', cambiarImagen);
        function cambiarImagen(event){
            var file = event.target.files[0];

            var reader = new FileReader();
            reader.onload = (event) => {
                document.getElementById("picture").setAttribute('src', event.target.result);
            };
            reader.readAsDataURL(file);
        }</script>

@endsection