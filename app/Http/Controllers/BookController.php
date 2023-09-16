<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BookController extends Controller
{
    public function index(Request $request)
    {
        $books = Book::with('category')->get();
        $q = $request->input('q');
        $categoryFilter = $request->input('category');

        $query = Book::query();

        if ($q) {
            $query->where('name', 'like', '%' . $q . '%');
        }

        if ($categoryFilter) {
            $query->where('category_id', $categoryFilter);
        }

        $books = $query->paginate(10);
        $categories = Category::all(); // Mengambil semua kategori
        $users = User::all();

        return view('books.index', compact('books', 'q', 'categories', 'categoryFilter' , 'users'));
    }

    public function create(): View
    {
        $categories = Category::all();
        $users = User::all();

        return view('books.create', compact('categories', 'users'));
    }

    public function store(Request $request): RedirectResponse
    {
        $this->validate(
            $request,
            [
                'name' => 'required',
                'dokumen' => 'required', 'mimes:doc,docx,pdf,xls',
                'category_id' => 'required',
                'user_id' => 'required',
            ],
            [
                'name.required' => 'Nama harus diisi',
                'dokumen.required' => 'Dokumen harus diisi',
                'dokumen.mimes' => 'Dokumen harus pdf, doc, xlsx',
                'category_id.required' => 'Kategori harus dipilih',
                'user_id.required' => 'User harus dipilih',
            ]
        );

        $name = $request->input('name');
        $category_id = $request->input('category_id');
        $user_id = $request->input('user_id');

        $dokumen = $request->file('dokumen');

        // Mendapatkan nama asli dokumen dengan ekstensi
        $originalName = $dokumen->getClientOriginalName();

        // Pindahkan dokumen ke direktori yang diinginkan
        $dokumen->move(public_path('file'), $originalName);

        // Simpan buku ke dalam database dengan category_id yang telah ditentukan
        Book::create([
            'name' => $name,
            'category_id' => $category_id,
            'dokumen' => $originalName,
            'user_id' => $user_id,
        ]);

        return redirect()->route('books.index')
            ->with('success', 'Buku berhasil ditambahkan.');
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
