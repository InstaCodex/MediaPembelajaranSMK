<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Illuminate\Http\File;

class BookController extends Controller
{
    public function index(Request $request)
    {
        $q = $request->input('q');
        $categori = $request->input('categori');

        $query = Book::query();

        if ($q) {
            $query->where('name', 'like', '%' . $q . '%');
        }

        if ($categori) {
            $query->where('categori', $categori);
        }

        $books = $query->paginate(10);

        return view('books.index', compact('books', 'q', 'categori'));
    }

    public function create(): View
    {
        return view('books.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $this->validate(
            $request,
            [
                'name' => 'required',
                'categori' => 'required',
                'dokumen' => 'mimes:doc,docx,pdf,xls,xlxs,pdf'
            ],
            [
                'name.required' => 'name harus disi',
                'categori.required' => 'categori harus disi',
                'dokumen.mimes' => 'dokumen harus pdf,doc'
            ]
        );

        $name = $request->post('name');
        $categori = $request->post('categori');
        $dokumen = $request->file('dokumen');
        $explode = explode('.', $dokumen->getClientOriginalName());
        $originalName = $explode[0];
        $dokumen->move(public_path('file'));


        Book::create($request->all());

        return redirect()->route('books.index')
            ->with('success', 'Books created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book): View
    {
        return view('books.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book): View
    {
        return view('books.edit', compact('book'));
    }


    public function update(Request $request, Book $book): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
        ]);

        $book->update($request->all());

        return redirect()->route('books.index')
            ->with('success', 'Book updated successfully');
    }


    public function destroy($id)
    {
        $book = Book::findOrFail($id);

        $book->delete();

        return redirect()->route('books.index')
            ->with('success', 'Buku berhasil dihapus');
    }
}
