<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main">
  <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0" href="{{ route('web.home') }}" target="_blank">
      <img src="{{ asset('assets/img/logo-ct-dark.png') }}" class="navbar-brand-img h-100" alt="main_logo">
      <span class="ms-1 font-weight-bold">ReachMe</span>
    </a>
  </div>

  <hr class="horizontal dark mt-0">

  <div class="collapse navbar-collapse  w-auto h-auto" id="sidenav-collapse-main">
    <ul class="navbar-nav">

      <x-nav-simple-menu-item icon="fas fa-heart" label="Home" :url="route('web.home')" />
      <x-nav-simple-menu-item icon="fa-solid fa-comment-dots" label="Questions" :url="route('web.home')" />
      <x-nav-simple-menu-item icon="fa-solid fa-comment-dots" label="Profile" :url="route('web.profile.create')" />
      <x-nav-simple-menu-item icon="fa-solid fa-arrow-right-from-bracket" label="Sign Out" :url="route('web.auth.logout')" />
    </ul>
  </div>
</aside>
