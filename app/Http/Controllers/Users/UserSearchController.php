<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;

class UserSearchController extends Controller
{
    public function search(Request $request)
    {
        // Get the search value from the request
        $search = $request->search_query;

        // search in the title, category, description columns from the courses table
        $courses = Course::query()
                ->where('title', 'LIKE', "%{$search}%")
                ->orWhere('category', 'LIKE', "%{$search}%")
                ->orWhere('description', 'LIKE',  "%{$search}%")->paginate(30);

        return view('dashboard.users.search', [
            'courses' => $courses,
        ]);
                
    }
}
