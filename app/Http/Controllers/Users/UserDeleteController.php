<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserDeleteController extends Controller
{
    public function destroy()
    {
        if (auth()->check()) {
            auth()->user()->delete();
        }

        return redirect()->route('login');
    }
}
