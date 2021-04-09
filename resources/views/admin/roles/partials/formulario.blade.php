<div class="rounded-xl overflow-hidden flex shadow hover:shadow-2xl bg-white h-full">  
    <div class="container-fluid">                    
            <div class="form-group w-full">
                {!! Form::label('name', 'Nombre',['class'=>'gap-2']) !!}
                <br>
                {!! Form::text('name', null, ['class'=>' border rounded-lg  shadow-md','placeholder'=>'Ingrese Nombre del Rol']) !!}
                @error('name')
                    <span class="text-danger">*{{$message}}</span>
                @enderror
            </div>
                            
            <p class="h5">Lista de Permisos</p>
            <div class="container">
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                    @foreach ($permisos as $permiso)
                        <div>
                            <label class=" cursor-pointer">
                                
                                {!! Form::checkbox('permissions[]', $permiso->id,null,['class'=>'text-red-600'] ) !!}                                                                                  
                              
                            <span>{{($permiso->description)}}</span>
                        </label>
                    </div>                
                @endforeach
            </div>
        </div>                       
    </div>    
</div>



        


     

