<section id="details-container">
    <div class="w-4/5 m-auto flex flex-col sm:flex-row md:flex-col lg:flex-row justify-between items-center">
      <div class="w-full sm:w-4/5 md:w-full p-2 sm:p-10">
        <img src="{{ asset('images/detail-1.png') }}" alt="" class="w-full">
      </div>
      <div class="w-full sm:w-4/5 md:w-full p-2 sm:p-10">
        <h2 class="text-gray-500 font-bold text-2xl sm:text-3xl leading-7 sm:leading-10 md:text-4xl md:text-3xl pb-4">
          What we offer
        </h2>
        <p class="font-semibold text-gray-600 text-xs md:text-2xl lg:text-base leading-6 sm:leading-8 mb-5">
          <span class="text-blue-500">1000+ materials</span> 
          on various courses for professional development.
          <span class="text-blue-500">Pre-recorded</span> 
          lessons to access in own time
          <span class="text-blue-500">live session</span> 
          with instructor
        </p>
        <a href="{{ route('register') }}" class="p-2 pr-4 pl-4 rounded-sm text-white text-sm Button">
          join for free</a>
      </div>
    </div>

    <div class="w-4/5 m-auto flex flex-col sm:flex-row md:flex-col lg:flex-row justify-between items-center">
      <div class="w-full sm:w-4/5 md:w-full p-2 sm:p-10">
        <h2 class="text-gray-500 font-bold text-2xl sm:text-3xl leading-7 sm:leading-10 md:text-4xl md:text-2xl md:text-3xl pb-4">
          Learn from great instructors
        </h2>
        <p class="font-semibold text-gray-600 text-xs md:text-2xl lg:text-base leading-6 sm:leading-8 mb-5">
          Start streaming on-demand video Lectures today from top instructors in subjects like 
          business, computer science, data science, language learning, & more
        </p>
      </div>
      <div class="w-full sm:w-4/5 md:w-full p-2 sm:p-10">
        <img src="{{ asset('images/Team-1.jpg') }}" alt="" class="w-full">
      </div>
    </div>

    <div class="w-4/5 m-auto flex flex-col sm:flex-row md:flex-col lg:flex-row justify-between items-center">
      <div class="w-full sm:w-4/5 md:w-full p-2 sm:p-10">
        <img src="{{ asset('images/course-7.jpg') }}" alt="" class="w-full">
      </div>
      <div class="w-full sm:w-4/5 md:w-full p-2 sm:p-10">
        <h2 class="text-gray-500 font-bold text-center sm:text-left text-2xl sm:text-3xl leading-7 sm:leading-10 md:text-4xl lg:text-3xl pb-4">
          Take the next step toward your personal and professional goals with Driggen learn.
        </h2>
        <p class="font-semibold text-gray-600 text-xs md:text-2xl lg:text-base leading-6 sm:leading-8 mb-5">
          Join now to recieve personalized recommendations from the full courses and catalog.
        </p>
        <a href="{{ route('register') }}" class="p-2 pr-4 pl-4 rounded-sm text-white 
          text-sm Button">join for free</a>
      </div>
    </div>
  </section>