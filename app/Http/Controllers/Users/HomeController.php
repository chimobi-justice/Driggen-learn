<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;

class HomeController extends Controller
{
    public function index() 
    {
        if (!auth()->user()->accountType === false) {
            return response(null, 403);
        }
        $courses = Course::latest()->limit(6)->get();

        return view('dashboard.users.index', [
            'courses' => $courses
        ]);
    }
}
