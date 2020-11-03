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
        // llamar a la funcion del menu
        $ress = User::menu();

        return view('home', compact('ress'));
    }
}
