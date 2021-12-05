@extends('layouts.dashboard.instructors.app')

@section('content')
  
  @if(session('status'))
    <div class="bg-green-200 text-center text-base text-white p-3 rounded-lg res">
      {{ session('status') }}
    </div>
  @endif

  <section class="profile-form-wrapper">
    <div id="profile-form-wrapper" class="flex justify-around flex-col sm:flex-row p-3 space-x-2 items-start m-auto">
      <div class="w-11/12 sm:w-6/12 mb-10 sm:mb-0">
        <h2 class="text-gray-600 pb-2 text-2xl text-center sm:text-left font-semibold">Profile Information</h2>
        <p class="text-gray-500 text-base text-center sm:text-left">Update your account's profile information</p>
      </div>

      <form action="{{ route('dashboard.users.account') }}" method="POST" 
        enctype="multipart/form-data" class="p-4 border-2 rounded-lg w-11/12 
        sm:w-2/5 md:w-11/12 lg:w-11/12"
      >
        @csrf
        @method('PUT')

        <div class="form-control pb-4 pl-1">
          <label for="fullname" class="sr-only">FullName</label>
          <input type="text" name="fullname" placeholder="FullName" class="w-full 
            border-2 bg-gray-100 rounded-lg p-2 md:p-4 lg:p-2 @error('fullname') 
            border-red-500 @enderror" value="{{ auth()->user()->fullname }}"
          >

          @error('fullname')
            <div class="text-red-500 text-sm">
              {{ $message }}
            </div>
          @enderror
        </div>

        <div class="form-control pb-4">
          <label for="email" class="sr-only">E-mail</label>
          <input type="email" name="email" placeholder="E-mail" class=" 
            w-full border-2 bg-gray-100 rounded-lg p-2 md:p-4 lg:p-2" 
            value="{{ auth()->user()->email }}" 
          >

          @error('email')
            <div class="text-red-500 text-sm">
              {{ $message }}
            </div>
          @enderror
        </div>

        <div class="form-control pb-4">
          <label for="avatar" id="upload">Upload</label>
          <input type="file" name="avatar" id="avatar">
        </div>

        <div class="pb-3">
          <button type="submit" class="px-2 py-2 md:px-4 md:py-4 lg:px-2 lg:py-2 
          text-center rounded-lg text-white text-sm font-medium Button w-full"
           >
           Update Profile
          </button>
        </div>

      </form>
    </div> 

    <div id="profile-form-wrapper" class="flex justify-around flex-col sm:flex-row p-3 space-x-2 items-start m-auto">
      <div class="w-11/12 sm:w-6/12 mb-10 sm:mb-0">
        <h2 class="text-gray-600 pb-2 text-2xl text-center sm:text-left font-semibold">Delete Account</h2>
        <p class="text-gray-500 text-base text-center sm:text-left">Permanently delete your account.</p>
      </div>

      <div class="p-4 border-2 rounded-lg w-11/12 
        sm:w-2/5 md:w-11/12 lg:w-11/12">
        <p class="pb-4 text-gray-500 text-base">Once your account is deleted, all of it resources and data will be permanently deleted. And probably can't be restore again</p>
        <button type="submit" class="px-2 py-2 
        text-center rounded-lg text-white text-sm font-medium Button" id="deleteAccount">Delete Account</button>
      </div>
    </div> 

    <div id="accountPermanentlyDeleteBox">
      <h2 class="text-gray-600 pb-2 text-xl text-center">Delete Account</h2>
      <h3 class="text-gray-600 pb-2 text-sm text-center">are your sure your really what to delete your account permanently</h3>
      <form action="{{ route('dashboard.instructor.account.destroy') }}" method="POST">
          @csrf
          @method('DELETE')
          <button type="button" class="px-2 py-1 
          text-center rounded-sm text-white text-sm font-medium bg-blue-300" id="cancleDelete">Cancel</button>
        

          <button type="submit" class="px-2 py-1 
          text-center rounded-sm text-white text-sm font-medium Button" id="deleteAccount">Delete</button>
        </form>
    </div>
  </section>

@endsection