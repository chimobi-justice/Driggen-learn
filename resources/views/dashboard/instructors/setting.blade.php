@extends('layouts.dashboard.instructors.app')

@section('content')
  @if(session('status'))
    <div class="bg-green-200 text-center text-base text-white p-3 rounded-lg res">
      {{ session('status') }}
    </div>
  @endif
  <section id="setting">
    <div id="profile-form-wrapper" class="flex justify-around flex-col sm:flex-row p-3 space-x-2 items-start m-auto">
      <div class="w-11/12 sm:w-6/12 mb-10 sm:mb-0">
        <h2 class="text-gray-600 pb-2 text-2xl text-center sm:text-left font-semibold">Update your password</h2>
        <p class="text-gray-500 text-base text-center sm:text-left">Please ensure your password is using a long term random password</p>
      </div>

      <form action="{{ route('dashboard.instructor.settings') }}" method="POST" 
        enctype="multipart/form-data" class="p-4 border-2 rounded-lg w-11/12 
        sm:w-2/5 md:w-11/12 lg:w-11/12"
        >
        @csrf
        @method('PUT')

        <div class="form-control pb-4 pl-1">
          <label for="current_password" class="sr-only">Current Password</label>
          <input type="password" name="current_password" placeholder="Current Password" 
          class="w-full border-2 bg-gray-100 rounded-lg p-2 md:p-4 lg:p-2" 
          id="current_password"
          >

          @error('current_password')
            <div class="text-red-500 text-sm" id="current_password_feed_back_err">
              {{ $message }}
            </div>
          @enderror
        </div>

        <div class="form-control pb-4 pl-1">
          <label for="password" class="sr-only">New Password</label>
          <input type="password" name="password" placeholder="New Password" 
          class="w-full border-2 bg-gray-100 rounded-lg p-2 md:p-4 lg:p-2" 
          id="new_password"
          >

          @error('password')
            <div class="text-red-500 text-sm" id="new_password_feed_back_err">
              {{ $message }}
            </div>
          @enderror
        </div>

        <div class="form-control pb-4 pl-1">
          <label for="password_confirmation" class="sr-only">Comfirm Password</label>
          <input type="password" name="password_confirmation" placeholder="Confirm Password" 
          class="w-full border-2 bg-gray-100 rounded-lg p-2 md:p-4 lg:p-2" 
          id="password_confirmation"
          >

        </div>

        <div class="pb-3">
          <button type="submit" class="px-2 py-2 md:px-4 md:py-4 lg:px-2 lg:py-2 text-center 
          rounded-lg text-white text-sm font-medium Button w-full"
          >
            Save
          </button>
        </div>
      </form>
    </div>
  </section>
  
  <script src="{{ asset('js/settings.js') }}"></script>

@endsection