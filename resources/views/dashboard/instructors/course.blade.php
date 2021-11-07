@extends('layouts.dashboard.instructors.app')

@section('content')
<div class="courses-container">
  <div class="wrapper flex flex-col sm:flex-row md:flex-col lg:flex-row justify-between pt-14 pb-20 w-11/12 m-auto">
    <div class="courses-holder w-full sm:w-11/12 m-0 sm:m-2 p-2">
      <h2 class="text-gray-600 pb-2 text-2xl">Discover</h2>
      <h3 class="text-lg pb-6 pt-3"><span class="text-gray-400">Courses  ></span>  
        {{ Str::limit($course->title, 20 )}}
      </h3>

      <div class="">
        <div class="bg-white p-3 rounded-lg">
          <div class="rounded-xl">
              <div class="discover-play"> 
                  <iframe height="240" src="{{ $course->videoUrl }}" controls="1" 
                    title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; 
                    clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen class="w-full">
                  </iframe>
                </div>
              
              <div class="discover-play-detail">
                <h3 class="pb-1 pt-3 mb-1 text-2xl font-bold text-gray-700">{{ $course->title }}</h3>

                <p class="text-gray-500 text-sm leading-7 mb-4">
                  {{ $course->description }}  
                </p> 
              </div>
          </div>

          <div>
      @if ($comments->count())
        @foreach($comments as $comment)
          <div class="border-b-2 p-2">
            <div class="comment-avatar-holder pb-2 flex items-center">
                @if(!$comment->user->avatar)
                  <div class="pr-2"><img src="{{ asset('images/avatar.jpeg') }}"
                    alt="" class="w-9"></div>
                @else
                  <div class="pr-2">
                    <img src="{{ asset('profiles/' . $comment->user->avatar ) }}" 
                      alt="" class="w-9">
                  </div>
                @endif
                  <p class="text-sm text-gray-500">{{ $comment->user->firstname }}</p>
            </div>
            <div class="text-gray-500 text-xs leading-5">
              <p>{{$comment->comment}}</p>
            </div>
          </div>
        @endforeach
      @endif
    </div>
        </div>
      </div>
    </div>

    <div class="bg-white w-full sm:w-1/4 p-3 rounded-lg aside-right h-auto sm:h-48">
        <div class="pb-3">
          @can('delete', $course)
          <form action="{{ route('dashboard.instructors.destroy', $course) }}" method="POST">
            @csrf
            @method('DELETE')

            <button class="px-2 py-2 text-center rounded-lg text-white text-sm font-medium 
              Button w-full"
            >
              Delete Course
            </button>
          </form>
          @endcan
        </div>

      <div>
        <h4 class="pb-1 pt-1 text-base font-bold text-gray-700">THis course includes:</h4>
        <p class="text-sm font-semibold text-gray-500 leading-7">100% Positive reviews</p>
        <p class="text-sm font-semibold text-gray-500 leading-7">
          {{ $course->enrollCourse->count() }} 
          {{ Str::plural('student', $course->enrollCourse->count())}}
          Enroll course
        </p>
      </div>
    </div>
  </div>
</div>
@endsection