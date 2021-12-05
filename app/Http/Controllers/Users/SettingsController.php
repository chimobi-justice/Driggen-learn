<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SettingsController extends Controller
{
    public function index()
    {
        if (!auth()->user()->accountType === false) {
            return response(null, 403);
        }
        
        return view('dashboard.users.settings');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'current_password' => 'required|current_password',
            'password' => 'required|confirmed',
        ]);

        auth()->user()->update([
            'password' => Hash::make($request->password),
        ]);

        return back()->with('status', 'updated successfully');
    }
}
