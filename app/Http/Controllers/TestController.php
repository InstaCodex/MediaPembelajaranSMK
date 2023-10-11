<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;

class TestController extends Controller
{
    public function index()
    {
        $tests = Test::all();
        return response()->json(['tests' => $tests], 200);
    }

    public function show($id)
    {
        $test = Test::find($id);

        if (!$test) {
            return response()->json(['message' => 'Jawaban siswa tidak ditemukan'], 404);
        }

        return response()->json(['test' => $test], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'question_id' => 'required|exists:questions,id',
            'answer' => 'required|string|in:a,b,c,d,e',
            'is_correct' => 'required|boolean',
        ]);

        $test = Test::create([
            'user_id' => $request->user_id,
            'question_id' => $request->question_id,
            'answer' => $request->answer,
            'is_correct' => $request->is_correct,
        ]);

        return response()->json(['message' => 'Jawaban siswa berhasil disimpan', 'test' => $test], 201);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'question_id' => 'required|exists:questions,id',
            'answer' => 'required|string|in:a,b,c,d,e',
            'is_correct' => 'required|boolean',
        ]);

        $test = Test::find($id);

        if (!$test) {
            return response()->json(['message' => 'Jawaban siswa tidak ditemukan'], 404);
        }

        $test->user_id = $request->user_id;
        $test->question_id = $request->question_id;
        $test->answer = $request->answer;
        $test->is_correct = $request->is_correct;
        $test->save();

        return response()->json(['message' => 'Jawaban siswa berhasil diperbarui', 'test' => $test], 200);
    }

    public function destroy($id)
    {
        $test = Test::find($id);

        if (!$test) {
            return response()->json(['message' => 'Jawaban siswa tidak ditemukan'], 404);
        }

        $test->delete();

        return response()->json(['message' => 'Jawaban siswa berhasil dihapus'], 200);
    }
}
