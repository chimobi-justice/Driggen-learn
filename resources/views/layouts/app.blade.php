<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Driggenlearn an E-learning website">
  <meta name="keywords" content="CSS,JavaScript,Tailwind,Laravel,PHP">
  <meta name="author" content="Justice Chimobi">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('css/index.css') }}">
  <link rel="stylesheet" href="{{ asset('css/HeroSection.css') }}">
  <link rel="stylesheet" href="{{ asset('css/About.css') }}">
  <link rel="stylesheet" href="{{ asset('css/Courses.css') }}">
  <link rel="stylesheet" href="{{ asset('css/Team.css') }}">
  <link rel="stylesheet" href="{{ asset('css/Pricing.css') }}">
  <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
  <link rel="stylesheet" href="{{ asset('css/Details.css') }}">
  <link rel="stylesheet" href="{{ asset('css/Footer.css') }}">
  <title>{{ config('app.name')}}</title>
</head>
<body class="bg-white">

  @include('loader.loader')

  <div id="bodyContent">
   <div>
     <div class="block lg:hidden">
      @include('layouts.navigation.navbar-sm')
     </div>

     <div class="hidden lg:block">
      @include('layouts.navigation.navbar-lg')  
     </div>
    </div>
    
    @include('frontend.sections.HeroSection')

    <main>
      @yield('content')
    </main>

    @include('frontend.sections.Footer')

   </div>
  </div>
  
  <script src="{{ asset('js/index.js') }}"></script>
  <script src="{{ asset('js/loader.js') }}"></script>
  <script src="{{ asset('js/timeOut.js') }}"></script>

</body>
</html>