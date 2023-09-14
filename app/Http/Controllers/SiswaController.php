<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $data['title'] = 'Data Siswa';
        $data['q'] = $request->q;
        $data['rows'] = Siswa::where('name', 'like', '%' . $request->q . '%')->get();
        return view('students.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
{
    $data['title'] = 'Tambah Siswa'; // Mengubah judul sesuai dengan konteks
    $data['levels'] = ['siswa' => 'Siswa'];
    return view('students.create', $data);
}

/**
 * Store a newly created resource in storage.
 */
public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|unique:students',
        'password' => 'required',
        'level' => 'required',
    ]);

    $student = new Siswa(); // Menggunakan $student sebagai nama variabel
    $student->name = $request->name;
    $student->email = $request->email;
    $student->password = Hash::make($request->password);
    $student->level = $request->level;
    $student->save();
    return redirect('students')->with('success', 'Tambah Data Berhasil');
}

    /**
     * Display the specified resource.
     */
    public function show(Siswa $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Siswa $student)
    {
        $data['title'] = 'Ubah User';
        $data['row'] = $student;
        $data['levels'] = ['siswa' => 'Siswa'];
        return view('students.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Siswa $student)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'level' => 'required',
        ]);

        $student->name = $request->name;
        $student->email = $request->email;
        if ($request->password)
            $student->password = Hash::make($request->password);
        $student->level = $request->level;
        $student->save();
        return redirect('students')->with('success', 'Ubah Data Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Siswa $student)
    {
        $student->delete();
        return redirect('students')->with('success', 'Hapus Data Berhasil');
    }
}
