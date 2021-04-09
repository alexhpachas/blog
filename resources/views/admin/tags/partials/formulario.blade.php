<div class="form-group">
    {!! Form::label('nombre', 'Nombre') !!}
    {!! Form::text('nombre', null , ['class'=>'form-control','placeholder'=>'Ingrese nombre de la Etiqueta']) !!}

    @error('nombre')
        <p><span class="text-danger">*{{$message}}</span></p>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('slug', 'slug') !!}
    {!! Form::text('slug', null , ['class'=>'form-control','readonly']) !!}

    @error('slug')
        <p><span class="text-danger">*{{$message}}</span></p>
    @enderror
</div>

<div class="form-group">
    {{-- {!! Form::label('color', 'Seleccione Color') !!}   
    
    {!! Form::text('color', null, ['class'=>'form-control form-control-sm','autocomplete'=>'off','width'=>'10%' ]) !!}
 --}}    

    {{-- Este Componente Trae la Paleta Echa con Tailwing CSS Descomentar Abajo--}}
    {{-- <x-color /> --}}
    
    
    {{-- {!! Form::select('color', $color, null, ['class'=>'form-control']) !!} --}}

    @error('color')
        <p><span class="text-danger">*{{$message}}</span></p>
    @enderror
    
</div>

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/3.2.0/css/bootstrap-colorpicker.css">


@stop

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/3.2.0/js/bootstrap-colorpicker.min.js"></script>


<script src="{{asset('/vendor/stringToSlug/jquery.stringToSlug.min.js')}}"></script>  

<script type="text/javascript">
    $('#color').css('background-color', $(color).val());
    $('#color').css('color', $(color).val());
    $('#color').colorpicker();
    $('#color').on('colorpickerChange', function(event) {            
    $('#color').css('background-color', event.color.toString());
    $('#color').css('color', event.color.toString());    
    });
</script>

    <script>
        $(document).ready( function() {
            $("#nombre").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });
    </script>

@stop



