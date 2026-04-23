<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>IsyaratKita - Dashboard Murid</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="{{ asset('css/layout/sidebar-murid.css') }}">
  <link rel="stylesheet" href="{{ asset('css/dashboard/dashboard-murid.css') }}">
  <link rel="stylesheet" href="{{ asset('css/dashboard/dashboard-content-murid.css') }}">
  <link rel="stylesheet" href="{{ asset('css/sections/profil-content.css') }}">
  <link rel="stylesheet" href="{{ asset('css/sections/materi-content.css') }}">
  <link rel="stylesheet" href="{{ asset('css/sections/kuis-content.css') }}">
  <link rel="stylesheet" href="{{ asset('css/sections/history-content.css') }}">
  <link rel="stylesheet" href="{{ asset('css/sections/feedback-content.css') }}">
  <link rel="stylesheet" href="{{ asset('css/sections/katalog.css') }}">
</head>

<body>
  <div class="app">

    @include('layouts.sidebar-murid')

    <div class="content-wrapper">
      @php $activeMenu = request()->get('menu', 'dashboard'); @endphp

      <main class="main">
        <header class="topbar">
          <div class="topbar-left">
            <div class="page-heading">
              @if($activeMenu == 'dashboard')
                <h2>Dashboard Murid</h2>
                <p>Pantau progres belajar dan lanjutkan materi kamu</p>
              @elseif($activeMenu == 'profil')
                <h2>Profil Saya</h2>
                <p>Kelola data diri dan foto profil</p>
              @elseif($activeMenu == 'materi')
                <h2>Materi Saya</h2>
                <p>Kelola materi belajar bahasa isyarat</p>
              @elseif($activeMenu == 'kuis')
                <h2>Kuis</h2>
                <p>Uji pemahaman bahasa isyaratmu</p>
              @elseif($activeMenu == 'history')
                <h2>Riwayat Belajar</h2>
                <p>Lihat aktivitas dan progres yang sudah dicapai</p>
              @elseif($activeMenu == 'feedback')
                <h2>Feedback</h2>
                <p>Berikan penilaian terhadap materi yang telah Anda pelajari</p>
              @elseif($activeMenu == 'katalog')
                <h2>Katalog Paket</h2>
                <p>Pilih paket belajar yang sesuai kebutuhanmu</p>
              @endif
            </div>
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

        @if($activeMenu == 'dashboard')
          @include('dashboard.dashboard-content-murid')
        @elseif($activeMenu == 'katalog')
          @include('sections.katalog')
        @elseif($activeMenu == 'materi')
          @include('sections.materi-content')
        @elseif($activeMenu == 'kuis')
          @include('sections.kuis-content')
        @elseif($activeMenu == 'history')
          @include('sections.history-content')
        @elseif($activeMenu == 'feedback')
          @include('sections.feedback-content')
        @elseif($activeMenu == 'profil')
          @include('sections.profil-content')
        @endif

      </main>
    </div>
  </div>

  <script>
    function previewImage(event) {
      const input = event.target;
      const preview = document.getElementById('previewFoto');
      if (input.files && input.files[0]) {
        preview.src = URL.createObjectURL(input.files[0]);
      }
    }
  </script>
</body>
</html>