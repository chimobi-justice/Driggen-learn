<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AccountController extends Controller
{
    public function index() 
    {
        if (!auth()->user()->accountType === false) {
            return response(null, 403);
        }
        return view('dashboard.users.account');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'fullname' => 'required|max:255',
            'avatar' => 'required|mimes:jpg,jpeg,png|max:5048',
        ]);

        $newImageName = cloudinary()->upload($request->file('avatar')->getRealPath())->getSecurePath();

        auth()->user()->update([
            'fullname' => $request->fullname,
            'email' => auth()->user()->email,
            'avatar' => $newImageName
        ]);

        return back()->with('status', 'profile Update successfully');
    }
}
