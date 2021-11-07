<?php

namespace App\Http\Controllers\Instructor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class SettingController extends Controller
{
    public function index()
    {
        $this->authorize('create', Course::class);

        return view('dashboard.instructors.setting');
    }

    public function store(Request $request, User $user)
    {
        $this->validate($request, [
            'fullname' => 'required|max:255',
            'current_password' => 'required|current_password',
            'new_password' => 'required',
        ]);

        auth()->user()->update([
            'fulltname' => $request->fulltname,
            'email' => auth()->user()->email,
            'password' => Hash::make($request->new_password),
        ]);

        return back()->with('status', 'updated successfully');
    }
}
