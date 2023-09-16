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
<<<<<<< HEAD
    // public function index()
    // {
    //     return view('admin/index');
    // }
    public function index()
    {
        return view('layouts/backend');
=======
    public function index()
    {
        return view('home');
>>>>>>> 18dbade65bd37075951b181fc849fcc75f9424f9
    }
}
