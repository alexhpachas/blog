<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name'=>'Administrador']);
        $role2 = Role::create(['name'=>'Editor']);
        $role3 = Role::create(['name'=>'SuperUsuario']);

        Permission::create(['name'=>'admin.home','description'=>'Ver Dashboard'])->syncRoles([$role1,$role2,$role3]);


        Permission::create(['name'=>'admin.users.index','description'=>'Ver Lista de Usuarios'])->syncRoles([$role1,$role3]);
        Permission::create(['name'=>'admin.users.show','description'=>'Asignar Rol'])->syncRoles([$role1,$role3]);    
        
        Permission::create(['name'=>'admin.roles.index','description'=>'Ver Lista Rol'])->syncRoles([$role3]);    
        Permission::create(['name'=>'admin.roles.show','description'=>'Actualizar Rol'])->syncRoles([$role3]);    
        Permission::create(['name'=>'admin.roles.create','description'=>'Crear Rol'])->syncRoles([$role3]);    
        Permission::create(['name'=>'admin.roles.destroy','description'=>'Eliminar Rol'])->syncRoles([$role3]);    

        Permission::create(['name'=>'admin.permisos.index','description'=>'Ver Lista Permisos'])->syncRoles([$role3]);    
        Permission::create(['name'=>'admin.permisos.show','description'=>'Actualizar Permisos'])->syncRoles([$role3]);    
        Permission::create(['name'=>'admin.permisos.create','description'=>'Crear Permisos'])->syncRoles([$role3]);    
        Permission::create(['name'=>'admin.permisos.destroy','description'=>'Eliminar Permisos'])->syncRoles([$role3]);


        Permission::create(['name'=>'admin.categorias.index','description'=>'Ver Lista de Categorias'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name'=>'admin.categorias.show','description'=>'Actualizar Categorias'])->syncRoles([$role1,$role3]);
        Permission::create(['name'=>'admin.categorias.create','description'=>'Crear Categorias'])->syncRoles([$role1,$role3]);
        Permission::create(['name'=>'admin.categorias.destroy','description'=>'Eliminar Categorias'])->syncRoles([$role1,$role3]);


        Permission::create(['name'=>'admin.tags.index','description'=>'Ver Lista de Etiquetas'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name'=>'admin.tags.show','description'=>'Actualizar Etiqueta'])->syncRoles([$role1,$role3]);
        Permission::create(['name'=>'admin.tags.create','description'=>'Crear Etiqueta'])->syncRoles([$role1,$role3]);
        Permission::create(['name'=>'admin.tags.destroy','description'=>'Eliminar Etiqueta'])->syncRoles([$role1,$role3]);

        
        Permission::create(['name'=>'admin.posts.index','description'=>'Ver Lista de Post'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name'=>'admin.posts.show','description'=>'Actualizar Post'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name'=>'admin.posts.create','description'=>'Crear Post'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name'=>'admin.posts.destroy','description'=>'Eliminar Post'])->syncRoles([$role1,$role2,$role3]);
    }
}
