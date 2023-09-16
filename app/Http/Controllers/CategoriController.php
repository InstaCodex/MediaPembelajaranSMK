<?php
<<<<<<< HEAD

namespace App\Http\Controllers;

=======
  
namespace App\Http\Controllers;
  
>>>>>>> 18dbade65bd37075951b181fc849fcc75f9424f9
use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
<<<<<<< HEAD

=======
  
>>>>>>> 18dbade65bd37075951b181fc849fcc75f9424f9
class CategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
<<<<<<< HEAD

    public function __construct()
    {
        $category = new Category();
    }

    public function index(Request $request): View
    {
        $q = $request->input('q');
        $categories = Category::latest()->paginate(10);

        if ($q) {
            $categories = Category::where('name', 'like', '%' . $q . '%')->paginate(10);
        }

        return view('categories.index', compact('categories', 'q'));
    }

=======
    public function index(): View
    {
        $categories = category::latest()->paginate(5);
        
        return view('categories.index',compact('categories'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
>>>>>>> 18dbade65bd37075951b181fc849fcc75f9424f9
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('categories.create');
    }
<<<<<<< HEAD

=======
  
>>>>>>> 18dbade65bd37075951b181fc849fcc75f9424f9
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
<<<<<<< HEAD
        ]);

        Category::create($request->all());

        return redirect()->route('categories.index')
            ->with('success', 'Categories created successfully.');
    }

=======
            // 'detail' => 'required',
        ]);
        
        Category::create($request->all());
         
        return redirect()->route('categories.index')
                        ->with('success','Categories created successfully.');
    }
  
>>>>>>> 18dbade65bd37075951b181fc849fcc75f9424f9
    /**
     * Display the specified resource.
     */
    public function show(Category $category): View
    {
<<<<<<< HEAD
        $category = Category::find($category->id);
        $books = $category->books;
        return view('categories.show', compact('category'));
    }

=======
        return view('categories.show',compact('category'));
    }
  
>>>>>>> 18dbade65bd37075951b181fc849fcc75f9424f9
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category): View
    {
<<<<<<< HEAD
        return view('categories.edit', compact('category'));
    }

=======
        return view('categories.edit',compact('category'));
    }
  
>>>>>>> 18dbade65bd37075951b181fc849fcc75f9424f9
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
<<<<<<< HEAD
        ]);

        $category->update($request->all());

        return redirect()->route('categories.index')
            ->with('success', 'Category updated successfully');
    }

=======
            // 'detail' => 'required',
        ]);
        
        $category->update($request->all());
        
        return redirect()->route('categories.index')
                        ->with('success','Category updated successfully');
    }
  
>>>>>>> 18dbade65bd37075951b181fc849fcc75f9424f9
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category): RedirectResponse
    {
        $category->delete();
<<<<<<< HEAD

        return redirect()->route('categories.index')
            ->with('success', 'Category deleted successfully');
    }
}
=======
         
        return redirect()->route('categories.index')
                        ->with('success','Categories deleted successfully');
    }
}
>>>>>>> 18dbade65bd37075951b181fc849fcc75f9424f9
