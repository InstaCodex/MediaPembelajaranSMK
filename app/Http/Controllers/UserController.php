<?php
  
namespace App\Http\Controllers;
  
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
  
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $users = User::latest()->paginate(5);
        
        return view('users.index',compact('users'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('users.create');
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
        
        User::create($request->all());
         
        return redirect()->route('users.index')
                        ->with('success','User created successfully.');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(User $user): View
    {
        return view('users.show',compact('user'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user): View
    {
        return view('users.edit',compact('user'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            // 'detail' => 'required',
        ]);
        
        $user->update($request->all());
        
        return redirect()->route('users.index')
                        ->with('success','User updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user): RedirectResponse
    {
        $user->delete();
         
        return redirect()->route('users.index')
                        ->with('success','User deleted successfully');
    }
}