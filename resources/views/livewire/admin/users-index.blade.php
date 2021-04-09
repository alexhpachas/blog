<div class="card">

    <div class="card-header">                
          <x-buscador :type="$type='Usuario'" />
    </div>

    <div class="card-body">
        {{-- <input wire:model="buscador" class="form-control" type="text" id="buscador" name="buscador" placeholder="Buscar usuario" >      --}}
        {{-- <div class="w-full">
            <input wire:model="buscador"
              type="text"
              id="message"
              class="border rounded-2xl border-gray-600 w-full focus:outline-none text-sm h-10 flex items-center"
              placeholder="Buscar Usuario"
            />
          </div>   --}} 
        <x-tabla-user-index :usuarios='$usuarios' />     
    </div>

    <div class="card-footer">
        {{$usuarios->links()}}
    </div>

</div>

