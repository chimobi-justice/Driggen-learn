@extends('layouts.app')

@section('content')
  <div class="Pricing-container">
    <div class="Pricinig-holder-box pt-20  pb-20 w-4/5 m-auto">
      <div class="Pricing-content text-center pb-10">
        <h2 class="heading-color pb-2 text-xl">Our Pricing</h2>
        <h3 class="text-3xl pb-2">The best pricing in market</h2>
      </div>


      <div class="Pricing grid grid-col-1 sm:grid-cols-3 md:grid-cols-2 lg:grid-cols-3 gap-10 mb-4 gap-y-10 gap-x-8 w-full m-auto">
        <div class="border-0 rounded-xl Pricing-box p-4">
            <div class="p-6 text-center">
              <h3 class="text-xl font-semibold leading-8">Standard</h3>
              <p class="text-sm color-text-root leading-8">$300/year</p>
              <p class="text-sm leading-7">5 or 9 hours a month in one subject</p>
              <p class="text-sm leading-7">
                The duration of the lesson is decided together with the teacher
              </p>
              <p class="text-sm leading-7">5 subject</p>
              <p class="text-sm leading-7">$150 without discount</p>
              <p class="text-sm leading-7">3 student</p>
              <a href="#" class="p-2 rounded-lg text-white text-base text-center 
                Button block mt-2 mb-2">Sign Up</a>
            </div>
        </div>
        <div class="border-0 rounded-xl Pricing-box p-4">
          <div class="p-6 text-center">
              <h3 class="text-xl font-semibold leading-8">Advanced</h3>
              <p class="text-sm color-text-root leading-8">$300/year</p>
              <p class="text-sm leading-7">5 or 9 hours a month in one subject</p>
              <p class="text-sm leading-7">
                The duration of the lesson is decided together with the teacher
              </p>
              <p class="text-sm leading-7">5 subject</p>
              <p class="text-sm leading-7">$150 without discount</p>
              <p class="text-sm leading-7">3 student</p>
              <a href="#" class="p-2 rounded-lg text-white text-base text-center 
                Button block mt-2 mb-2">Sign Up</a>
            </div>
        </div>
        <div class="border-0 rounded-xl Pricing-box p-4">
          <div class="p-6 text-center">
              <h3 class="text-xl font-semibold leading-8">Extra</h3>
              <p class="text-sm color-text-root leading-8">$300/year</p>
              <p class="text-sm leading-7">5 or 9 hours a month in one subject</p>
              <p class="text-sm leading-7">
                The duration of the lesson is decided together with the teacher
              </p>
              <p class="text-sm leading-7">5 subject</p>
              <p class="text-sm leading-7">$150 without discount</p>
              <p class="text-sm leading-7">3 student</p>
              <a href="#" class="p-2 rounded-lg text-white text-base text-center 
              Button block mt-2 mb-2">Sign Up</a>
            </div>        
          </div>
      </div>

  </div>    
@endsection
