<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function __construct() 
    {
        $this->middleware(['IsAuthUser', 'IsAuthInstructor']);
    }
    
    public function index() 
    {
        $courses = Course::latest()->paginate(20);

        return view('frontend.pages.courses', [
            'courses' => $courses
        ]);
    }
}
