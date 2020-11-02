<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserPermissions;
use App\Models\User;
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
        // $id = Auth::id();

        // $User = User::findOrFail($id);
        
        // $UserPermission = DB::table('profiles_permissions')
        // ->join('profiles','profiles_permissions.profile_id','=','profiles.id')
        // ->join('permissions','profiles_permissions.permission_id','=','permissions.id')
        // ->join('sections','permissions.section_id','=','sections.id')
        // ->join('modules','sections.module_id','=','modules.id')
        // ->select('profiles.*','permissions.*','sections.*','modules.*') 
        // ->where('profiles_permissions.profile_id',$User->profile_id)
        // ->get();

        // dd($UserPermission);

        return view('home');
    }
}
