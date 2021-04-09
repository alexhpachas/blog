<div class="card">
    <div class="card-header">
        <x-buscador :type="$type='Etiquetas'" />
    </div>

    <div class="card-body">
        <x-tabla-tag-index :tags='$tags' />
    </div>

    <div class="card-footer">
        {{$tags->links()}}
    </div>
</div>