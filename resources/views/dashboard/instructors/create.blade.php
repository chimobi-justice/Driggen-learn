@extends('layouts.dashboard.instructors.app')

@section('content')
  @if(session('status'))
    <div class="bg-green-200 text-center text-base text-white p-3 rounded-lg res">
      {{ session('status') }}
    </div>
  @endif

  <section id="createCourse">
    <div id="create-form-wrapper">
      <form action="{{ route('dashboard.instructors.create') }}" method="POST" 
        enctype="multipart/form-data" class="p-4  border-2 rounded-lg w-11/12 sm:w-3/5 
        md:w-11/12 lg:w-3/5 m-auto" id="form">
        @csrf

        <h2 class="text-gray-600 pb-4 text-2xl">Create Your Course</h2>

        <div class="form-control mb-4 pl-1">
          <label for="videoUrl" class="sr-only">Video Url</label>
          <input type="text" name="videoUrl" placeholder="https://www.youtube.com/watch?v=tMoQe3A6Khghh4e" 
          id="videoUrl" class="w-full border-2 bg-gray-100 rounded-lg p-2 md:p-4 lg:p-2 @error('videoUrl') 
          border-red-500 @enderror" value="{{ old('videoUrl') }}">

          @error('videoUrl')
            <div class="text-red-500 text-sm" id="urlFeed">
              {{ $message }}
            </div>
          @enderror
        </div>

        <div class="form-control mb-4 pl-1">
          <label for="title" class="sr-only">Title</label>
          <input type="text" name="title" placeholder="Title" class="w-full border-2 bg-gray-100
          rounded-lg p-2 md:p-4 lg:p-2 @error('title') border-red-500 @enderror" 
          value="{{ old('title') }}">

          @error('title')
            <div class="text-red-500 text-sm">
              {{ $message }}
            </div>
          @enderror
        </div>

        <div class="form-control mb-4 pl-1">
          <label for="category" class="sr-only">Category</label>
          <select name="category" class="w-full border-2 bg-gray-100 rounded-lg p-2 
          md:p-4 lg:p-2 text-gray-600 @error('category') border-red-500 @enderror">
            <option value="">Category</option>
            <option value="Digital Marketing">Digital Marketing</option>
            <option value="Programming">Programming</option>
            <option value="Banking">Banking</option>
            <option value="Food">Food</option>
            <option value="Clothing">Clothing</option>
            <option value="Modelling">Modelling</option>
            <option value="Fashion Designer">Fashion Designer</option>
            <option value="Architecture">Architecture</option>
            <option value="Engineeer">Engineeer</option>
            <option value="Business">Business</option>
            <option value="Computer Science">Computer Science</option>
            <option value="Data Science">Data Science</option>
            <option value="language learning">language learning</option>
          </select>

          @error('category')
            <div class="text-red-500 text-sm">
              {{ $message }}
            </div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="description" class="sr-only">Description</label>
          <textarea name="description" id="" cols="3" rows="5" placeholder="Course Description" 
          class="w-full border-2 bg-gray-100 rounded-lg p-2 md:p-4 lg:p-2 resize-none 
          @error('description') border-red-500 @enderror">{{ old('description') }}</textarea>

          @error('description')
            <div class="text-red-500 text-sm">
              {{ $message }}
            </div>
          @enderror
        </div>

        <div class="form-control pb-4">
          <label for="cover_image" id="upload">Upload Cover Image</label>
          <input type="file" name="cover_image" id="cover_image">
          @error('cover_image')
            <div class="text-red-500 text-sm">
              {{ $message }}
            </div>
          @enderror
        </div>

        <div class="mb-3">
          <button type="submit" class="px-2 py-2 md:px-4 md:py-4 lg:px-2 lg:py-2 
          text-center rounded-lg text-white text-sm font-medium Button w-full"
          >
          Create Course
        </button>
        </div>

      </form>
    </div>
  </section>
@endsection