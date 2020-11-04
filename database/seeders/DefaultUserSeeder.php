<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DefaultUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departaments')->insert([
            'name' => 'Administración',
            'description' => 'Administradores del sistema',
            'bActive' => 1,
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('profiles')->insert([
            'name' => 'Administrador',
            'description' => 'Administrador del sistema',
            'bActive' => 1,
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('modules')->insert([
            'name' => 'Administración',
            'menu_name' => 'Administración',
            'icon' => 'fas fa-user-shield',
            'identify' => 'usrAdmin',
            'created_at' => date('Y-m-d H:i:s'),
        ]);       

        DB::table('sections')->insert([
            'module_id' => 1,
            'name' => 'Users',
            'short_name' => 'Users',
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('sections')->insert([
            'module_id' => 1,
            'name' => 'Departaments',
            'short_name' => 'Departaments',
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('sections')->insert([
            'module_id' => 1,
            'name' => 'Modules',
            'short_name' => 'Modules',
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('sections')->insert([
            'module_id' => 1,
            'name' => 'Profiles',
            'short_name' => 'Profiles',
            'created_at' => date('Y-m-d H:i:s'),
        ]); 

        DB::table('permissions')->insert([
            'section_id' => 1,
            'name' => 'Users module',
            'route' => 'user_list',
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('permissions')->insert([
            'section_id' => 2,
            'name' => 'Departaments module',
            'route' => 'departament_list',
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('permissions')->insert([
            'section_id' => 3,
            'name' => 'Modules',
            'route' => 'module_list',
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('permissions')->insert([
            'section_id' => 4,
            'name' => 'Profiles Module',
            'route' => 'profiles_list',
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('profiles_permissions')->insert([
            'profile_id' => 1,
            'permission_id' => 1,
        ]);

        DB::table('profiles_permissions')->insert([
            'profile_id' => 1,
            'permission_id' => 2,
        ]);

        DB::table('profiles_permissions')->insert([
            'profile_id' => 1,
            'permission_id' => 3,
        ]);

        DB::table('profiles_permissions')->insert([
            'profile_id' => 1,
            'permission_id' => 4,
        ]);

        DB::table('users')->insert([
            'name' => 'Miguel Maldonado',
            'departament_id' => 1,
            'profile_id' => 1,
            'email' => 'miguelm2236@gmail.com',
            'password' => Hash::make('22364011'),
            'bActive' => 1,
            'created_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
