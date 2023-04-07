<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Employee;
use \App\Models\Organization;
use \App\Models\Assets;
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

        $employees = Employee::limit(5)->orderBy('created_at')->get();
        $organizations = Organization::limit(5)->orderBy('created_at')->get();
        $assets = Assets::limit(5)->orderBy('created_at')->get();
        return view('home', compact('employees', 'organizations', 'assets'));
    }
}
