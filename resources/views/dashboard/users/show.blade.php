@extends('layouts.dashboard.users.app')

@section('content')
  <div class="courses-container">
    <div class="wrapper flex flex-col sm:flex-row md:flex-col lg:flex-row justify-between pt-14 pb-20 w-11/12  m-auto">
      <div class="courses-holder w-full sm:w-11/12 m-0 sm:m-2 p-2">
        <h2 class="heading-color pb-2 text-lg sm:text-2xl">Discover</h2>
        <h3 class="text-lg pb-6 pt-3"><a href="{{ route('dashboard.users.discovers') }}" class="text-gray-400 text-lg sm:text-2xl">Courses  ></a>  
          <span class="font-bold text-lg sm:text-2xl">{{ Str::limit($course->title, 20) }}</span>
        </h3>

        <div class="">
          <div class="bg-white p-0 rounded-lg">
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

                  <p class="pb-3 pt-1 mb-3 text-sm"><span class="font-semibold text-gray-500">
                    <a href="{{ route('dashboard.instructor', 
                                      ['name' => $course->user->slug, 
                                      'id' => $course->user->id] ) 
                              }}">By <span class="font-bold text-gray-700">
                      {{ $course->user->fullname }}
                    </span>
                      </a>
                    </span></p>

                  <p class="text-gray-500 text-sm leading-7 mb-4">
                    {{$course->description}} 
                  </p>

                  <div>
                    <h4 class="pb-3">Leave a Comment</h4>

                    <div class="form-control pb-4">
                      <form action="" method="POST" class="w-full md:w-11/12">
                        @csrf
                        <div class="mb-3">
                          <label for="comment" class="sr-only">Comment</label>
                          <textarea name="comment" id="comment" cols="3" rows="5" 
                          placeholder="Write your comment here..." 
                          class="w-full border-2 bg-gray-100 rounded-lg p-2 
                          resize-none @error('comment') border-red-500 @enderror">{{ old('comment') }}</textarea>

                          @error('comment')
                            <div class="text-red-500 text-sm">
                              {{ $message }}
                            </div>
                          @enderror
                        </div>

                        <div class="pb-3">
                          <button class="px-4 py-3 text-center rounded-lg text-white 
                            text-sm font-medium Button"
                          >
                            Post
                          </button>
                        </div>
                      </form>

                      <div>
                        @if ($comments->count())
                            @foreach($comments as $comment)
                              <div class="border-b-2 p-2">
                                <div class="comment-avatar-holder pb-2 flex items-center">
                                  @if(!$comment->user->avatar)
                                    <div class="pr-2"><img src="{{ asset('images/avatar.jpeg') }}"
                                      alt="" class="w-9"></div>
                                  @else
                                    <div class="pr-2"><img src="{{ $comment->user->avatar }}" 
                                    alt="" class="w-9"></div>
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
            </div>
          </div>
        </div>
      </div>

      <div class="bg-white w-full sm:w-1/4 p-3 rounded-lg aside-right h-auto sm:h-48">
        <div class="pb-3">
          @if(!$course->enrollBy(auth()->user()))
            <form action="{{ route('dashboard.page.user.enroll', $course ) }}" method="POST">
              @csrf
              <button class="px-2 py-2 text-center rounded-lg text-white text-sm font-medium 
                Button w-full">
                Enroll Now
              </button>
            </form>
          @else
            <form action="{{ route('dashboard.page.user.enroll.destroy', $course ) }}" method="POST">
              @csrf
              @method('DELETE')
              <button class="px-2 py-2 text-center rounded-lg text-white text-sm font-medium 
                Button w-full">
                Unenroll Course
              </button>
            </form>
          @endif
        </div>

        <div>
          <h4 class="pb-1 pt-1 text-base font-bold text-gray-700">THis course includes:</h4>
          <p class="text-sm font-semibold text-gray-500 leading-7">100% Positive reviews</p>
          <p class="text-sm font-semibold text-gray-500 leading-7">
            {{ $course->enrollCourse->count() }} 
            {{ Str::plural('student', $course->enrollCourse->count())}}
            Enroll course
          </p>
          <p class="text-sm font-semibold text-gray-500 leading-7">Available from the App</p>
        </div>
      </div>
    </div>
  </div>
@endsection