<?php

namespace App\Http\Controllers;


use App\Models\Student;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    

    public function index(Request $request)
    {
        $q = $request->input('q');

        $query = User::query();
        $query->where('role', '=', 'siswa');

        if ($q) {
            $query->where('name', 'like', '%' . $q . '%');
        }

        $users = $query->paginate(10);

        return view('students.index', compact('users', 'q'));
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

    $student = new Student(); // Menggunakan $student sebagai nama variabel
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
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        $data['title'] = 'Ubah User';
        $data['row'] = $student;
        $data['levels'] = ['siswa' => 'Siswa'];
        return view('students.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
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
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect('students')->with('success', 'Hapus Data Berhasil');
    }
}
