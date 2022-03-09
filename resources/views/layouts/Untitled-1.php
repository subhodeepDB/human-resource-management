// Fonts
@import url('https://fonts.googleapis.com/css?family=Nunito');

// Variables
@import 'variables';

// Font Awsome
$fa-font-path:"../webfonts";

// Bootstrap
@import '~bootstrap/scss/bootstrap';

// AdminLTE
@import '~admin-lte/dist/css/adminlte.css';

@import "~@fortawesome/fontawesome-free/scss/fontawesome.scss";
@import "~@fortawesome/fontawesome-free/scss/solid.scss";
@import "~@fortawesome/fontawesome-free/scss/regular.scss";
@import "~@fortawesome/fontawesome-free/scss/brands.scss";

@import "../css/hrms_custom.css";





<?php

// namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Permission;

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
    // public function index()
    // {   
    //     // $user = \Auth::user();
    //     // $role = UserRoleMaster::where('slug','super-admin')->first();
    //     // dd($role);
    //     // $user->roles()->attach($role);
    //     return view('home');
    // }

    public function dashboard(){
        $user = \Auth::user();
        // assign role 
        // $role = Role::where('slug','super-admin')->first();
        // $user->roles()->attach($role);

        // dd($user->hasRole('editor'));
        // dd($role);
        // 
        // check permission 
        // $permission = Permission::first();
        // $permission = Permission::where('slug','add-employee')->first();
        // $user->permissions()->attach($permission);
        // dd($user->permissions);
        // dd($user->can('add-post'));
        // 
        // 
        // 
        // 
        // dd($user->employee);
        // return view('dashboard');
        return view('admin.dashboard');
    }
}
