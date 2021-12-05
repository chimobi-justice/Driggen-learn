@extends('layouts.dashboard.instructors.app')

@section('content')

  @if(session('status'))
    <div class="bg-green-200 text-center text-base text-white p-3 rounded-lg res">
      {{ session('status') }}
    </div>
  @endif

  @if ($courses->count())
    <div class="courses-holder-box pt-14  pb-20 w-11/12 m-auto">
      <h2 class="text-gray-600 pb-2 text-2xl">My Courses</h2>
      <div class="courses grid grid-cols-1 sm:grid-cols-3 md:grid-cols-2 lg:grid-cols-3 gap-10 mb-4 gap-y-10 gap-x-8 w-full m-auto"> 
        @foreach($courses as $course)
            <div class="border-2 rounded-xl courses-box">
              <a href="{{ route('dashboard.instructors.course', $course->id) }}" class="block">
                <img src="{{ $course->coverImage }}" alt="" class="rounded-lg course-img">
                <div class="tag flex justify-between p-4 items-center">
                  <p class="bg-gray-200 p-2 pr-3 pl-3 text-xs rounded-lg tag-text">{{ $course->category }}</p>
                  <p class="text-xs">online class</p>
                </div>
                <p class="p-4 text-xs text-gray-400 font-normal">Posted {{ $course->created_at->diffForHumans() }}</p>
                <p class="p-4 text-sm text-gray-700 font-semibold">{{ Str::limit($course->description, 35) }}</p>
              </a>
            </div>
        @endforeach
    </div>
  @else
    <div class="nothing-found flex justify-center items-center">
      <h2>No Course Found!</h2>
      <p class="pl-3"><a href="{{ route('dashboard.instructors.create') }}" class="p-2 rounded-sm 
        text-white text-sm Button"> Click here to create a course</a></p>
    </div>
  @endif
@endsection