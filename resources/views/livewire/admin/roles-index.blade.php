<div class="card">
    <div class="card-header">
        <x-buscador :type="$type='Roles'" />
    </div>

    <div class="card-body">
        <x-tabla-role-index :roles='$roles' />
    </div>

    <div class="card-footer">
        {{$roles->links()}}
    </div>
</div>
