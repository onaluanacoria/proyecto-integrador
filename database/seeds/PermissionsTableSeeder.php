<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Users
        Permission::create([
          'name'         => 'Navegar usuarios',
          'slug'         => 'users.index',
          'description'  => 'Lista y navega todos los usuarios del sistema',
        ]);
        Permission::create([
          'name'         => 'Ver detalle de usuario',
          'slug'         => 'users.show',
          'description'  => 'Ver en detalle cada usuario del sistema',
        ]);
        Permission::create([
          'name'         => 'Edición de usuarios',
          'slug'         => 'users.edit',
          'description'  => 'Editar cualquier usuario del sistema',
        ]);
        Permission::create([
          'name'         => 'Eliminar usuarios',
          'slug'         => 'users.destroy',
          'description'  => 'Eliminar cualquier usuario del sistema',
        ]);



        //Roles
        Permission::create([
          'name'         => 'Navegar roles',
          'slug'         => 'roles.index',
          'description'  => 'Lista y navega todos los roles del sistema',
        ]);
        Permission::create([
          'name'         => 'Ver detalle de rol',
          'slug'         => 'roles.show',
          'description'  => 'Ver en detalle cada rol del sistema',
        ]);
        Permission::create([
          'name'         => 'Creación de roles',
          'slug'         => 'roles.create',
          'description'  => 'Crear roles',
        ]);
        Permission::create([
          'name'         => 'Edición de roles',
          'slug'         => 'roles.edit',
          'description'  => 'Editar cualquier dato de un rol del sistema',
        ]);
        Permission::create([
          'name'         => 'Eliminar rol',
          'slug'         => 'roles.destroy',
          'description'  => 'Eliminar cualquier rol del sistema',
        ]);


        //Ragalos
        Permission::create([
          'name'         => 'Navegar productos',
          'slug'         => 'gifts.index',
          'description'  => 'Lista y navega todos los productos del sistema',
        ]);
        Permission::create([
          'name'         => 'Ver detalle de producto',
          'slug'         => 'gifts.show',
          'description'  => 'Ver en detalle cada producto del sistema',
        ]);
        Permission::create([
          'name'         => 'Creación de productos',
          'slug'         => 'gifts.create',
          'description'  => 'Crear productos',
        ]);
        Permission::create([
          'name'         => 'Edición de gifts',
          'slug'         => 'gifts.edit',
          'description'  => 'Editar cualquier dato de un producto del sistema',
        ]);
        Permission::create([
          'name'         => 'Eliminar producto',
          'slug'         => 'gifts.destroy',
          'description'  => 'Eliminar cualquier producto del sistema',
        ]);


    }
}
