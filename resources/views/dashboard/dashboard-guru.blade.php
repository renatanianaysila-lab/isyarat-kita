<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>IsyaratKita - Dashboard Guru</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="/css/layout/sidebar-guru.css">
  <link rel="stylesheet" href="/css/dashboard/dashboard-guru.css">
  <link rel="stylesheet" href="/css/sections/kelola-paket-guru.css">
  <link rel="stylesheet" href="/css/sections/kelola-video-guru.css">
  <link rel="stylesheet" href="/css/sections/kelola-kuis-guru.css">
  <link rel="stylesheet" href="/css/sections/monitoring-murid-guru.css">
  <link rel="stylesheet" href="/css/sections/transaksi-guru.css">
  <link rel="stylesheet" href="/css/sections/feedback-rating-guru.css">
  <link rel="stylesheet" href="/css/sections/guru-profile.css">
  <link rel="stylesheet" href="/css/sections/edit-profile-guru.css">

  <style>
    body, main.main {
        background-color: #f4f7fc !important;
        min-height: 100vh;
    }
  </style>
</head>

<body>
  @php
    $menu = request('menu', 'dashboard');
  @endphp

  <div class="app">

    @include('layouts.sidebar-guru')

    <main class="main">

      <header class="topbar">
        <div class="search">
          <input type="text" placeholder="Cari materi, murid, atau kuis..." />
          <img class="search-img" src="/img/img/search-visual.png" alt="Search">
        </div>

        <div class="top-actions">
          <button class="icon-btn" title="Notifikasi">
            <img class="top-icon" src="/img/img/notification-01.png" alt="">
          </button>
          <button class="icon-btn" title="Bantuan">
            <img class="top-icon" src="/img/img/help-circle.png" alt="">
          </button>
          <div class="profile-mini">
            <img class="avatar-img" src="/img/img/user.png" alt="">
          </div>
        </div>
      </header>

      @if($menu == 'paket')
        @include('sections.kelola-paket-guru')
      @elseif($menu == 'video')
        @include('sections.kelola-video-guru')
      @elseif($menu == 'kuis')
        @include('sections.kelola-kuis-guru')
      @elseif($menu == 'monitoring')
        @include('sections.monitoring-murid-guru')
      @elseif($menu == 'transaksi')
        @include('sections.transaksi-guru')
      @elseif($menu == 'feedback')
        @include('sections.feedback-rating-guru')
      @elseif($menu == 'profile')
        @include('sections.guru-profile')
      @elseif($menu == 'edit-profile')
        @include('sections.edit-profile-guru')
      @else
        @include('dashboard.dashboard-content-guru')
      @endif

    </main>
  </div>

  @if($menu == 'paket')
    <script src="/js/sections/kelola-paket-guru.js"></script>
  @elseif($menu == 'video')
    <script src="/js/sections/kelola-video-guru.js"></script>
  @elseif($menu == 'kuis')
    <script src="/js/sections/kelola-kuis-guru.js"></script>
  @elseif($menu == 'monitoring')
    <script src="/js/sections/monitoring-murid-guru.js"></script>
  @elseif($menu == 'transaksi')
    <script src="/js/sections/transaksi-guru.js"></script>
  @elseif($menu == 'feedback')
    <script src="/js/sections/feedback-rating-guru.js"></script>
  @elseif($menu == 'profile')
    <script src="/js/sections/guru-profile.js"></script>
  @elseif($menu == 'edit-profile')
    <script src="/js/sections/edit-profile-guru.js"></script>
  @endif

  <script src="/js/layout/sidebar-guru.js"></script>

</body>
</html>