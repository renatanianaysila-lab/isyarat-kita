@php
    $menu = request('menu', 'dashboard');
@endphp

<!-- SIDEBAR MURID -->
<aside class="sidebar">
  <div class="brand">
    <img class="logo-img" src="{{ asset('img/HANYA LOGO - Salin.png') }}" alt="Logo">
    <div class="brand-text">
      <div class="brand-name">IsyaratKita</div>
      <div class="brand-sub">Dashboard Murid</div>
    </div>
  </div>

  <nav class="menu">
    <a class="menu-item {{ $menu == 'dashboard' ? 'active' : '' }}" href="{{ url('/dashboard-murid?menu=dashboard') }}" data-menu="dashboard">
      <img class="menu-icon" src="{{ asset('img/dashboard-square-01.png') }}" alt="">
      <span>Dashboard</span>
    </a>

    <a class="menu-item {{ $menu == 'profil' ? 'active' : '' }}" href="{{ url('/dashboard-murid?menu=profil') }}" data-menu="profil">
      <img class="menu-icon" src="{{ asset('img/user.png') }}" alt="">
      <span>Profil</span>
    </a>

    <a class="menu-item {{ $menu == 'materi' ? 'active' : '' }}" href="{{ url('/dashboard-murid?menu=materi') }}" data-menu="materi">
      <img class="menu-icon" src="{{ asset('img/materi.png') }}" alt="">
      <span>Materi Saya</span>
    </a>

    <a class="menu-item {{ $menu == 'kuis' ? 'active' : '' }}" href="{{ url('/dashboard-murid?menu=kuis') }}" data-menu="kuis">
      <img class="menu-icon" src="{{ asset('img/kuis.png') }}" alt="">
      <span>Kuis</span>
    </a>

    <a class="menu-item {{ $menu == 'history' ? 'active' : '' }}" href="{{ url('/dashboard-murid?menu=history') }}" data-menu="history">
      <img class="menu-icon" src="{{ asset('img/transaction-history.png') }}" alt="">
      <span>History</span>
    </a>

    <a class="menu-item {{ $menu == 'feedback' ? 'active' : '' }}" href="{{ url('/dashboard-murid?menu=feedback') }}" data-menu="feedback">
      <img class="menu-icon" src="{{ asset('img/feedback.png') }}" alt="">
      <span>Feedback</span>
    </a>

    <a class="menu-item {{ $menu == 'katalog' ? 'active' : '' }}" href="{{ url('/dashboard-murid?menu=katalog') }}" data-menu="katalog">
      <img class="menu-icon" src="{{ asset('img/katalog.png') }}" alt="">
      <span>Katalog Paket</span>
    </a>

    <!-- LOGOUT - PAKAI GET (LANGSUNG) -->
    <a class="menu-item danger" href="{{ url('/logout') }}">
      <img class="menu-icon" src="{{ asset('img/logout-04.png') }}" alt="">
      <span>Logout</span>
    </a>
  </nav>
</aside>