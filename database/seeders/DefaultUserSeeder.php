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
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('sections')->insert([
            'module_id' => 1,
            'name' => 'Users',
            'short_name' => 'Users',
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('permissions')->insert([
            'section_id' => 1,
            'name' => 'Users modules',
            'identify' => 'usrSec',
            'button' => '<a href="#" class="nav-link">Users</a>',
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('profiles_permissions')->insert([
            'profile_id' => 1,
            'permission_id' => 1,
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
