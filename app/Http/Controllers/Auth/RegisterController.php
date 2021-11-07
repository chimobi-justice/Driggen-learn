<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class RegisterController extends Controller
{
    public function __construct() 
    {   
        $this->middleware(['guest']);
    }
    
    public function index() 
    {
        return view('auth.Register');
    }

    public function store(Request $request) 
    {
        $this->validate($request, [
            'fullname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|confirmed|max:8',
        ]);

        User::create([
            'fullname' => $request->fullname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'accountType' => false,
        ]);

        auth()->attempt($request->only('email', 'password'));

        return redirect()->route('dashboard.users.index');
    }
}
