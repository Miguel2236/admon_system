<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Module;
use Illuminate\Support\Facades\Auth;
use DB;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'departament_id',
        'profile_id',
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    static function menu()
    {
        /**
         * cargar los datos de la sesion y cargar el menu
         */
        $id = Auth::id();

        $User = User::findOrFail($id);

        $ress['id'] = $id;

        $ress['User'] = $User;

        $ress['modules'] = DB::table('Modules')->get();
        
        $ress['UserPermission'] = DB::table('profiles_permissions')
        ->join('profiles','profiles_permissions.profile_id','=','profiles.id')
        ->join('permissions','profiles_permissions.permission_id','=','permissions.id')
        ->join('sections','permissions.section_id','=','sections.id')
        ->join('modules','sections.module_id','=','modules.id')
        ->select('profiles.id as profile_id','sections.id as section_id','permissions.id as permission_id','modules.id as module_id','profiles.name as profile','permissions.name as permission','permissions.route','sections.name as section','sections.short_name as section_short_name','modules.name as module','modules.menu_name as module_menu_name','modules.icon') 
        ->where('profiles_permissions.profile_id',$User->profile_id)
        ->get();

        return $ress;
    }
}
