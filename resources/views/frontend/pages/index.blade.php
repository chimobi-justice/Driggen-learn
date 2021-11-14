@extends('layouts.app')

@section('content')
  <div class="home-courses-container">
    <h1 class="text-center p-2 pt-10 pb-2 text-gray-600 font-semibold text-2xl sm:text-3xl">
      Achieve your goals with Driggen learn
    </h1>

    @if ($courses->count())
      <div class="courses-holder-box pt-20  pb-20 w-4/5 m-auto">
        <h2 class="heading-color pb-2 text-2xl">Our free courses</h2>
        <div class="courses grid grid-cols-1 sm:grid-cols-3 md:grid-cols-2 lg:grid-cols-3 gap-10 mb-4 gap-y-10 gap-x-8 w-full m-auto">
          @foreach($courses as $course)
            <div class="border-2 rounded-xl courses-box">
              <a href="{{ route('login') }}" class="block">
                <img src="{{ asset('imageCover/'. $course->coverImage) }}" alt="Preview course" class="rounded-lg 
                  course-img">
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
      @endif
      
      @if (count($courses) > 6)
      <a href=" {{ route('courses') }}" class="text-right block pt-2 text-gray-500 
        hover:text-gray-600 hover:underline">See all courses</a>
      @endif
    </div>
  </div>

  <section id="section-wrapper">
    <div class="section grid grid-cols-1 sm:grid-cols-3 md:grid-cols-1 lg:grid-cols-3 gap-10 gap-x-8 w-9/12 m-auto items-center">
        <div class="border-0 rounded-xl relative play-vid-button">
            <a href="" class="block">
              <img src="{{ asset('images/Hero-banner.jpeg') }}" alt="" class="section-img rounded-lg">
              <div class="section-info">
                <div class="play">dd</div>
                <p>Watch overview in 30 seconds</p>
              </div>
            </a>
        </div>
        <div class="p-4">
            <h2 class="text-white text-2xl leading-9">5+</h2>
            <h3 class="text-white text-xl leading-9">Complete Courses</h3>
            <p class="text-white text-sm font-semibold">
              personalized recommendations from the full courses and catalog
            </p>
        </div>
        <div class="p-4">
            <h2 class="text-white text-2xl leading-9">4%</h2>
            <h3 class="text-white text-xl leading-9">Student Satisfaction</h3>
            <p class="text-white text-sm font-semibold">
              Take your next step toward your personal and professional goals with Satisfactions.
            </p>     
        </div>
      </div>
  </section>

  @include('frontend.sections.Details')
  
@endsection