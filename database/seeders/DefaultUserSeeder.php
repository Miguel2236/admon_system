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
            'bActive' => 1
        ]);

        DB::table('profiles')->insert([
            'name' => 'Administrador',
            'description' => 'Administrador del sistema',
            'bActive' => 1
        ]);

        DB::table('modules')->insert([
            'name' => 'Administración',
            'menu_name' => 'Administración',
            'icon' => 'shield',
            'bActive' => 1
        ]);

        DB::table('sections')->insert([
            'module_id' => 1s,
            'name' => 'Users',
            'short_name' => 'Users',
            'description' => 'Usuarios',
        ]);

        DB::table('permissions')->insert([
            'section_id' => 1,
            'name' => 'Users modules',
            'identify' => 'usrSec',
            'button' => '<a href="#" class="nav-link">Users</a>',
        ]);

        DB::table('profiles_permissions')->insert([
            'profile_id' => 1,
            'permission_id' => 1,
        ]);

        DB::table('departaments')->insert([
            'departament_id' => 1,
            'profile_id' => 1,
            'email' => 'miguelm2236@gmail.com',
            'password' => Hash::make('22364011'),
            'bActive' => 1
        ]);
    }
}
