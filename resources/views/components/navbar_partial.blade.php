<style>
    .dropdown-container {
  display: none;
  position: absolute;
  background-color: rgba(11, 151, 72, 0.95);
  border-radius: 0.25rem;
  z-index: 1100;
  min-width: 150px;
}

.dropdown-container.show {
  display: block;
}

@media (max-width: 991.98px) {
  .dropdown-container {
    position: relative;
    z-index: 1100;
  }
}
    .navbar-custom {
        position: relative !important;
        background-color: transparent !important;
        padding: 0.5rem 1rem;
        z-index: 1050;
        right: 0px;
        left: 0px;
        transition: background-color 0.5s ease, box-shadow 0.5s ease;
        overflow: hidden;
    }

    .navbar-custom::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: url('/img/header.jpg');
        background-repeat: repeat-x;
        background-position: center;
        background-size: auto 100%;
        opacity: 0;
        transition: opacity 0.5s ease;
        z-index: -1;
    }

    .navbar-custom.scrolled::before {
        opacity: 1;
    }

    .navbar-custom.scrolled {
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.15);
    }

    .menu-link {
        color: white;
        text-decoration: none;
        font-weight: 500;
        padding: 0.5rem 1rem;
        display: block;
        transition: background-color 0.3s ease;
    }

    .menu-link:hover {
        background-color: rgba(255, 255, 255, 0.1);
    }

    .mobile-menu-link {
        color: white;
        background-color: rgba(11, 151, 72, 0.95);
        text-decoration: none;
        padding: 0.75rem 1.25rem;
        display: block;
        border-bottom: 1px solid rgba(255, 255, 255, 0.15);
    }

    .mobile-menu-link:hover {
        background-color: rgba(255, 255, 255, 0.1);
    }

    .navbar-brand {
        font-weight: bold;
        font-size: 1.1rem;
    }

    .navbar-toggler {
        border: none;
        outline: none;
    }

    .navbar-toggler:focus {
        box-shadow: none;
    }

    #overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 1040;
        display: none;
    }

    /* Custom mobile menu */
    .mobile-menu-container {
        display: none;
        width: 100%;
    }

    .mobile-menu-container.show {
        display: block;
    }
</style>

<div class="fixed-top">
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom shadow" id="navbar">
    <div class="container-fluid">
      <a class="navbar-brand text-white d-flex align-items-center" href="{{ url('dashboard') }}">
        <div class="d-flex align-items-center gap-2">
          <img src="{{ asset('img/logo.png') }}" style="height: 50px; width: 50px;" alt="Logo Sekolah">
          <span class="fw-bold text-white mx-2">NURUL FALAH</span>
        </div>
      </a>

      <button id="navbarToggler" class="navbar-toggler d-block d-lg-none" type="button" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="d-none d-lg-flex ml-auto">
        <a href="{{ url('dashboard') }}" class="menu-link"><i class="fas fa-home mr-1"></i> Dashboard</a>
        <a href="{{ url('profil') }}" class="menu-link"><i class="fas fa-user-graduate mr-1"></i> Profil Sekolah</a>
        <a href="{{ url('sejarah') }}" class="menu-link"><i class="fas fa-history mr-1"></i> Sejarah</a>
        <a href="{{ url('beritafe') }}" class="menu-link"><i class="fas fa-newspaper mr-1"></i> Berita</a>
        <a href="{{ url('kelebihanfe') }}" class="menu-link"><i class="fas fa-star mr-1"></i> Kelebihan</a>
        <a href="{{ url('kenangfe') }}" class="menu-link"><i class="fas fa-camera-retro mr-1"></i> Raport Kenangan</a>
      </div>
    </div>

    <div class="mobile-menu-container d-lg-none" id="mobileNavbar">
      <ul class="list-unstyled mb-0">
        <li><a href="{{ url('dashboard') }}" class="mobile-menu-link"><i class="fas fa-home mr-2"></i> Dashboard</a></li>
        <li><a href="{{ url('profil') }}" class="mobile-menu-link"><i class="fas fa-user-graduate mr-2"></i> Profil Sekolah</a></li>
        <li><a href="{{ url('sejarah') }}" class="mobile-menu-link"><i class="fas fa-history mr-2"></i> Sejarah</a></li>
        <li><a href="{{ url('beritafe') }}" class="mobile-menu-link"><i class="fas fa-newspaper mr-2"></i> Berita</a></li>
        <li><a href="{{ url('kelebihanfe') }}" class="mobile-menu-link"><i class="fas fa-star mr-2"></i> Kelebihan</a></li>
        <li><a href="{{ url('kenangfe') }}" class="mobile-menu-link"><i class="fas fa-camera-retro mr-2"></i> Raport Kenangan</a></li>
      </ul>
    </div>
  </nav>
</div>

<div id="overlay"></div>

<script>
document.addEventListener('DOMContentLoaded', function() {
  const navbar = document.getElementById('navbar');
  const toggler = document.getElementById('navbarToggler');
  const overlay = document.getElementById('overlay');
  const collapseMenu = document.getElementById('mobileNavbar');

  // Scroll effect
  window.addEventListener('scroll', function() {
    if (window.scrollY > 50) {
      navbar.classList.add('scrolled');
    } else {
      navbar.classList.remove('scrolled');
    }
  });

  // Toggler click
  toggler.addEventListener('click', function() {
    collapseMenu.classList.toggle('show');
    overlay.style.display = collapseMenu.classList.contains('show') ? 'block' : 'none';
  });

  // Overlay click
  overlay.addEventListener('click', function() {
    collapseMenu.classList.remove('show');
    overlay.style.display = 'none';
  });
});
</script>
