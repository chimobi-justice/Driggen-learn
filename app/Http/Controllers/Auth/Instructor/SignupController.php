<?php

namespace App\Http\Controllers\Auth\Instructor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class SignupController extends Controller
{
    public function __construct() 
    {   
        $this->middleware(['guest']);
    }
    
    public function index() 
    {
        return view('auth.Instructor.Register');
    }

    public function store(Request $request) 
    {
        $this->validate($request, [
            'fullname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|confirmed|max:8',
        ]);

        $slug_to_lower = strtolower(Str::slug($request->fullname));

        $slug = $slug_to_lower;

        User::create([
            'fullname' => $request->fullname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'accountType' => true,
            'slug' => $slug
        ]);

        auth()->attempt($request->only('email', 'password'));

        return redirect()->route('dashboard.instructors.index');
    }
}
