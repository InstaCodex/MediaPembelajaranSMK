<?php
<<<<<<< HEAD

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

=======
  
namespace App\Http\Controllers;
  
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
  
>>>>>>> 18dbade65bd37075951b181fc849fcc75f9424f9
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
<<<<<<< HEAD
    public function index(Request $request)
    {
        $data['title'] = 'Data User';
        $data['q'] = $request->q;
        $data['rows'] = User::where('name', 'like', '%' . $request->q . '%')->get();
        return view('users.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $data['title'] = 'Tambah User';
<<<<<<< HEAD
        $data['role'] = ['admin' => 'Admin', 'guru' => 'Guru', 'siswa' => 'Siswa'];
=======
        $data['role'] = ['admin' => 'Admin','guru' => 'Guru' , 'siswa' => 'Siswa'];
>>>>>>> 3efb018d8a0ddfb7a6701257fa02c365c9134d68
        return view('users.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
            'role' => 'required',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = $request->role;
        $user->save();
        return redirect('users')->with('success', 'Tambah Data Berhasil');
    }


    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $data['title'] = 'Ubah User';
        $data['row'] = $user;
<<<<<<< HEAD
        $data['role'] = ['admin' => 'Admin', 'guru' => 'Guru', 'siswa' => 'Siswa'];
=======
        $data['role'] = ['admin' => 'Admin','guru' => 'Guru' , 'siswa' => 'Siswa'];
>>>>>>> 3efb018d8a0ddfb7a6701257fa02c365c9134d68
        return view('users.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'role' => 'required',
        ]);

        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->password)
            $user->password = Hash::make($request->password);
        $user->role = $request->role;
        $user->save();
        return redirect('users')->with('success', 'Ubah Data Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect('users')->with('success', 'Hapus Data Berhasil');
    }
}
=======
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
>>>>>>> 18dbade65bd37075951b181fc849fcc75f9424f9
