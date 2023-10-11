<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        // If you want to return a specific view like 'admin/index'
        // return view('admin.index');
        
        // If you want to return 'layouts/backend' view
        return view('layouts.backend');
    }

    // public function siswa()
    // {
    //     // If you want to return a specific view like 'admin/index'
    //     // return view('admin.index');
        
    //     // If you want to return 'layouts/backend' view
    //     return view('students.index');
    // }
}
