<?php

namespace App\Http\Controllers;

use App\Models\Lessons;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class LessonsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $title = 'Data Lessons';
        $q = $request->input('q');
        $lessons = Lessons::where('name', 'like', '%' . $q . '%')->get();

        return view('lessons.index', compact('title', 'q', 'lessons'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Tambah Lessons';

        // Assuming you have a User model and you want to retrieve all users
        $users = User::all();

        return view('lessons.create', compact('title', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'minutes' => 'required|integer',
            'user_id' => 'required|exists:users,id',
        ]);

        Lessons::create([
            'name' => $request->name,
            'minutes' => $request->minutes,
            'user_id' => $request->user_id,
        ]);

        return redirect('lessons')->with('success', 'Tambah Data Berhasil');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lessons $lesson)
    {
        $title = 'Ubah Lesson';

        return view('lessons.edit', compact('title', 'lesson'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Lessons $lesson)
    {
        $request->validate([
            'name' => 'required',
            'minutes' => 'required|integer',
            'user_id' => 'required|exists:users,id',
        ]);

        $lesson->update([
            'name' => $request->name,
            'minutes' => $request->minutes,
            'user_id' => $request->user_id,
        ]);

        return redirect('lessons')->with('success', 'Ubah Data Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lessons $lesson)
    {
        $lesson->delete();

        return redirect()->route('lessons.index')->with('success', 'Hapus Data Berhasil');
    }
}
