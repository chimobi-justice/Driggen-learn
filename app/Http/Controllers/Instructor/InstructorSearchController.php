<?php

namespace App\Http\Controllers\Instructor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;

class InstructorSearchController extends Controller
{
    public function search(Request $request, Course $course)
    {
        // Get the search value from the request
        $search = $request->search_query;

        $search_q = preg_replace("#^[a-z0-9]#", "", $search);

        // search in the title, category, description columns from the courses table
        $courses = Course::query()
                // ->latest()->where('user_id', auth()->user()->id)
                ->where('title', 'LIKE', "%{$search_q}%")
                ->orWhere('category', 'LIKE', "%{$search_q}%")
                ->orWhere('description', 'LIKE',  "%{$search_q}%")->get();

        return view('dashboard.instructors.search', [
            'courses' => $courses,
        ]);
                
    }
}

