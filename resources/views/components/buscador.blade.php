@props(['type'])

<div class="w-full">
    <input wire:model="buscador"
      type="text"
      id="message"
      class="border rounded-2xl border-gray-600 w-full focus:outline-none text-sm h-10 flex items-center shadow-md "
      placeholder= "Buscar {{$type}}"
    />
</div> 

