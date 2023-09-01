<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanController extends Controller
{
    public function index()
    {
        return view('halaman/home');
    }
    public function contributor()
    {
        return view('halaman/contributor');
    }
    // public function login()
    // {
    //     return view('halaman/login');
    // }
}
