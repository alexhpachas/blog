<div class="card">
    <div class="card-header">
        <x-buscador :type="$type='Categorias'" />
    </div>

    <div class="card-body">
        <x-tabla-permisos-index :permisos='$permisos' />
    </div>

    <div class="card-footer">
        {{$permisos->links()}}
    </div>
</div>