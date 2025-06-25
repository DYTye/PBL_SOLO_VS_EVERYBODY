<style>
    .navbar-custom {
        background-color: #0b9748;
        padding: 0.5rem 1rem;
        z-index: 1050;
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
        background-color: #0b9748;
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

    @media (max-width: 991.98px) {
        .navbar .container-fluid {
            flex-direction: row;
        }

        .navbar-brand {
            margin-right: auto;
        }

        .navbar-toggler {
            margin-left: auto;
        }
    }

    #overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        /* warna gelap transparan */
        z-index: 1040;
        /* lebih rendah dari navbar tapi di atas konten */
        display: none;
        /* default sembunyi */
    }

    .menu-link,
.menu-link:visited,
.menu-link:hover,
.menu-link:active,
.menu-link:focus,
.mobile-menu-link,
.mobile-menu-link:visited,
.mobile-menu-link:hover,
.mobile-menu-link:active,
.mobile-menu-link:focus {
  color: white;
  text-decoration: none;
}

</style>

<div class="fixed-top">

  {{-- NAVBAR --}}
  <nav class="navbar navbar-expand-lg navbar-dark navbar-custom shadow">
    <div class="container-fluid">

      {{-- Brand / Logo --}}
      <a class="navbar-brand text-white d-flex align-items-center" href="{{ url('dashboard') }}">
        <div class="d-flex align-items-center gap-2">
          <img src="{{ asset('img/logo.png') }}" style="height: 50px; width: 50px;" alt="Logo Sekolah">
          <span class="fw-bold text-white mx-2">TK ISLAM NURUL FALAH</span>
      </div>
      
      </a>

      {{-- Toggler --}}
      <button class="navbar-toggler d-block d-lg-none" type="button" data-toggle="collapse"
        data-target="#mobileNavbar" aria-controls="mobileNavbar" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      {{-- Desktop Menu --}}
      <div class="d-none d-lg-flex ml-auto">
        <a href="{{ url('dashboard') }}" class="menu-link"><i class="fas fa-home mr-1"></i> Dashboard</a>
        <a href="{{ url('profil') }}" class="menu-link"><i class="fas fa-user-graduate mr-1"></i> Profil Sekolah</a>
        <a href="{{ url('sejarah') }}" class="menu-link"><i class="fas fa-history mr-1"></i> Sejarah</a>
        <a href="{{ url('beritafe') }}" class="menu-link"><i class="fas fa-newspaper mr-1"></i> Berita</a>
        <a href="{{ url('kelebihanfe') }}" class="menu-link"><i class="fas fa-star mr-1"></i> Kelebihan</a>
        <a href="{{ url('kenangfe') }}" class="menu-link"><i class="fas fa-camera-retro mr-1"></i>Raport Kenangan</a>
      </div>
    </div>

    {{-- Mobile Menu --}}
    <div class="collapse d-lg-none w-100" id="mobileNavbar">
      <ul class="list-unstyled mb-0">
        <li><a href="{{ url('dashboard') }}" class="mobile-menu-link"><i class="fas fa-home mr-2"></i> Dashboard</a></li>
        <li><a href="{{ url('profil') }}" class="mobile-menu-link"><i class="fas fa-user-graduate mr-2"></i> Profil Sekolah</a></li>
        <li><a href="{{ url('sejarah') }}" class="mobile-menu-link"><i class="fas fa-history mr-2"></i> Sejarah</a></li>
        <li><a href="{{ url('beritafe') }}" class="mobile-menu-link"><i class="fas fa-newspaper mr-2"></i> Berita</a></li>
        <li><a href="{{ url('kelebihanfe') }}" class="mobile-menu-link"><i class="fas fa-star mr-2"></i> Kelebihan</a></li>
        <li><a href="{{ url('kenangfe') }}" class="mobile-menu-link"><i class="fas fa-camera-retro mr-2"></i>Raport Kenangan</a></li>
      </ul>
    </div>
  </nav>
</div>

<!-- 🔥 OVERLAY DI SINI -->
<div id="overlay"></div>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const toggler = document.querySelector('.navbar-toggler');
        const overlay = document.getElementById('overlay');
        const collapseMenu = document.getElementById('mobileNavbar');

        toggler.addEventListener('click', function() {
            // Toggle class 'show' di menu collapse
            setTimeout(() => {
                if (collapseMenu.classList.contains('show')) {
                    overlay.style.display = 'block';
                } else {
                    overlay.style.display = 'none';
                }
            }, 300); // tunggu animasi collapse selesai
        });

        // Klik overlay = tutup menu
        overlay.addEventListener('click', function() {
            $('.navbar-collapse').collapse('hide');
            overlay.style.display = 'none';
        });
    });
</script>
