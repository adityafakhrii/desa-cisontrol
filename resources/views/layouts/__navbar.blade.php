<!-- partial:partials/_navbar.html -->
<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-between">
        <a class="navbar-brand brand-logo" href="/"><img src="{{asset('../../images/logo.svg')}}" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="/"><img src="{{asset('../../images/logo-mini.svg')}}" alt="logo"/></a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-between">
      <div class="d-none d-lg-flex">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
      <ul class="navbar-nav navbar-nav-right">
        <li class="nav-item nav-profile">
          <div class="nav-link">
            <span>Hi,<span class="nav-profile-name">{{ Auth::user()->name }}!</span></span>
            <span class="user-icon"><span class="mdi mdi-account"></span></span>
            </div>
        </li>
      </ul>
      <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
        <span class="mdi mdi-menu"></span>
      </button>
    </div>
  </nav>
  <!-- partial -->
