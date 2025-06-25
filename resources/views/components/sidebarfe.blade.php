<div class="main-sidebar sidebar-style-2 bg-white shadow">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand text-center py-3">
            <a href="{{ url('dashboard') }}" class="fw-bold text-success" style="font-size: 10px;">
                <i class="fas fa-school me-1"></i> TK Islam Nurul Falah
            </a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm text-center">
            <a href="{{ url('dashboard') }}" class="fw-bold text-success">NF</a>
        </div>

        <ul class="sidebar-menu mt-4">

            <li class="menu-header text-muted">Main Menu</li>

            <li class="{{ Request::is('dashboard') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('dashboard') }}">
                    <i class="fas fa-tachometer-alt me-1"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="{{ Request::is('profil') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('profil') }}">
                    <i class="fas fa-user-graduate me-1"></i>
                    <span>Profil</span>
                </a>
            </li>

            <li class="{{ Request::is('sejarah') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('sejarah') }}">
                    <i class="fas fa-history me-1"></i>
                    <span>Sejarah</span>
                </a>
            </li>

            <li class="{{ Request::is('beritafe') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('beritafe') }}">
                    <i class="fas fa-newspaper me-1"></i>
                    <span>Berita</span>
                </a>
            </li>

            <li class="{{ Request::is('kelebihanfe') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('kelebihanfe') }}">
                    <i class="fas fa-star me-1"></i>
                    <span>Kelebihan</span>
                </a>
            </li>
            <li class="{{ Request::is('kenangfe') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('kenangfe') }}">
                    <i class="fas fa-camera-retro"></i>
                    <span>Raport Kenangan</span>
                </a>
            </li>

            @auth
            <li class="menu-header text-muted">Admin Panel</li>
            {{-- Tambahkan menu admin lainnya di sini --}}
            @endauth

        </ul>
    </aside>
</div>
