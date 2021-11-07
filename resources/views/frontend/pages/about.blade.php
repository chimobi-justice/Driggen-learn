@extends('layouts.app')

@section('content')
  <div class="about-container">
    <div class="about-holder-box flex flex-col sm:flex-row md:flex-col lg:flex-row justify-around justify-center pt-20  pb-20 w-4/5 m-auto">
      <div class="w-full sm:w-4/5 md:w-full p-2 sm:p-10 mb-7 sm:mb-0">
        <h2 class="heading-color pb-4 text-xl">About Us</h2>
        <h2 class="pb-2 text-gray-500 font-bold text-2xl sm:text-3xl leading-7 sm:leading-10 pb-4">We provide many types of courses</h2>
        <p class="text-sm pb-3 font-semibold text-gray-600 leading-6 sm:leading-8 mb-5">
           Driggen Learn provide a lot of course which 
           we help a lot of our student. And also teach student 
           the very best we can to help and promote there digital 
           skiils and also there knowledge through our great courses.
           Our goal is to help and grow student skills for them to have 
           the all they want.
        </p>
        <p class="text-sm pb-3 font-semibold text-gray-600 leading-6 sm:leading-8 mb-2">
           Driggen Learn Take your next step toward 
           your personal and professional goals with 
           Satisfactions over all courses.
        </p>
        <p class="text-sm leading-6 pb-3 sm:pb-5">An Online Education.</p>
        <a href="register" class="p-2 rounded-sm text-white text-sm Button">Start Learning Now</a>
      </div>

      <div class="w-full sm:w-4/5 p-2 sm:p-10"> 
        <div class="w-full">
          <img src="{{ asset('images/About-img.jpg') }}" alt="about-photo" class="about-img">
        </div>
      </div>
    </div>
  </div>
@endsection