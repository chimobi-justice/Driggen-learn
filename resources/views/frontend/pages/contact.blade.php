@extends('layouts.app')

@section('content')
  @if(session('status'))
    <div class="bg-green-200 text-center text-base text-white p-3 response">
      {{ session('status') }}
    </div>
  @endif

  <section id="contact-section">
    <h2 class="text-2xl font-bold w-11/12 sm:w-2/4 m-auto">Contact Us</h2>
    <div id="contact-wrapper" class="w-11/12 sm:w-2/4 border-2 rounded-lg m-auto">
        <form action="{{ route('contact') }}" method="post" class="p-4">
          @csrf

          <div class="form-control pb-4">
              <label for="firstname" class="sr-only">FirstName</label>
              <input type="text" name="firstname" placeholder="FirstName" class="w-full border-2 
                bg-gray-100 rounded-lg p-2 @error('firstname') border-red-500 @enderror" 
                value="{{ old('firstname') }}" id="firstname"
              >

              @error('firstname')
                <div class="text-red-500 text-sm" id="firstnameFeedBackErr">
                  {{ $message }}
                </div>
              @enderror
            </div>

            <div class="form-control pb-4">
              <label for="lastname" class="sr-only">LastName</label>
              <input type="text" name="lastname" placeholder="LastName" class="w-full border-2 
                bg-gray-100 rounded-lg p-2 @error('lastname') border-red-500 @enderror" 
                value="{{ old('lastname') }}" id="lastname"
              >

              @error('lastname')
                <div class="text-red-500 text-sm" id="lastnameFeedBackErr">
                  {{ $message }}
                </div>
              @enderror
            </div>

            <div class="form-control pb-4">
              <label for="email" class="sr-only">Email</label>
              <input type="email" name="email" placeholder="Email" class="w-full border-2 
                bg-gray-100 rounded-lg p-2 @error('email') border-red-500 @enderror" 
                value="{{ old('email') }}" id="email"
              >

              @error('email')
                <div class="text-red-500 text-sm" id="emailFeedBackErr">
                  {{ $message }}
                </div>
              @enderror
            </div>

            <div class="mb-3">
              <label for="message" class="sr-only">Message</label>
              <textarea name="message" id="message" cols="3" rows="5" 
                placeholder="Write your message here..." 
                class="w-full border-2 bg-gray-100 rounded-lg p-2 
                resize-none @error('message') border-red-500 @enderror">{{ old('message') }}</textarea>

              @error('message')
                <div class="text-red-500 text-sm">
                  {{ $message }}
                </div>
              @enderror
            </div>

            <div class="pb-3">
              <button class="px-2 py-2 text-center rounded-lg text-white text-sm font-medium 
                Button w-full"
              >
                Send Message
              </button>
            </div>
        </form>
    </div>
  </section>
@endsection