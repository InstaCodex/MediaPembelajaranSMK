<?php
  
namespace App\Http\Controllers;
  
use App\Models\Book;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
  
class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $books = Book::latest()->paginate(5);
        
        return view('books.index',compact('books'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('books.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            // 'detail' => 'required',
        ]);
        
        Book::create($request->all());
         
        return redirect()->route('books.index')
                        ->with('success','Books created successfully.');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(Book $book): View
    {
        return view('books.show',compact('book'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book): View
    {
        return view('books.edit',compact('book'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            // 'detail' => 'required',
        ]);
        
        $book->update($request->all());
        
        return redirect()->route('books.index')
                        ->with('success','Book updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book): RedirectResponse
    {
        $book->delete();
         
        return redirect()->route('books.index')
                        ->with('success','Books deleted successfully');
    }
}