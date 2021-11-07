<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class SettingsController extends Controller
{
    public function index()
    {
        if (!auth()->user()->accountType === false) {
            return response(null, 403);
        }
        
        return view('dashboard.users.settings');
    }

    public function store(Request $request, User $user)
    {
        $this->validate($request, [
            'fullname' => 'required|max:255',
            'current_password' => 'required|current_password',
            'new_password' => 'required',
        ]);

        auth()->user()->update([
            'fullname' => $request->fullname,
            'email' => auth()->user()->email,
            'password' => Hash::make($request->new_password),
        ]);

        return back()->with('status', 'updated successfully');
    }
}
