@extends('layouts.dashboard.users.app')

@section('content')
  <div class="courses-container">
    @if ($courses->count())

      <div class="courses-holder-box pt-14  pb-20 w-11/12 m-auto">
        <h2 class="heading-color pb-2 text-lg sm:text-2xl">Discover</h2>
        <div class="courses grid grid-cols-1 sm:grid-cols-3 md:grid-cols-2 lg:grid-cols-3 gap-10 mb-4 gap-y-10 gap-x-8 w-full m-auto">
          @foreach($courses as $course)
              <div class="border-2 rounded-xl courses-box">
                <a href="{{ route('dashboard.users.show', $course->id) }}" class="block">
                  <img src="{{ $course->coverImage }}" alt="" class="rounded-lg course-img">
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

      </div>
    @else
        <div class="flex justify-center items-center no-course">
          <div>
            <img src="{{ asset('images/empty.svg') }}" alt="Preview course">
            <p class="text-center text-gray-500">No courses yet, course 'll appear here</p>
          </div>
      </div> 
    @endif
  </div>
@endsection