<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserPermissions;
use App\Models\User;
use App\Models\Module;
use DB;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $id = Auth::id();

        $User = User::findOrFail($id);

        $ress['modules'] = DB::table('Modules')->get();
        
        $ress['UserPermission'] = DB::table('profiles_permissions')
        ->join('profiles','profiles_permissions.profile_id','=','profiles.id')
        ->join('permissions','profiles_permissions.permission_id','=','permissions.id')
        ->join('sections','permissions.section_id','=','sections.id')
        ->join('modules','sections.module_id','=','modules.id')
        ->select('profiles.id as profile_id','sections.id as section_id','permissions.id as permission_id','modules.id as module_id','profiles.name as profile','permissions.name as permission','permissions.button','sections.name as section','sections.short_name as section_short_name','modules.name as module','modules.menu_name as module_menu_name','modules.icon') 
        ->where('profiles_permissions.profile_id',$User->profile_id)
        ->get();

        return view('home', $ress);
    }
}
