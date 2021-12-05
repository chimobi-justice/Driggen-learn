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
  <link rel="stylesheet" href="{{ asset('css/Home.css') }}">
  <link rel="stylesheet" href="{{ asset('css/Grade.css') }}">
  <link rel="stylesheet" href="{{ asset('css/Courses.css') }}">
  <link rel="stylesheet" href="{{ asset('css/Discover.css') }}">
  <link rel="stylesheet" href="{{ asset('css/account.css') }}">
  <link rel="stylesheet" href="{{ asset('css/settings.css') }}">
  <title>{{ config('app.name')}}</title>
</head>
<body class="bg-white">
  @include('loader.loader')

  <div id="bodyContent">
    <nav class="hidden lg:block" id="user-nav">
      <ul class="user-nav-list">
        <li id="hambuger" class="text-xl pr-2">
          <div id="userNav">
            <div id="icon_container">
              <div id="mobile_menu">
                <div class="mobile_icon"></div>
                <div class="mobile_icon"></div>
                <div class="mobile_icon"></div>
              </div>
            </div>
          </div>
        </li>
        <li class="nav-form">
          <form action="{{ route('dashboard.user.search') }}"  class="inline w-full"  id="search-holder" method="GET">
            <input type="search" name="search_query" id="search" placeholder="search anything..." 
              class="w-full p-2">
          </form>
        </li>  
        <li class="user-profile-img  flex items-center">
          @if(!auth()->user()->avatar)
            <div class="pr-2"><img src="{{ asset('images/avatar.jpeg') }}" alt=""></div>
          @else
            @if (!auth()->user()->provider_id)
              <div class="pr-2"><img src="{{ auth()->user()->avatar }}" alt=""></div>
            @else 
              <div class="pr-2"><img src="{{ auth()->user()->avatar }}" alt=""></div>
            @endif
          @endif
        </li>
      </ul>
    </nav>

    <nav class="flex justify-between items-center p-2 pl-3 pr-3 block lg:hidden" id="user-sm-nav">
      <div id="toggle-user-hambuger">
        <div id="openUserNav">
          <div id="icon_container">
            <div id="mobile_menu">
              <div class="mobile_icon"></div>
              <div class="mobile_icon"></div>
              <div class="mobile_icon"></div>
            </div>
          </div>
        </div>
      </div>
      <form action="{{ route('dashboard.user.search') }}"  class="inline w-full ml-3 mr-3" method="GET">
        <input type="search" name="search_query" id="search" placeholder="search anything..." 
          class="w-full p-1">
      </form> 
      <div class="user-profile-img  flex items-center">
        @if(!auth()->user()->avatar)
          <div class="pr-2"><img src="{{ asset('images/avatar.jpeg') }}" alt=""></div>
        @else
          <div class="pr-2"><img src="{{ auth()->user()->avatar }}" alt=""></div>
        @endif
      </div>
    </nav>

    <div id="userMobileSideNav">
      <ul class="inline"> 
        <li><a href="{{ route('dashboard.users.index') }}" class="p-3">Home</a></li>
        <li><a href="{{ route('dashboard.users.discovers') }}" class="p-3">Discover</a></li>
        <li><a href="{{ route('dashboard.page.user.course') }}" class="p-3">Enrolled Courses</a></li>
        <li><a href="{{ route('dashboard.users.settings') }}" class="p-3">Settings</a></li>
        <li><a href="{{ route('dashboard.users.account') }}" class="p-3">Account</a></li>
        <li class="mobileLogotBtn">
         <form action="{{ route('logout') }}" method="POST" class="pl-2">
           @csrf
           <button type="submit" class="block p-2 pl-2">Logout</button>
         </form>
        </li>
        
        </li>
      </ul>
    </div>

    <aside class="hidden lg:block" id="asideNav"> 
      <h1 class="brand-logo pt-4 pb-4 p-4" id="user-brand-logo"><a href="/">DRIGGEN-LEARN</a></h1>
      <div class="pt-5 pb-5" id="path-holder">
        <ul  class="pt-5 pb-5" id="test">
          <li class="mt-2 mb-2 leading-10"><a href="{{ route('dashboard.users.index') }}" class="block 
            p-0 pl-2">Home</a></li>
          <li class="mt-2 mb-2 leading-10"><a href="{{ route('dashboard.users.discovers') }}" class="block
            p-0 pl-2">Discover</a></li>
          <li class="mt-2 mb-2 leading-10"><a href="{{ route('dashboard.page.user.course') }}" class="block 
            p-0 pl-2">Enrolled Courses</a></li>
          <li class="mt-2 mb-2 leading-10"><a href="{{ route('dashboard.users.settings') }}" class="block 
            p-0 pl-2">Settings</a></li>
        </ul>

        <ul class="account">
          <li class="mt-2 mb-2 leading-10"><a href="{{ route('dashboard.users.account') }}" class="block 
            p-0 pl-2">Account</a></li>
          <li class="pt-2 leading-5">
            <form action="{{ route('logout') }}" method="POST">
              @csrf
              <button type="submit" class="block p-2 pl-2">Logout</button>
            </form>
          </li> 
        </ul>
      </div>
    </aside>
    

    <main id="user-main-body">
      @yield('content')
    </main> 
  </div> 

  <script src="{{ asset('js/timeOut.js') }}"></script>
  <script src="{{ asset('js/mobileNav/handleUserNav.js') }}"></script>
  <script src="{{ asset('js/loader.js') }}"></script>
  <script src="{{ asset('js/nav/userNav.js') }}"></script>
  
  <script src="{{ asset('js/handleDeleteModal.js') }}"></script>

</body>
</html>