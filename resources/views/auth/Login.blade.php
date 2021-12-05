<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="justice chimobi">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Form.css') }}">
    
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon-16x16.png') }}">
    <title>{{ config('app.name')}} | Login</title>
  </head>
  <body class="bg-white">
    <section id="regiter-section" class="">
      <h1 class="heading-color pt-3 pb-1 text-3xl text-center font-bold text-gray-600">
        <a href="/" title="home">Driggen Learn</a>
      </h1>
    
      <div id="form-wrapper" class="w-11/12 sm:w-1/3 md:w-11/12 lg:w-1/3 border-2 rounded-lg m-auto">
          <form action="{{ route('login') }}" method="POST" class="p-4">
            @csrf

            @if(session('status'))
              <div class="bg-red-600 text-center text-sm text-white p-3 rounded-lg res">
                {{ session('status') }}
              </div>
            @endif

            <div class="">
              <h1 class="mb-6 text-2xl text-center font-bold text-gray-600">Sign In</h1>
          
              <div class="flex flex-col sm:flex-row md:flex-col lg:flex-row justify-between items-center">
                <div class="w-full sm:w-1/5 md:w-full mb-2 md:mb-5 lg:mb-0 mr-0 sm:mr-2">
                  <a href="{{ route('login.google') }}" class="p-2 pr-3 pl-3 rounded-lg text-gray-600 text-xs 
                    border-2 border-gray-600 hover:bg-gray-100 block text-center text-lg sm:text-sm">Signin with Google</a>
                </div>
              </div>
            </div>
            
            <p class="text-center mt-5 mb-5 text-xl font-semibold text-gray-500">- OR -</p>

            <div class="form-control pb-4">
              <label for="email" class="sr-only">E-mail</label>
              <input type="email" name="email" placeholder="E-mail" class="w-full border-2 
                bg-gray-100 rounded-lg p-2 md:p-4 lg:p-2 @error('email') border-red-500 
                @enderror" value="{{ old('email') }}" id="email"
              >

              @error('email')
                <div class="text-red-500 text-sm" id="emailFeedBackErr">
                  {{ $message }}
                </div>
              @enderror
            </div>

            <div class="form-control pb-4">
              <label for="password" class="sr-only">Password</label>
              <input type="password" name="password" placeholder="Choose A Password" 
                class="w-full border-2 bg-gray-100 rounded-lg p-2 md:p-4 lg:p-2 
                @error('password') border-red-500 @enderror" id="password"
              >

              @error('password')
                <div class="text-red-500 text-sm" id="passwordFeedBackErr">
                  {{ $message }}
                </div>
              @enderror
            </div>

            <div class="flex items-center pb-2">
              <input type="checkbox" name="remember" id="remember">
              <label for="remember" class="pl-1">Remember me</label>
            </div>

            <div class="pb-3">
              <button class="px-2 py-2 md:px-4 md:py-4 lg:px-2 lg:py-2  
              text-center rounded-lg text-white text-sm font-medium 
              Button w-full" id="login"
              >Login
            </button>
            </div>

            <p class="mt-1 mb-1 text-sm text-center font-semibold text-gray-500">
              Don't have an account?
              <a href="{{ route('register') }}" class="hover:underline">
                Sign Up
              </a>
            </p>
          </form>
        </div>
      </div> 
    </section>

    <script src="{{ asset('js/login.js') }}"></script>
    <script src="{{ asset('js/timeOut.js') }}"></script>
    
  </body>
</html>