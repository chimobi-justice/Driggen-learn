<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\Support\Facades\DB;

class UserAllCourse extends Controller
{
    public function index()
    {
        if (!auth()->user()->accountType === false) {
            return response(null, 403);
        }
        
        $enrollCourses = DB::table('courses')
                         ->join('enroll_courses', 'courses.id', '=', 'enroll_courses.course_id')
                         ->where('enroll_courses.user_id', auth()->user()->id)->get();

        return view('dashboard.users.courses.index', [
            'enrollCourses' => $enrollCourses,
        ]);
    }

    public function store(Request $request, Course $course)
    {  
        if ($course->enrollBy($request->user())) {
            return response(null, 409);
        }

        $course->enrollCourse()->create([
            'user_id' => $request->user()->id,
            'course_id' => $course->id
        ]);

        return back();
    }

    public function destroy(Request $request, Course $course)
    {
        $request->user()->enrollCourse()->where('course_id', $course->id)->delete();

        return back();
    }
}
