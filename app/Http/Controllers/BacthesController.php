<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bacthes;

class BatchController extends Controller
{
    public function index()
    {
        $batches = Bacthes::all();
        return response()->json(['batches' => $batches], 200);
    }

    public function show($id)
    {
        $batch = Bacthes::find($id);

        if (!$batch) {
            return response()->json(['message' => 'Paket latihan soal tidak ditemukan'], 404);
        }

        return response()->json(['batch' => $batch], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:20',
            'user_id' => 'required|exists:users,id',
        ]);

        $batch = Bacthes::create([
            'name' => $request->name,
            'user_id' => $request->user_id,
        ]);

        return response()->json(['message' => 'Paket latihan soal berhasil dibuat', 'batch' => $batch], 201);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:20',
            'user_id' => 'required|exists:users,id',
        ]);

        $batch = Bacthes::find($id);

        if (!$batch) {
            return response()->json(['message' => 'Paket latihan soal tidak ditemukan'], 404);
        }

        $batch->name = $request->name;
        $batch->user_id = $request->user_id;
        $batch->save();

        return response()->json(['message' => 'Paket latihan soal berhasil diperbarui', 'batch' => $batch], 200);
    }

    public function destroy($id)
    {
        $batch = Bacthes::find($id);

        if (!$batch) {
            return response()->json(['message' => 'Paket latihan soal tidak ditemukan'], 404);
        }

        $batch->delete();

        return response()->json(['message' => 'Paket latihan soal berhasil dihapus'], 200);
    }
}
