<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class IndexController extends Controller
{
    public function __construct() 
    {
        $this->middleware(['IsAuthUser', 'IsAuthInstructor']);
    }
    
    public function index() 
    {
        $courses = Course::latest()->limit(6)->get();

        return view('frontend.pages.index', [
            'courses' => $courses
        ]);
    }
}
