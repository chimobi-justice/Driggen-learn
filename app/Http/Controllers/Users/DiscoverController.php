<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Course;
use App\Models\Comment;

class DiscoverController extends Controller
{
    public function index() 
    {
        if (!auth()->user()->accountType === false) {
            return response(null, 403);
        }
        $courses = Course::latest()->paginate(20);
      
        return view('dashboard.users.discover', [
            'courses' => $courses
        ]);
    }

    public function show(Course $course)
    {        
        $comments = Comment::where('course_id', $course->id)->latest()->get();

        return view('dashboard.users.show', [
            'course' => $course,
            'comments' => $comments
        ]);
    }

    public function store(Request $request, $id)
    {
        $this->validate($request, [
            'comment' => 'required'
        ]);

        $course = Course::findOrFail($id);

        $request->user()->comments()->create([
            'course_id' => $course->id,
            'comment' =>  $request->comment
        ]);

        return back();
    }

    public function instructor($name, $id)
    {
        $allcourses = Course::where('user_id', $id)->paginate(20);

        return view('dashboard.users.showInstructor.index', [
            'allcourses' => $allcourses,
        ]);
    }
}
