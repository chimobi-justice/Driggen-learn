<?php

namespace App\Http\Controllers\Instructor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Comment;

class InstructorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('create', Course::class);
        
        $courses = Course::with(['user', 'enrollCourse'])
                   ->latest()->where('user_id', auth()->user()->id)->get();
      
        return view('dashboard.instructors.index', [
            'courses' => $courses
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', Course::class);

        return view('dashboard.instructors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'videoUrl' => 'required|url|regex:/watch/i',
            'title' => 'required',
            'category' => 'required',
            'description' => 'required',
            'cover_image' => 'required'
        ]);

        $videoId = explode('=', $request->videoUrl);
     
        $newImageName = cloudinary()->upload($request->file('cover_image')->getRealPath())->getSecurePath();

        $request->user()->course()->create([
            'videoUrl' => 'https://www.youtube.com/embed/'. $videoId[1], 
            'title' => $request->title, 
            'category' => $request->category, 
            'description' => $request->description,
            'coverImage' => $newImageName,
        ]);

        return back()->with('status', 'Course created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, Course $course)
    {
        $course = Course::findOrFail($id);

        $comments = Comment::where('course_id', $id)->latest()->get();

        $this->authorize('delete', $course);

        return view('dashboard.instructors.course', [
            'course' => $course,
            'comments' => $comments,
        ]);
    }

    public function showProfile()
    {
        $this->authorize('create', Course::class);

        return view('dashboard.instructors.account');
    }

    public function updateProfile()
    {
        $this->validate($request, [
            'fullname' => 'required|max:255',
            'email' => 'required|max:255',
            'avatar' => 'mimes:jpg,jpeg,png|max:5048',
        ]);

        $newImageName = cloudinary()->upload($request->file('avatar')->getRealPath())->getSecurePath();

        auth()->user()->update([
            'fullname' => $request->fullname,
            'email' => $request->email,
            'avatar' => $newImageName
        ]);

        return back()->with('status', 'profile Update successfully');
  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {        
        $this->authorize('delete', $course);

        $course->delete();

        return redirect()->route('dashboard.instructors.index')
            ->with('status', 'Course Deleted successfully');    
    }
}