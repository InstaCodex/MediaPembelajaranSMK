<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
<<<<<<< HEAD
            // Role should be either 'admin' or 'guru'
            'role' => 'required|in:admin,guru,siswa',
=======
<<<<<<< HEAD
            'role' => 'required|in:admin,guru',
=======
>>>>>>> 18dbade65bd37075951b181fc849fcc75f9424f9
>>>>>>> 3efb018d8a0ddfb7a6701257fa02c365c9134d68
        ]);
    }

    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
<<<<<<< HEAD
            'role' => $data['role'],
=======
<<<<<<< HEAD
            'role' => $data['role'],
=======
>>>>>>> 18dbade65bd37075951b181fc849fcc75f9424f9
>>>>>>> 3efb018d8a0ddfb7a6701257fa02c365c9134d68
        ]);
    }
}
