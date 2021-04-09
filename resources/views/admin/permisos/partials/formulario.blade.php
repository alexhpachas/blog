<div class="rounded-xl overflow-hidden flex shadow hover:shadow-2xl bg-white h-full">  
    <div class="container-fluid mx-3 mt-3">                    
        <div class="form-group w-full">
            {!! Form::label('name', 'Ruta del Permiso',['class'=>'gap-2']) !!}
            <br>
            {!! Form::text('name', null, ['class'=>'form-control border rounded-lg  shadow-md','placeholder'=>'Ingrese Url del Permiso']) !!}                

            @error('name')
                <span class="text-danger">*{{$message}}</span>
            @enderror
        </div>

        <div class="form-group">
            {!! Form::label('description', 'Descripcion del Permiso') !!}
            <br>
            {!! Form::text('description', null, ['class'=>'form-control border rounded-lg  shadow-md','placeholder="Ingrese descripción del Permiso"']) !!}
            <br>

            @error('description')
                <span class="text-danger">*{{$message}}</span>
            @enderror
        </div>                                                                         
    </div>    
</div>



        


     

