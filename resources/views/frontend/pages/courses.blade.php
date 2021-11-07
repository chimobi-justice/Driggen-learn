@extends('layouts.app')

@section('content')
  <div class="home-courses-container">
    <div class="courses-holder-box pt-20  pb-20 w-4/5 m-auto">
      <div class="course-content text-center pb-10">
        <h2 class="heading-color pb-2 text-xl">Our Courses</h2>
        <h3 class="text-3xl pb-2">We Provide Alot Of Courses</h2>
      </div>

      @if ($courses->count())
        <div class="courses grid grid-col-1 sm:grid-cols-3 md:grid-cols-2 lg:grid-cols-3 gap-10 mb-4 gap-y-10 gap-x-8 w-full m-auto">
          @foreach($courses as $course)
              <div class="border-2 rounded-xl courses-box">
                <a href="{{ route('login') }}" class="block">
                  <img src="{{ asset('imageCover/'. $course->coverImage) }}" alt="" 
                    class="rounded-lg course-img">
                  <div class="tag flex justify-between p-4 items-center">
                    <p class="bg-gray-200 p-2 pr-3 pl-3 text-xs rounded-lg tag-text">
                      {{ $course->category }}
                    </p>
                    <p class="text-xs">online class</p>
                  </div>
                  <p class="p-4 text-xs text-gray-400 font-normal">
                    Posted {{ $course->created_at->diffForHumans() }}
                  </p>
                  <p class="p-4 text-sm text-gray-700 font-semibold">{{ Str::limit($course->description, 35) }}</p>
                </a>
              </div>
              
          @endforeach
        </div>

        {{ $courses }}

      @endif
  
    </div>
  </div>
@endsection