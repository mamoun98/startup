<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use\App\Department;
use\App\Bank;
use\App\city;
use\App\Employee;


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
        return view('home');
    }

    public function dashboard()
    {
        return view('dashboard')
         ->with('departments_count', Department::all()->count())
         ->with('cities_count', City::all()->count())
         ->with('banks_count', Bank::all()->count())
         ->with('employees_count', Employee::all()->count());

    }
}
