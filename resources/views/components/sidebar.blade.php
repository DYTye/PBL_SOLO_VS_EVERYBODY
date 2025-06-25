@auth
<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ url('home') }}">Tk Islam Nurul Falah</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ url('home') }}">NF</a>
        </div>

        <ul class="sidebar-menu">

            <li class="menu-header">Dashboard</li>
            <li class="{{ Request::is('home') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('home') }}">
                    <i class="fas fa-tachometer-alt"></i><span>Dashboard</span>
                </a>
            </li>

            @if (Auth::user()->role == 'superadmin')
                <li class="menu-header">Hak Akses</li>
                <li class="{{ Request::is('hakakses') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('hakakses') }}">
                        <i class="fas fa-user-shield"></i> <span>Hak Akses</span>
                    </a>
                </li>
            @endif

            <li class="menu-header">Profile</li>
            <li class="{{ Request::is('profile/edit') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('profile/edit') }}">
                    <i class="far fa-user"></i> <span>Profile</span>
                </a>
            </li>
            <li class="{{ Request::is('profile/change-password') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('profile/change-password') }}">
                    <i class="fas fa-key"></i> <span>Ganti Password</span>
                </a>
            </li>

            <li class="menu-header">Menu</li>
            <li class="{{ Request::is('guru') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('guru') }}">
                    <i class="fas fa-chalkboard-teacher"></i> <span>Guru</span>
                </a>
            </li>
            <li class="{{ Request::is('berita') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('berita') }}">
                    <i class="fas fa-newspaper"></i> <span>Berita</span>
                </a>
            </li>
            <li class="{{ Request::is('biodata') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('biodata') }}">
                    <i class="fas fa-school"></i> <span>Biodata Sekolah</span>
                </a>
            </li>
            <li class="{{ Request::is('visi') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('visi') }}">
                    <i class="fas fa-bullseye"></i> <span>Visi Misi</span>
                </a>
            </li>
            <li class="{{ Request::is('caraosel') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('caraosel') }}">
                    <i class="fas fa-sliders-h"></i> <span>Caraosel</span>
                </a>
            </li>
            <li class="{{ Request::is('sambutan') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('sambutan') }}">
                    <i class="fas fa-comment-dots"></i> <span>Sambutan</span>
                </a>
            </li>
            <li class="{{ Request::is('kelebihan') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('kelebihan') }}">
                    <i class="fas fa-star"></i> <span>Kelebihan</span>
                </a>
            </li>
            <li class="{{ Request::is('info') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('info') }}">
                    <i class="fas fa-graduation-cap"></i> <span>Info Akademik</span>
                </a>
            </li>
            <li class="{{ Request::is('tahunajar') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('tahunajar') }}">
                    <i class="fas fa-calendar-alt"></i> <span>Tahun Ajar</span>
                </a>
            </li>
            <li class="{{ Request::is('kenang*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('kenang') }}">
                    <i class="fas fa-camera-retro"></i> <span>Raport Kenangan</span>
                </a>
            </li>
            
            

        </ul>
    </aside>
</div>
@endauth
