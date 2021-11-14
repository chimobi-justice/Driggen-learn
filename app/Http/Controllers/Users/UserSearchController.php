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

        $search_q = preg_replace("#^[a-z0-9]#", "", $search);

        // search in the title, category, description columns from the courses table
        $courses = Course::query()
                ->where('title', 'LIKE', "%{$search_q}%")
                ->orWhere('category', 'LIKE', "%{$search_q}%")
                ->orWhere('description', 'LIKE',  "%{$search_q}%")->paginate(30);

        return view('dashboard.users.search', [
            'courses' => $courses,
        ]);
                
    }
}
