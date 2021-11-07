@extends('layouts.dashboard.users.app')

@section('content')
  
  @if(session('status'))
    <div class="bg-green-200 text-center text-base text-white p-3 rounded-lg res">
      {{ session('status') }}
    </div>
  @endif
  
  <section class="profile-form-wrapper">
    <div id="profile-form-wrapper">
      <form action="{{ route('dashboard.users.account') }}" method="POST" 
        enctype="multipart/form-data" class="p-4 border-2 rounded-lg w-11/12 
        sm:w-2/5 md:w-11/12 lg:w-2/5 m-auto">
        @csrf
        @method('PUT')

        <div class="form-control pb-4 pl-1">
          <label for="fullname" class="sr-only">FullName</label>
          <input type="text" name="fullname" placeholder="FullName" 
          class="w-full border-2 bg-gray-100 rounded-lg p-2 md:p-4 lg:p-2 
          @error('fullname') border-red-500 @enderror" 
          value="{{ auth()->user()->fullname }}">

          @error('fullname')
            <div class="text-red-500 text-sm">
              {{ $message }}
            </div>
          @enderror
        </div>

        <div class="form-control pb-4">
          <label for="email" class="sr-only">E-mail</label>
          <input type="email" name="email" placeholder="E-mail" 
          class="text-gray-300 w-full border-2 bg-gray-100 
          rounded-lg p-2 md:p-4 lg:p-2" value="{{ auth()->user()->email }}" 
          disabled="disabled">
        </div>

        <div class="form-control pb-4">
          <label for="avatar" id="upload">Upload</label>
          <input type="file" name="avatar" id="avatar">
        </div>

        <div class="pb-3">
          <button type="submit" class="px-2 py-2 md:px-4 md:py-4 lg:px-2 lg:py-2 text-center 
          rounded-lg text-white text-sm font-medium Button w-full"
          >
            Update Profile
          </button>
        </div>
      </form>
    </div> 
  </section>
@endsection