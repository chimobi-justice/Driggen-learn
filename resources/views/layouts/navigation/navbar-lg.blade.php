<nav class="flex justify-between flex-rows p-4 ml-2 mr-2 justify-center">
  <h1 class="brand-logo"><a href="/">DRIGGEN-LEARN</a></h1>
  <ul class="inline-flex">
    <li><a href="/" class="p-3">Home</a></li>
    <li><a href=" {{ route('about-us') }}" class="p-3">About Us</a></li>
    <li><a href=" {{ route('courses') }}" class="p-3">Courses</a></li>
    <li><a href="our-team" class="p-3">Team</a></li>
    <li><a href=" {{ route('pricing') }}" class="p-3">Pricing</a></li>
    <li><a href="contact-us" class="p-3">Contact Us</a></li>
    <li><a href="{{ route('login') }}" class="p-2 mr-3 rounded-sm text-white 
      text-sm login-button">Sign In</a>
    </li>
    <li><a href="{{ route('register') }}" class="p-2 rounded-sm text-white 
      text-sm Button">Sign Up</a>
    </li>
  </ul>
</nav>