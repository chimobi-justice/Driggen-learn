<?php

namespace App\Http\Controllers\Instructor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;

class InstructorDeleteController extends Controller
{
    public function destroy(Course $course)
    {
        if (auth()->check()) {
            $course->where('user_id', auth()->user()->id)->delete();
            auth()->user()->delete();
        }
        
        return redirect()->route('login');
    }
}
