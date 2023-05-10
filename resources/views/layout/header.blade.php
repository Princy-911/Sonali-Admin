<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
  <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
    <a class="navbar-brand brand-logo" href="{{ url('/') }}">
      <img src="{{ url('assets/images/logo.svg') }}" alt="logo" /> </a>
    <a class="navbar-brand brand-logo-mini" href="{{ url('/') }}">
      <img src="{{ url('assets/images/logo-mini.svg') }}" alt="logo" /> </a>
  </div>
  <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
      <span class="mdi mdi-menu"></span>
    </button>
   
    <ul class="navbar-nav navbar-nav-right">
      <li class="nav-item dropdown d-none d-xl-inline-block">
        <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
          <span class="profile-text d-none d-md-inline-flex">{{ $user->name }}</span>
          @if($user->photo)
          <img src="{{ $user->photo }}" alt="profile image" class="img-xs rounded-circle">
          @else
          <img src="https://sonaliapp.maxxmannsupport.com/storage/profile/1682662784.jpg" alt="profile image">
          @endif
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
          <a href="{{ route('change-password') }}" class="dropdown-item"> Change Password </a>
          <a href="{{ route('edit-profile') }}" class="dropdown-item"> Edit Profile </a>
          <a href="{{ route('logout') }}" class="dropdown-item"> Sign Out </a>
        </div>
      </li>
    </ul>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
      <span class="mdi mdi-menu icon-menu"></span>
    </button>
  </div>
</nav>