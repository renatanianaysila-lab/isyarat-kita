<!-- SIDEBAR MURID - Reusable untuk semua halaman -->
<aside class="sidebar">
  <div class="brand">
    <img class="logo-img" src="{{ asset('img/HANYA LOGO - Salin.png') }}" alt="Logo">
    <div class="brand-text">
      <div class="brand-name">IsyaratKita</div>
      <div class="brand-sub">Dashboard Murid</div>
    </div>
  </div>

  <nav class="menu">
    <a class="menu-item {{ request()->get('menu') == 'dashboard' || !request()->get('menu') ? 'active' : '' }}" href="?menu=dashboard">
      <img class="menu-icon" src="{{ asset('img/dashboard-square-01.png') }}" alt="">
      <span>Dashboard</span>
    </a>

    <a class="menu-item {{ request()->get('menu') == 'profil' ? 'active' : '' }}" href="?menu=profil">
      <img class="menu-icon" src="{{ asset('img/user.png') }}" alt="">
      <span>Profil</span>
    </a>

    <a class="menu-item {{ request()->get('menu') == 'materi' ? 'active' : '' }}" href="?menu=materi">
      <img class="menu-icon" src="{{ asset('img/materi.png') }}" alt="">
      <span>Materi Saya</span>
    </a>

    <a class="menu-item {{ request()->get('menu') == 'kuis' ? 'active' : '' }}" href="?menu=kuis">
      <img class="menu-icon" src="{{ asset('img/kuis.png') }}" alt="">
      <span>Kuis</span>
    </a>

    <a class="menu-item {{ request()->get('menu') == 'history' ? 'active' : '' }}" href="?menu=history">
      <img class="menu-icon" src="{{ asset('img/transaction-history.png') }}" alt="">
      <span>History</span>
    </a>

    <a class="menu-item {{ request()->get('menu') == 'feedback' ? 'active' : '' }}" href="?menu=feedback">
      <img class="menu-icon" src="{{ asset('img/feedback.png') }}" alt="">
      <span>Feedback</span>
    </a>

    <a class="menu-item {{ request()->get('menu') == 'katalog' ? 'active' : '' }}" href="?menu=katalog">
      <img class="menu-icon" src="{{ asset('img/katalog.png') }}" alt="">
      <span>Katalog Paket</span>
    </a>

    <a class="menu-item danger" href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
      <img class="menu-icon" src="{{ asset('img/logout-04.png') }}" alt="">
      <span>Logout</span>
    </a>
  </nav>

  <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
    @csrf
  </form>
</aside>