<style>
.p-image {
    width: 100%!important;
    height: 100% !important;
}
</style>
<nav class="sidebar sidebar-offcanvas dynamic-active-class-disabled" id="sidebar">
  <ul class="nav">
    
    <li class="nav-item nav-profile not-navigation-link">
      <div class="nav-link">
        <div class="user-wrapper mb-1 align-items-center">
          <div class="profile-image">
            @if($user->photo)
            <img src="{{ $user->photo }}" alt="profile image" class="img-md rounded-circle">
            @else
            <img src="https://sonaliapp.maxxmannsupport.com/storage/profile/1682662784.jpg" alt="profile image">
            @endif
          </div>
          <div class="text-wrapper">
            <p class="profile-name">{{ $user->name }}</p>
          </div>
        </div>
      </div>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{ url('/dashboard') }}">
        <i class="menu-icon mdi mdi-television"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    
    <li class="nav-item">
      <a class="nav-link" href="{{ url('/icons/material') }}">
        <i class="menu-icon mdi mdi-emoticon"></i>
        <span class="menu-title">Icons</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#user-pages" aria-controls="user-pages">
        <i class="menu-icon mdi mdi-lock-outline"></i>
        <span class="menu-title">User Pages</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="user-pages">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/user-pages/login') }}">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/user-pages/register') }}">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/user-pages/lock-screen') }}">Lock Screen</a>
          </li>
        </ul>
      </div>
    </li>

  </ul>
</nav>