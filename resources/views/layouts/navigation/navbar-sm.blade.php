<nav class="flex justify-between items-center p-2">
  <h1 class="brand-logo"><a href="/">DRIGGEN-LEARN</a></h1>
  <div id="toggle-hambuger">
    <div id="openNav">
      <div id="icon_container">
        <div id="mobile_menu">
          <div class="mobile_icon"></div>
          <div class="mobile_icon"></div>
          <div class="mobile_icon"></div>
        </div>
      </div>
    </div>
  </div>
</nav>

<div id="mobileSideNav">
  <ul class="inline">
    <li><a href="/" class="p-3">Home</a></li>
    <li><a href=" {{ route('about-us') }}" class="p-3">About Us</a></li>
    <li><a href=" {{ route('courses') }}" class="p-3">Courses</a></li>
    <li><a href="our-team" class="p-3">Team</a></li>
    <li><a href=" {{ route('pricing') }}" class="p-3">Pricing</a></li>
    <li><a href="contact-us" class="p-3">Contact Us</a></li>
    <li><a href="{{ route('register') }}" class="p-2 rounded-sm text-white 
      text-sm text-center Button block">Sign Up</a>
    </li>
  </ul>
</div>