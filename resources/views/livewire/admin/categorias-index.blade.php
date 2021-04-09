<div class="card">
    <div class="card-header">
        <x-buscador :type="$type='Categorias'" />
    </div>

    <div class="card-body">
        <x-tabla-categorias-index :categorias='$categorias' />
    </div>

    <div class="card-footer">
        {{$categorias->links()}}
    </div>
</div>


