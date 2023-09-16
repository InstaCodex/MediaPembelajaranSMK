<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $data['title'] = 'Data User';
        $data['q'] = $request->q;
        $data['rows'] = User::where('name', 'like', '%' . $request->q . '%')->get();
        return view('users.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $data['title'] = 'Tambah User';
        $data['role'] = ['admin' => 'Admin','guru' => 'Guru' , 'siswa' => 'Siswa'];
        return view('users.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
            'role' => 'required',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = $request->role;
        $user->save();
        return redirect('users')->with('success', 'Tambah Data Berhasil');
    }


    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $data['title'] = 'Ubah User';
        $data['row'] = $user;
        $data['role'] = ['admin' => 'Admin','guru' => 'Guru' , 'siswa' => 'Siswa'];
        return view('users.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'role' => 'required',
        ]);

        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->password)
            $user->password = Hash::make($request->password);
        $user->role = $request->role;
        $user->save();
        return redirect('users')->with('success', 'Ubah Data Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect('users')->with('success', 'Hapus Data Berhasil');
    }
}
