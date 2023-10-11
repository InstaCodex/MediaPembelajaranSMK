<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;

class QuestionController extends Controller
{
    public function index()
    {
        try {
            $questions = Question::all();
            return response()->json(['questions' => $questions], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to retrieve questions. ' . $e->getMessage()], 500);
        }
    }

    public function show($id)
    {
        $question = Question::find($id);

        if (!$question) {
            return response()->json(['message' => 'Soal tidak ditemukan'], 404);
        }

        return response()->json(['question' => $question], 200);
    }

    public function create()
    {
        // Display a form to create a new question
        return view('questions.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required',
            'a' => 'required',
            'b' => 'required',
            'c' => 'required',
            'd' => 'required',
            'e' => 'required',
            'option_key' => 'required|in:a,b,c,d,e',
        ]);

        $question = Question::create([
            'content' => $request->content,
            'a' => $request->a,
            'b' => $request->b,
            'c' => $request->c,
            'd' => $request->d,
            'e' => $request->e,
            'option_key' => $request->option_key,
        ]);

        return response()->json(['message' => 'Soal berhasil dibuat', 'question' => $question], 201);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'content' => 'required',
            'a' => 'required',
            'b' => 'required',
            'c' => 'required',
            'd' => 'required',
            'e' => 'required',
            'option_key' => 'required|in:a,b,c,d,e',
        ]);

        $question = Question::find($id);

        if (!$question) {
            return response()->json(['message' => 'Soal tidak ditemukan'], 404);
        }

        $question->content = $request->content;
        $question->a = $request->a;
        $question->b = $request->b;
        $question->c = $request->c;
        $question->d = $request->d;
        $question->e = $request->e;
        $question->option_key = $request->option_key;
        $question->save();

        return response()->json(['message' => 'Soal berhasil diperbarui', 'question' => $question], 200);
    }

    public function destroy($id)
    {
        $question = Question::find($id);

        if (!$question) {
            return response()->json(['message' => 'Soal tidak ditemukan'], 404);
        }

        $question->delete();

        return response()->json(['message' => 'Soal berhasil dihapus'], 200);
    }
}
