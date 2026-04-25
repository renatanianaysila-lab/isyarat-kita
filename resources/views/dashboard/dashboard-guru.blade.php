<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>IsyaratKita - Dashboard Guru</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- CSS -->
  <link rel="stylesheet" href="{{ asset('css/layout/sidebar-guru.css') }}">
  <link rel="stylesheet" href="{{ asset('css/dashboard/dashboard-guru.css') }}">
  <link rel="stylesheet" href="{{ asset('css/sections/kelola-paket-guru.css') }}">
  <link rel="stylesheet" href="{{ asset('css/sections/kelola-video-guru.css') }}">
  <link rel="stylesheet" href="{{ asset('css/sections/kelola-kuis-guru.css') }}">
  <link rel="stylesheet" href="{{ asset('css/sections/monitoring-murid-guru.css') }}">
</head>

<body>
  @php
    $menu = request('menu', 'dashboard');
  @endphp

  <div class="app">

    <!-- SIDEBAR -->
    @include('layouts.sidebar-guru')

    <!-- MAIN CONTENT -->
    <main class="main">

      <!-- TOPBAR -->
      <header class="topbar">
        <div class="search">
          <input type="text" placeholder="Cari materi, murid, atau kuis..." />
          <img class="search-img" src="{{ asset('img/search-visual.png') }}" alt="Search">
        </div>

        <div class="top-actions">
          <button class="icon-btn" title="Notifikasi">
            <img class="top-icon" src="{{ asset('img/notification-01.png') }}" alt="">
          </button>
          <button class="icon-btn" title="Bantuan">
            <img class="top-icon" src="{{ asset('img/help-circle.png') }}" alt="">
          </button>
          <div class="profile-mini">
            <img class="avatar-img" src="{{ asset('img/user.png') }}" alt="">
          </div>
        </div>
      </header>

      <!-- CONTENT -->
      @if($menu == 'paket')
        @include('sections.kelola-paket-guru')
      @elseif($menu == 'video')
        @include('sections.kelola-video-guru')
      @elseif($menu == 'kuis')
        @include('sections.kelola-kuis-guru')
      @elseif($menu == 'monitoring')
        @include('sections.monitoring-murid-guru')
      @else
        @include('dashboard.dashboard-content-guru')
      @endif

    </main>
  </div>

  <!-- JS -->
  <script src="{{ asset('js/layout/sidebar-guru.js') }}"></script>
  <script src="{{ asset('js/dashboard/dashboard-guru.js') }}"></script>
</body>
</html>