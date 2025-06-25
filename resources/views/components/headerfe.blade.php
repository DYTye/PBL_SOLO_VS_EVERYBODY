<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar fixed-top">

    <!-- Sidebar Toggle Button on the Left -->
    <a href="#" data-toggle="sidebar" class="nav-link nav-link-lg">
        <i class="fas fa-bars"></i>
    </a>

    <div class="d-flex flex-column justify-content-center mt-auto">
        <img src="{{ asset('img/logo.png') }}" alt="Logo" style="height: 50px;">



    </div>

    <!-- Right Side Navbar Items -->
    {{-- <ul class="navbar-nav ml-auto">
        <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                <img alt="image" src="{{ asset('img/avatar/avatar-1.png') }}" class="rounded-circle mr-1">
                <div class="d-sm-none d-lg-inline-block">
                    Hai,
                    @auth
                        {{ substr(auth()->user()->name, 0, 10) }}
                    @else
                        Pengunjung
                    @endauth
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                @auth
                    <div class="dropdown-title">
                        Selamat Datang, {{ substr(auth()->user()->name, 0, 10) }}
                    </div>
                    <a class="dropdown-item has-icon edit-profile" href="{{ route('profile.edit') }}">
                        <i class="fa fa-user"></i> Edit Profile
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="{{ route('logout') }}" class="dropdown-item has-icon text-danger"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                @else
                    <a class="dropdown-item has-icon" href="{{ route('login') }}">
                        <i class="fas fa-sign-in-alt"></i> Login
                    </a>
                @endauth
            </div>
        </li>
    </ul> --}}
</nav>
