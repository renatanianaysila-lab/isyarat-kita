<!-- SIDEBAR GURU -->
<aside class="sidebar">
  <div class="brand">
    <img class="logo-img" src="{{ asset('img/HANYA LOGO - Salin.png') }}" alt="Logo">
    <div class="brand-text">
      <div class="brand-name">IsyaratKita</div>
      <div class="brand-sub">Dashboard Guru</div>
    </div>
  </div>

  <nav class="menu">
    <a class="menu-item {{ $menu == 'dashboard' ? 'active' : '' }}" href="{{ url('/dashboard-guru?menu=dashboard') }}" data-menu="dashboard">
      <img class="menu-icon" src="{{ asset('img/dashboard-square-01.png') }}" alt="">
      <span>Dashboard</span>
    </a>

    <a class="menu-item {{ $menu == 'paket' ? 'active' : '' }}" href="{{ url('/dashboard-guru?menu=paket') }}" data-menu="paket">
      <img class="menu-icon" src="{{ asset('img/katalog.png') }}" alt="">
      <span>Kelola Paket</span>
    </a>

    <a class="menu-item {{ $menu == 'video' ? 'active' : '' }}" href="{{ url('/dashboard-guru?menu=video') }}" data-menu="video">
      <img class="menu-icon" src="{{ asset('img/materi.png') }}" alt="">
      <span>Kelola Video</span>
    </a>

    <a class="menu-item {{ $menu == 'kuis' ? 'active' : '' }}" href="{{ url('/dashboard-guru?menu=kuis') }}" data-menu="kuis">
      <img class="menu-icon" src="{{ asset('img/kuis.png') }}" alt="">
      <span>Kelola Kuis</span>
    </a>

    <a class="menu-item {{ $menu == 'monitoring' ? 'active' : '' }}" href="{{ url('/dashboard-guru?menu=monitoring') }}" data-menu="monitoring">
      <img class="menu-icon" src="{{ asset('img/user.png') }}" alt="">
      <span>Monitoring Murid</span>
    </a>

    <a class="menu-item {{ $menu == 'feedback' ? 'active' : '' }}" href="{{ url('/dashboard-guru?menu=feedback') }}" data-menu="feedback">
      <img class="menu-icon" src="{{ asset('img/feedback.png') }}" alt="">
      <span>Feedback & Rating</span>
    </a>

    <a class="menu-item {{ $menu == 'transaksi' ? 'active' : '' }}" href="{{ url('/dashboard-guru?menu=transaksi') }}" data-menu="transaksi">
      <img class="menu-icon" src="{{ asset('img/transaction-history.png') }}" alt="">
      <span>Transaksi</span>
    </a>

    <a class="menu-item {{ $menu == 'profil' ? 'active' : '' }}" href="{{ url('/dashboard-guru?menu=profil') }}" data-menu="profil">
      <img class="menu-icon" src="{{ asset('img/user.png') }}" alt="">
      <span>Profil Guru</span>
    </a>

    <a class="menu-item danger" href="{{ url('/logout') }}" data-menu="logout">
      <img class="menu-icon" src="{{ asset('img/logout-04.png') }}" alt="">
      <span>Logout</span>
    </a>
  </nav>
</aside>