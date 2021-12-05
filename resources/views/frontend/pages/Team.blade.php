@extends('layouts.app')

@section('content')
  <div class="Team-container">
    <div class="Team-holder-box pt-20  pb-20 w-4/5 m-auto">
      <div class="Team-content text-center pb-10">
        <h2 class="heading-color pb-2 text-2xl">Our Teams</h2>
      </div>


      <div class="Team grid grid-col-1 sm:grid-cols-3 md:grid-cols-2 lg:grid-cols-3 gap-10 mb-4 gap-y-10 gap-x-8 w-full m-auto">
        <div class="border-2 rounded-xl Team-box">
            <img src="{{ asset('images/Team-3.png') }}" alt="" class="rounded-lg course-img">
            <div class="bg-gray-200 p-6">
              <p class="text-sm sm:text-2xl md:text-base font-semibold leading-8">Nelson Chinedu</p>
              <p class="text-xs sm:text-xl md:text-base">Fullstack Developer</p>
            </div>
        </div>

        <div class="border-2 rounded-xl Team-box">
            <img src="{{ asset('images/Team-1.jpg') }}" alt="" class="rounded-lg course-img">
            <div class="bg-gray-200 p-6">
              <p class="text-sm sm:text-2xl md:text-base font-semibold leading-8">Jesan Pepple</p>
              <p class="text-xs sm:text-xl md:text-base">Designer</p>
            </div>
        </div>

        <div class="border-2 rounded-xl Team-box">
            <img src="{{ asset('images/Team-2.png') }}" alt="" class="rounded-lg course-img">
            <div class="bg-gray-200 p-6">
              <p class="text-sm sm:text-2xl md:text-base font-semibold leading-8">Justice Chimobi</p>
              <p class="text-xs sm:text-xl md:text-base">Junior Fullstack Developer</p>
            </div>
        </div>
      </div>
  </div>    
@endsection
