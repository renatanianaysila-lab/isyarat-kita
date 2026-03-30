<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>IsyaratKita - Dashboard Murid</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="{{ asset('css/dashboard-murid.css') }}">
</head>

<body>
  <div class="app">

    <!-- SIDEBAR -->
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
          Dashboard
        </a>

        <a class="menu-item {{ request()->get('menu') == 'profil' ? 'active' : '' }}" href="?menu=profil">
          <img class="menu-icon" src="{{ asset('img/user.png') }}" alt="">
          Profil
        </a>

        <a class="menu-item {{ request()->get('menu') == 'materi' ? 'active' : '' }}" href="?menu=materi">
          <img class="menu-icon" src="{{ asset('img/materi.png') }}" alt="">
          Materi Saya
        </a>

        <a class="menu-item {{ request()->get('menu') == 'kuis' ? 'active' : '' }}" href="?menu=kuis">
          <img class="menu-icon" src="{{ asset('img/kuis.png') }}" alt="">
          Kuis
        </a>

        <a class="menu-item {{ request()->get('menu') == 'history' ? 'active' : '' }}" href="?menu=history">
          <img class="menu-icon" src="{{ asset('img/transaction-history.png') }}" alt="">
          History
        </a>

        <a class="menu-item {{ request()->get('menu') == 'feedback' ? 'active' : '' }}" href="?menu=feedback">
          <img class="menu-icon" src="{{ asset('img/feedback.png') }}" alt="">
          Feedback
        </a>

        <a class="menu-item {{ request()->get('menu') == 'katalog' ? 'active' : '' }}" href="?menu=katalog">
          <img class="menu-icon" src="{{ asset('img/katalog.png') }}" alt="">
          Katalog Paket
        </a>

        <a class="menu-item danger" href="/login">
          <img class="menu-icon" src="{{ asset('img/logout-04.png') }}" alt="">
          Logout
        </a>
      </nav>
    </aside>

    <!-- CONTENT -->
      <div class="content-wrapper">
        @php
          $activeMenu = request()->get('menu', 'dashboard');
        @endphp

    <!-- MAIN -->
    <main class="main">

      <header class="topbar">
  <div class="topbar-left">
    @if($activeMenu == 'materi')
      <div class="search">
        <input type="text" placeholder="Search..." />
        <img class="search-img" src="{{ asset('img/search-visual.png') }}" alt="Search">
      </div>
    @else
      <div class="page-heading">
        @if($activeMenu == 'dashboard')
          <h2>Dashboard Murid</h2>
          <p>Pantau progres belajar dan lanjutkan materi kamu</p>
        @elseif($activeMenu == 'profil')
          <h2>Profil Saya</h2>
          <p>Kelola data diri dan foto profil</p>
        @elseif($activeMenu == 'kuis')
          <h2>Kuis</h2>
          <p>Uji pemahaman bahasa isyaratmu</p>
        @elseif($activeMenu == 'history')
          <h2>Riwayat Belajar</h2>
          <p>Lihat aktivitas dan progres yang sudah dicapai</p>
        @elseif($activeMenu == 'feedback')
          <h2>Feedback</h2>
          <p>Sampaikan masukan dan pengalaman belajarmu</p>
        @elseif($activeMenu == 'katalog')
          <h2>Katalog Paket</h2>
          <p>Pilih paket belajar yang sesuai kebutuhanmu</p>
        @endif
      </div>
    @endif
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


        {{-- ===================== DASHBOARD ===================== --}}
        @if($activeMenu == 'dashboard')
          <div class="greet">
            <h1>Halo, <span class="name">[Nama Murid]</span> 👋</h1>
            <p>Yuk, lanjutkan belajar bahasa isyaratmu! ⭐</p>
          </div>

          <div class="grid-2">
            <!-- PROGRESS -->
            <section class="card progress-card-custom">
              <div class="card-head">
                <h2>Progress Belajar Hari Ini</h2>
                <span class="tanggal">{{ now()->format('d F Y') }}</span>
              </div>

              @php
                $videosCompleted = 12;
                $totalVideos = 20;
                $avgScore = 80;
                $watchTime = 525;
                $streak = 7;
                $points = 45;
                $progressPercentage = ($videosCompleted / $totalVideos) * 100;
              @endphp

              <div class="progress-main-row" style="display:flex; gap:25px; margin-bottom:20px;">
                <div class="progress-circle-container" style="flex-shrink:0;">
                  <div class="progress-circle" style="position:relative; width:120px; height:120px;">
                    <svg width="120" height="120" viewBox="0 0 120 120">
                      <circle cx="60" cy="60" r="54" fill="none" stroke="#e9ecef" stroke-width="8"/>
                      <circle cx="60" cy="60" r="54" fill="none" stroke="#4CAF50" stroke-width="8"
                              stroke-linecap="round"
                              stroke-dasharray="339.292"
                              stroke-dashoffset="{{ 339.292 - (339.292 * $progressPercentage / 100) }}"
                              transform="rotate(-90 60 60)"/>
                    </svg>
                    <div class="progress-text" style="position:absolute; top:50%; left:50%; transform:translate(-50%, -50%); text-align:center;">
                      <span class="progress-number" style="display:block; font-size:28px; font-weight:bold; color:#1e293b;">{{ round($progressPercentage) }}%</span>
                      <span class="progress-label" style="font-size:12px; color:#64748b;">Selesai</span>
                    </div>
                  </div>
                </div>

                <div style="flex:1; display:grid; grid-template-columns:repeat(2, 1fr); gap:15px;">
                  <div>
                    <div style="font-size:0.85rem; color:#64748b; margin-bottom:5px;">Video Dipelajari</div>
                    <div style="font-size:1.5rem; font-weight:bold; color:#1e293b;">
                      {{ $videosCompleted }} <small style="font-size:0.9rem; color:#94a3b8;">/ {{ $totalVideos }}</small>
                    </div>
                    <div style="height:6px; background:#e9ecef; border-radius:10px; margin-top:8px; width:100%;">
                      <div style="height:100%; width:{{ $progressPercentage }}%; background:linear-gradient(90deg, #4CAF50, #8BC34A); border-radius:10px;"></div>
                    </div>
                  </div>

                  <div>
                    <div style="font-size:0.85rem; color:#64748b; margin-bottom:5px;">Rata-rata Skor</div>
                    <div style="font-size:1.5rem; font-weight:bold; color:#1e293b;">{{ $avgScore }}</div>
                    <div style="color:#FFC107; font-size:0.9rem; margin-top:5px;">
                      @for($i=1; $i<=5; $i++)
                        @if($i <= round($avgScore/20))
                          ★
                        @else
                          ☆
                        @endif
                      @endfor
                      ({{ number_format($avgScore/20, 1) }})
                    </div>
                  </div>

                  <div>
                    <div style="font-size:0.85rem; color:#64748b; margin-bottom:5px;">Waktu Belajar</div>
                    <div style="font-size:1.5rem; font-weight:bold; color:#1e293b;">{{ floor($watchTime/60) }}j {{ $watchTime%60 }}m</div>
                    <div style="font-size:0.8rem; color:#94a3b8;">Total keseluruhan</div>
                  </div>

                  <div>
                    <div style="font-size:0.85rem; color:#64748b; margin-bottom:5px;">Poin Belajar</div>
                    <div style="font-size:1.5rem; font-weight:bold; color:#1e293b;">{{ $points }}</div>
                    <div style="font-size:0.8rem; color:#94a3b8;">🔥 {{ $streak }} hari streak</div>
                  </div>
                </div>
              </div>

              <div class="graph" style="margin-top:20px; padding-top:20px; border-top:1px solid #e9ecef;">
                <div class="graph-title" style="font-size:0.9rem; color:#64748b; margin-bottom:12px;">Grafik Progress 7 Hari Terakhir</div>
                <div class="graph-box" style="height:100px; background:#f8fafc; border-radius:12px; display:flex; align-items:flex-end; padding:12px 8px; gap:8px;">
                  <div style="height:40px; width:12%; background:#4CAF50; border-radius:6px 6px 0 0;"></div>
                  <div style="height:65px; width:12%; background:#4CAF50; border-radius:6px 6px 0 0;"></div>
                  <div style="height:30px; width:12%; background:#4CAF50; border-radius:6px 6px 0 0;"></div>
                  <div style="height:70px; width:12%; background:#4CAF50; border-radius:6px 6px 0 0;"></div>
                  <div style="height:55px; width:12%; background:#4CAF50; border-radius:6px 6px 0 0;"></div>
                  <div style="height:45px; width:12%; background:#4CAF50; border-radius:6px 6px 0 0;"></div>
                  <div style="height:80px; width:12%; background:#4CAF50; border-radius:6px 6px 0 0;"></div>
                </div>
                <div style="display:flex; justify-content:space-between; margin-top:8px; font-size:0.7rem; color:#94a3b8;">
                  <span>Sen</span><span>Sel</span><span>Rab</span><span>Kam</span><span>Jum</span><span>Sab</span><span>Min</span>
                </div>
              </div>
            </section>

            <!-- PAKET DIMILIKI -->
            <section class="card">
              <div class="card-head">
                <h2>Paket yang Dimiliki</h2>
              </div>

              <div class="paket-grid">
                <div class="paket-card">
                  <div class="paket-title">Paket Dasar</div>
                  <div class="paket-sub">60 hari tersisa</div>
                  <ul class="paket-list">
                    <li>Preview thumbnail</li>
                    <li>judul paket, deskripsi singkat paket</li>
                    <li><b>Aktif</b></li>
                  </ul>
                  <a href="?menu=materi" class="btn">Lanjut Belajar</a>
                </div>

                <div class="paket-card">
                  <div class="paket-title">Paket Premium</div>
                  <div class="paket-sub">240 hari tersisa</div>
                  <ul class="paket-list">
                    <li>Preview thumbnail</li>
                    <li>judul paket, deskripsi singkat paket</li>
                    <li><b>Aktif</b></li>
                  </ul>
                  <a href="?menu=materi" class="btn">Lanjut Belajar</a>
                </div>
              </div>

              <div class="card-foot">
                <a class="link" href="?menu=katalog">Lihat Semua Paket ›</a>
              </div>
            </section>
          </div>

          <div class="section-head">
            <h3>Rekomendasi Materi untuk <span class="name">[Nama Murid]</span>:</h3>
            <a class="link" href="?menu=materi">Lihat Semua Materi</a>
          </div>

          <div class="grid-2 rekomendasi-materi">
            <section class="card materi-card">
              <div class="materi-tag">Materi Terakhir</div>
              <div class="materi-body">
                <div class="thumb"></div>
                <div class="materi-info">
                  <div class="materi-title">Judul atau Deskripsi Materi</div>
                  <div class="materi-time">⏱ 8 Menit</div>
                </div>
              </div>
              <a href="?menu=materi" class="btn full">Lanjutkan Belajar</a>
            </section>

            <section class="card materi-card">
              <div class="materi-tag">Materi Selanjutnya</div>
              <div class="materi-body">
                <div class="thumb"></div>
                <div class="materi-info">
                  <div class="materi-title">Judul atau Deskripsi Materi</div>
                  <div class="materi-time">⏱ 8 Menit</div>
                </div>
              </div>
              <a href="?menu=materi" class="btn full">Lanjutkan Belajar</a>
            </section>
          </div>
        @endif

        {{-- ===================== KATALOG ===================== --}}
        @if($activeMenu == 'katalog')
          <div class="katalog-wrapper">
            <div class="katalog-header">
              <h1 class="katalog-title">Pilih Paket Belajar</h1>
              <p class="katalog-subtitle">Mulai dari dasar hingga komunikasi profesional</p>
            </div>

            <div class="katalog-grid">
              <!-- Paket Dasar -->
              <section class="katalog-card">
                <span class="katalog-badge">Cocok Untuk Pemula</span>

                <div class="katalog-card-head">
                  <h3>Paket Dasar</h3>
                  <h2>Bahasa Isyarat</h2>
                  <p>
                    Abjad, angka, kosakata dasar komunikasi sehari-hari
                    untuk interaksi sosial dan non-formal.
                  </p>
                </div>

                <div class="fitur-grid-dashboard">
                  <div class="fitur-grid-item-dashboard">
                    <div class="icon-circle-dashboard">A-Z</div>
                    <span>Abjad A-Z</span>
                  </div>

                  <div class="fitur-grid-item-dashboard">
                    <div class="icon-circle-dashboard">💬</div>
                    <span>Percakapan Sehari-Hari</span>
                  </div>

                  <div class="fitur-grid-item-dashboard">
                    <div class="icon-circle-dashboard">1-100</div>
                    <span>Angka 1-100</span>
                  </div>

                  <div class="fitur-grid-item-dashboard">
                    <div class="icon-circle-dashboard">📘</div>
                    <span>Kosakata Dasar</span>
                  </div>
                </div>

                <a href="#" class="btn katalog-btn-outline">Pilih Paket Dasar</a>
              </section>

              <!-- Paket Premium -->
              <section class="katalog-card">
                <span class="katalog-badge rekomendasi">Rekomendasi</span>

                <div class="katalog-card-head">
                  <h3>Paket Premium</h3>
                  <h2>Bahasa Isyarat</h2>
                  <p>
                    Komunikasi bahasa isyarat untuk kebutuhan profesional
                    dan pelayanan publik.
                  </p>
                </div>

                <div class="fitur-list-dashboard">
                  <div class="fitur-item-dashboard">
                    <span class="icon-dashboard">✓</span>
                    <span>Akses Video Unlimited</span>
                  </div>

                  <div class="fitur-item-dashboard">
                    <span class="icon-dashboard">✓</span>
                    <span>Materi Lanjutan Eksklusif</span>
                  </div>

                  <div class="fitur-item-dashboard">
                    <span class="icon-dashboard star">★</span>
                    <span>Konsultasi Singkat</span>
                  </div>
                </div>

                <div class="harga-dashboard">
                  Rp. 30.000 <small>/bulan</small>
                </div>

                <a href="{{ url('/pembayaran?paket=premium&harga=30000') }}" class="btn katalog-btn-primary">
                Upgrade Sekarang →</a>
              </section>
            </div>
          </div>
        @endif

        {{-- ===================== MATERI ===================== --}}
        @if($activeMenu == 'materi')
          <div class="materi-saya-container">
            <h1 style="font-size: 2rem; color: #1e293b; margin-bottom: 25px;">Materi Saya</h1>

            <div style="display: flex; gap: 10px; margin-bottom: 25px; flex-wrap: wrap;">
              <button style="padding: 8px 20px; border-radius: 30px; background: #4CAF50; color: white; border: none; font-weight: 500;">Semua</button>
              <button style="padding: 8px 20px; border-radius: 30px; background: white; border: 1px solid #e2e8f0; cursor: pointer;">Paket Dasar</button>
              <button style="padding: 8px 20px; border-radius: 30px; background: white; border: 1px solid #e2e8f0; cursor: pointer;">Paket Premium</button>
              <button style="padding: 8px 20px; border-radius: 30px; background: white; border: 1px solid #e2e8f0; cursor: pointer;">Belum Ditonton</button>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 20px;">
              <div style="background: white; border-radius: 16px; overflow: hidden; box-shadow: 0 4px 12px rgba(0,0,0,0.08);">
                <div style="height: 140px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); position: relative;">
                  <span style="position: absolute; bottom: 10px; right: 10px; background: rgba(0,0,0,0.7); color: white; padding: 4px 8px; border-radius: 4px; font-size: 0.7rem;">10:30</span>
                  <span style="position: absolute; top: 10px; left: 10px; background: #e9ecef; color: #495057; padding: 4px 12px; border-radius: 20px; font-size: 0.7rem;">Dasar</span>
                </div>
                <div style="padding: 15px;">
                  <h3 style="font-size: 1.1rem; font-weight: 600; margin-bottom: 5px;">Abjad A-Z</h3>
                  <p style="font-size: 0.8rem; color: #64748b; margin-bottom: 10px;">Belajar huruf abjad dalam bahasa isyarat</p>
                  <a href="#" style="display: block; text-align: center; padding: 10px; background: #4CAF50; color: white; border-radius: 8px; text-decoration: none; font-weight: 600;">Mulai Belajar</a>
                </div>
              </div>

              <div style="background: white; border-radius: 16px; overflow: hidden; box-shadow: 0 4px 12px rgba(0,0,0,0.08);">
                <div style="height: 140px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); position: relative;">
                  <span style="position: absolute; bottom: 10px; right: 10px; background: rgba(0,0,0,0.7); color: white; padding: 4px 8px; border-radius: 4px; font-size: 0.7rem;">15:45</span>
                  <span style="position: absolute; top: 10px; left: 10px; background: #e9ecef; color: #495057; padding: 4px 12px; border-radius: 20px; font-size: 0.7rem;">Dasar</span>
                </div>
                <div style="padding: 15px;">
                  <h3 style="font-size: 1.1rem; font-weight: 600; margin-bottom: 5px;">Angka 1-100</h3>
                  <p style="font-size: 0.8rem; color: #64748b; margin-bottom: 10px;">Belajar angka dalam bahasa isyarat</p>
                  <div style="margin: 10px 0;">
                    <div style="display: flex; align-items: center; gap: 10px;">
                      <div style="flex: 1; height: 6px; background: #e9ecef; border-radius: 10px;">
                        <div style="width: 60%; height: 100%; background: #4CAF50; border-radius: 10px;"></div>
                      </div>
                      <span>60%</span>
                    </div>
                  </div>
                  <a href="#" style="display: block; text-align: center; padding: 10px; background: #2196F3; color: white; border-radius: 8px; text-decoration: none; font-weight: 600;">Lanjutkan</a>
                </div>
              </div>

              <div style="background: white; border-radius: 16px; overflow: hidden; box-shadow: 0 4px 12px rgba(0,0,0,0.08);">
                <div style="height: 140px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); position: relative;">
                  <span style="position: absolute; bottom: 10px; right: 10px; background: rgba(0,0,0,0.7); color: white; padding: 4px 8px; border-radius: 4px; font-size: 0.7rem;">20:15</span>
                  <span style="position: absolute; top: 10px; left: 10px; background: #4CAF50; color: white; padding: 4px 12px; border-radius: 20px; font-size: 0.7rem;">Premium</span>
                </div>
                <div style="padding: 15px;">
                  <h3 style="font-size: 1.1rem; font-weight: 600; margin-bottom: 5px;">Percakapan Dokter</h3>
                  <p style="font-size: 0.8rem; color: #64748b; margin-bottom: 10px;">Komunikasi di lingkungan medis</p>
                  <a href="#" style="display: block; text-align: center; padding: 10px; background: #4CAF50; color: white; border-radius: 8px; text-decoration: none; font-weight: 600;">Mulai Belajar</a>
                </div>
              </div>

              <div style="background: white; border-radius: 16px; overflow: hidden; box-shadow: 0 4px 12px rgba(0,0,0,0.08);">
                <div style="height: 140px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); position: relative;">
                  <span style="position: absolute; bottom: 10px; right: 10px; background: rgba(0,0,0,0.7); color: white; padding: 4px 8px; border-radius: 4px; font-size: 0.7rem;">8:20</span>
                  <span style="position: absolute; top: 10px; left: 10px; background: #e9ecef; color: #495057; padding: 4px 12px; border-radius: 20px; font-size: 0.7rem;">Dasar</span>
                </div>
                <div style="padding: 15px;">
                  <h3 style="font-size: 1.1rem; font-weight: 600; margin-bottom: 5px;">Salam & Sapaan</h3>
                  <p style="font-size: 0.8rem; color: #64748b; margin-bottom: 10px;">Cara menyapa dalam bahasa isyarat</p>
                  <span style="color: #4CAF50; display: block; margin-bottom: 10px;">✓ Selesai</span>
                  <a href="#" style="display: block; text-align: center; padding: 10px; background: #f1f5f9; color: #1e293b; border-radius: 8px; text-decoration: none; font-weight: 600;">Ulangi</a>
                </div>
              </div>
            </div>

            <div style="text-align: center; margin-top: 40px;">
              <a href="?menu=dashboard" style="color: #4CAF50; text-decoration: none;">← Kembali ke Dashboard</a>
            </div>
          </div>
        @endif

        {{-- ===================== KUIS ===================== --}}
@if($activeMenu == 'kuis')
  <style>
    .quiz-page {
      padding: 10px 0 30px;
    }

    .quiz-banner {
      background: linear-gradient(90deg, #3d7bf0, #2e62d9);
      border-radius: 14px 14px 0 0;
      color: #fff;
      padding: 18px 18px;
      display: flex;
      justify-content: space-between;
      align-items: flex-start;
      gap: 20px;
      margin-top: 8px;
    }

    .quiz-banner h2 {
      font-size: 24px;
      font-weight: 800;
      margin: 0 0 8px;
      color: #fff;
    }

    .quiz-banner p {
      font-size: 13px;
      color: rgba(255, 255, 255, 0.88);
      margin: 0;
    }

    .quiz-stats {
      display: flex;
      gap: 10px;
    }

    .quiz-stat-box {
      background: rgba(255, 255, 255, 0.14);
      border-radius: 8px;
      padding: 10px 14px;
      min-width: 82px;
    }

    .quiz-stat-box span {
      display: block;
      font-size: 11px;
      margin-bottom: 4px;
      color: rgba(255, 255, 255, 0.85);
    }

    .quiz-stat-box strong {
      font-size: 22px;
      font-weight: 800;
      color: #fff;
    }

    .quiz-wrapper {
      border: 3px solid #2196f3;
      border-top: none;
      padding: 14px 0 0;
      background: transparent;
    }

    .quiz-grid {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 16px;
    }

    .quiz-card {
      background: #fff;
      border: 1px solid #eef1f5;
      border-radius: 14px;
      padding: 16px;
      box-shadow: 0 2px 8px rgba(15, 23, 42, 0.04);
    }

    .quiz-card-top {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 12px;
    }

    .quiz-icon-box {
      width: 32px;
      height: 32px;
      border-radius: 9px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: 700;
      font-size: 15px;
    }

    .quiz-icon-red {
      background: #ffe2e2;
      color: #ef4444;
    }

    .quiz-icon-blue {
      background: #e0ebff;
      color: #3b82f6;
    }

    .quiz-icon-green {
      background: #dcfce7;
      color: #22c55e;
    }

    .quiz-icon-yellow {
      background: #fef3c7;
      color: #eab308;
    }

    .quiz-count {
      font-size: 11px;
      font-weight: 700;
    }

    .quiz-count-red { color: #ef4444; }
    .quiz-count-blue { color: #3b82f6; }
    .quiz-count-green { color: #22c55e; }
    .quiz-count-yellow { color: #f59e0b; }

    .quiz-card h3 {
      font-size: 18px;
      font-weight: 800;
      color: #1f2937;
      margin: 0 0 8px;
    }

    .quiz-desc {
      font-size: 12px;
      line-height: 1.6;
      color: #6b7280;
      min-height: 54px;
      margin-bottom: 12px;
    }

    .quiz-progress-head {
      display: flex;
      justify-content: space-between;
      align-items: center;
      font-size: 12px;
      color: #6b7280;
      margin-bottom: 6px;
    }

    .quiz-progress-bar {
      width: 100%;
      height: 6px;
      background: #e5e7eb;
      border-radius: 999px;
      overflow: hidden;
      margin-bottom: 14px;
    }

    .quiz-progress-fill {
      height: 100%;
      border-radius: 999px;
    }

    .fill-red { background: #ef4444; }
    .fill-blue { background: #3b82f6; }
    .fill-green { background: #22c55e; }
    .fill-yellow { background: #f59e0b; }

    .quiz-card-footer {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .quiz-duration {
      font-size: 11px;
      color: #9ca3af;
    }

    .quiz-btn {
      border: none;
      border-radius: 8px;
      padding: 8px 16px;
      font-size: 12px;
      font-weight: 700;
      color: #fff;
      cursor: pointer;
    }

    .quiz-btn-red { background: #ef4444; }
    .quiz-btn-blue { background: #3b82f6; }
    .quiz-btn-green { background: #22c55e; }
    .quiz-btn-yellow { background: #eab308; }

    .quiz-activity {
      margin-top: 8px;
    }

    .quiz-activity h3 {
      font-size: 16px;
      font-weight: 800;
      color: #1f2937;
      margin: 8px 0 12px;
    }

    .quiz-activity-list {
      display: flex;
      flex-direction: column;
      gap: 10px;
    }

    .quiz-activity-item {
      background: #fff;
      border-radius: 12px;
      padding: 12px 14px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      border: 1px solid #eef1f5;
    }

    .quiz-activity-left {
      display: flex;
      align-items: center;
      gap: 12px;
    }

    .quiz-activity-icon {
      width: 30px;
      height: 30px;
      border-radius: 8px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: 700;
      font-size: 14px;
    }

    .quiz-activity-item h4 {
      font-size: 14px;
      font-weight: 700;
      color: #1f2937;
      margin: 0 0 2px;
    }

    .quiz-activity-item p {
      font-size: 12px;
      color: #6b7280;
      margin: 0;
    }

    .quiz-check {
      color: #16a34a;
      font-size: 16px;
      font-weight: 800;
    }

    @media (max-width: 992px) {
      .quiz-grid {
        grid-template-columns: 1fr;
      }

      .quiz-banner {
        flex-direction: column;
      }
    }

    @media (max-width: 576px) {
      .quiz-stats {
        width: 100%;
      }

      .quiz-stat-box {
        flex: 1;
      }

      .quiz-card-footer {
        flex-direction: column;
        align-items: flex-start;
        gap: 10px;
      }
    }
  </style>

  <div class="quiz-page">
    <div class="quiz-banner">
      <div>
        <h2>Selamat Datang di Kuis IsyaratKita! 👋</h2>
        <p>Uji pemahaman Anda terhadap bahasa isyarat melalui kuis interaktif kami</p>
      </div>

      <div class="quiz-stats">
        <div class="quiz-stat-box">
          <span>Total Kuis</span>
          <strong>4</strong>
        </div>
        <div class="quiz-stat-box">
          <span>Diselesaikan</span>
          <strong>2</strong>
        </div>
      </div>
    </div>

    <div class="quiz-wrapper">
      <div class="quiz-grid">

        <div class="quiz-card">
          <div class="quiz-card-top">
            <div class="quiz-icon-box quiz-icon-red">🧮</div>
            <span class="quiz-count quiz-count-red">10 Kuis</span>
          </div>

          <h3>Angka 1-10</h3>
          <div class="quiz-desc">
            Pelajari dan uji kemampuan Anda dalam mengenali bahasa isyarat untuk angka dasar 1 hingga 10
          </div>

          <div class="quiz-progress-head">
            <span>Progres</span>
            <span>3/10</span>
          </div>
          <div class="quiz-progress-bar">
            <div class="quiz-progress-fill fill-red" style="width: 30%;"></div>
          </div>

          <div class="quiz-card-footer">
            <span class="quiz-duration">◉ ~15 menit</span>
            <button class="quiz-btn quiz-btn-red">Lanjutkan</button>
          </div>
        </div>

        <div class="quiz-card">
          <div class="quiz-card-top">
            <div class="quiz-icon-box quiz-icon-blue">A</div>
            <span class="quiz-count quiz-count-blue">26 Kuis</span>
          </div>

          <h3>Huruf A-Z</h3>
          <div class="quiz-desc">
            Kuasai alfabet bahasa isyarat dari A hingga Z dengan video demonstrasi yang mudah dipahami
          </div>

          <div class="quiz-progress-head">
            <span>Progres</span>
            <span>5/26</span>
          </div>
          <div class="quiz-progress-bar">
            <div class="quiz-progress-fill fill-blue" style="width: 19%;"></div>
          </div>

          <div class="quiz-card-footer">
            <span class="quiz-duration">◉ ~40 menit</span>
            <button class="quiz-btn quiz-btn-blue">Lanjutkan</button>
          </div>
        </div>

        <div class="quiz-card">
          <div class="quiz-card-top">
            <div class="quiz-icon-box quiz-icon-green">👥</div>
            <span class="quiz-count quiz-count-green">15 Kuis</span>
          </div>

          <h3>Percakapan Dasar</h3>
          <div class="quiz-desc">
            Praktikkan komunikasi sehari-hari dengan salam, perkenalan, dan percakapan sederhana
          </div>

          <div class="quiz-progress-head">
            <span>Progres</span>
            <span>0/15</span>
          </div>
          <div class="quiz-progress-bar">
            <div class="quiz-progress-fill fill-green" style="width: 0%;"></div>
          </div>

          <div class="quiz-card-footer">
            <span class="quiz-duration">◉ ~25 menit</span>
            <button class="quiz-btn quiz-btn-green">Mulai</button>
          </div>
        </div>

        <div class="quiz-card">
          <div class="quiz-card-top">
            <div class="quiz-icon-box quiz-icon-yellow">🙂</div>
            <span class="quiz-count quiz-count-yellow">12 Kuis</span>
          </div>

          <h3>Ekspresi Dasar</h3>
          <div class="quiz-desc">
            Pelajari ungkapan penting seperti terima kasih, maaf, tolong, ya, dan tidak dalam bahasa isyarat
          </div>

          <div class="quiz-progress-head">
            <span>Progres</span>
            <span>0/12</span>
          </div>
          <div class="quiz-progress-bar">
            <div class="quiz-progress-fill fill-yellow" style="width: 0%;"></div>
          </div>

          <div class="quiz-card-footer">
            <span class="quiz-duration">◉ ~20 menit</span>
            <button class="quiz-btn quiz-btn-yellow">Mulai</button>
          </div>
        </div>

      </div>
    </div>

    <div class="quiz-activity">
      <h3>Aktivitas Terakhir</h3>

      <div class="quiz-activity-list">
        <div class="quiz-activity-item">
          <div class="quiz-activity-left">
            <div class="quiz-activity-icon quiz-icon-red">🧮</div>
            <div>
              <h4>Menyelesaikan Kuis Angka 3</h4>
              <p>Skor: 90% • 2 jam yang lalu</p>
            </div>
          </div>
          <div class="quiz-check">✔</div>
        </div>

        <div class="quiz-activity-item">
          <div class="quiz-activity-left">
            <div class="quiz-activity-icon quiz-icon-blue">A</div>
            <div>
              <h4>Menyelesaikan Kuis Huruf E</h4>
              <p>Skor: 85% • 1 hari yang lalu</p>
            </div>
          </div>
          <div class="quiz-check">✔</div>
        </div>
      </div>
    </div>
  </div>
@endif

        {{-- ===================== HISTORY ===================== --}}
@if($activeMenu == 'history')
  <style>
    .history-page {
      background: #ffffff;
      min-height: 100%;
      padding: 8px 0 24px;
    }

    .history-header {
      display: flex;
      align-items: center;
      gap: 10px;
      margin-bottom: 14px;
    }

    .history-back {
      width: 28px;
      height: 28px;
      border-radius: 50%;
      border: 1px solid #e5e7eb;
      background: #ffffff;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #475569;
      font-size: 14px;
      box-shadow: 0 1px 2px rgba(0,0,0,0.04);
    }

    .history-title {
      font-size: 18px;
      font-weight: 800;
      color: #1e293b;
      margin: 0;
    }

    .history-tabs {
      width: 100%;
      display: grid;
      grid-template-columns: 1fr 1fr 1fr;
      background: #f8fafc;
      border: 1px solid #edf2f7;
      border-radius: 10px;
      overflow: hidden;
      margin-bottom: 18px;
    }

    .history-tab {
      text-align: center;
      padding: 9px 12px;
      font-size: 12px;
      color: #64748b;
      text-decoration: none;
      background: transparent;
      transition: 0.2s ease;
    }

    .history-tab.active {
      background: #3b82f6;
      color: #ffffff;
      font-weight: 600;
    }

    .history-list {
      display: flex;
      flex-direction: column;
      gap: 16px;
    }

    .history-card {
      background: #ffffff;
      border: 1px solid #edf2f7;
      border-radius: 14px;
      padding: 14px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      box-shadow: 0 2px 10px rgba(15, 23, 42, 0.03);
    }

    .history-left {
      display: flex;
      align-items: center;
      gap: 14px;
    }

    .history-thumb {
      width: 76px;
      height: 56px;
      border-radius: 8px;
      background: #d1d5db;
      flex-shrink: 0;
    }

    .history-quiz-icon {
      width: 34px;
      height: 34px;
      border-radius: 6px;
      background: #333333;
      color: #ffffff;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 18px;
      font-weight: 700;
      flex-shrink: 0;
    }

    .history-info h4 {
      margin: 0 0 4px;
      font-size: 18px;
      font-weight: 700;
      color: #1f2937;
    }

    .history-info p {
      margin: 0 0 8px;
      font-size: 12px;
      color: #6b7280;
    }

    .history-duration {
      font-size: 12px;
      color: #6b7280;
      white-space: nowrap;
      margin-left: 16px;
    }

    .history-badge {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      font-size: 11px;
      font-weight: 600;
      padding: 4px 10px;
      border-radius: 999px;
    }

    .badge-blue {
      background: #dbeafe;
      color: #2563eb;
    }

    .badge-green {
      background: #dcfce7;
      color: #16a34a;
    }

    .badge-yellow {
      background: #fef3c7;
      color: #b45309;
    }

    .badge-red {
      background: #fee2e2;
      color: #dc2626;
    }

    .history-meta-icon {
      font-size: 11px;
    }

    .history-link-back {
      text-decoration: none;
      color: inherit;
    }

    @media (max-width: 768px) {
      .history-card {
        flex-direction: column;
        align-items: flex-start;
        gap: 12px;
      }

      .history-duration {
        margin-left: 0;
      }

      .history-info h4 {
        font-size: 16px;
      }
    }
  </style>

  @php
    $historyTab = request('tab', 'video');
  @endphp

  <div class="history-page">
    <div class="history-header">
      <a href="?menu=dashboard" class="history-link-back">
        <div class="history-back">←</div>
      </a>
      <h2 class="history-title">Riwayat Belajar</h2>
    </div>

    <div class="history-tabs">
      <a href="?menu=history&tab=video" class="history-tab {{ $historyTab == 'video' ? 'active' : '' }}">Video</a>
      <a href="?menu=history&tab=kuis" class="history-tab {{ $historyTab == 'kuis' ? 'active' : '' }}">Kuis</a>
      <a href="?menu=history&tab=pembelian" class="history-tab {{ $historyTab == 'pembelian' ? 'active' : '' }}">Pembelian</a>
    </div>

    {{-- TAB VIDEO --}}
    @if($historyTab == 'video')
      <div class="history-list">
        <div class="history-card">
          <div class="history-left">
            <div class="history-thumb"></div>
            <div class="history-info">
              <h4>Angka 1-10</h4>
              <p>15 Desember 2025 • 07:10</p>
              <span class="history-badge badge-blue">▶ Sedang Ditonton</span>
            </div>
          </div>
          <div class="history-duration">⏱ 12 menit</div>
        </div>

        <div class="history-card">
          <div class="history-left">
            <div class="history-thumb"></div>
            <div class="history-info">
              <h4>Huruf A-Z</h4>
              <p>14 Desember 2025 • 05:45</p>
              <span class="history-badge badge-green">✓ Selesai</span>
            </div>
          </div>
          <div class="history-duration">⏱ 18 menit</div>
        </div>

        <div class="history-card">
          <div class="history-left">
            <div class="history-thumb"></div>
            <div class="history-info">
              <h4>Percakapan Dasar</h4>
              <p>12 Desember 2025 • 11:15</p>
              <span class="history-badge badge-green">✓ Selesai</span>
            </div>
          </div>
          <div class="history-duration">⏱ 25 menit</div>
        </div>

        <div class="history-card">
          <div class="history-left">
            <div class="history-thumb"></div>
            <div class="history-info">
              <h4>Ekspresi Dasar</h4>
              <p>11 Desember 2024 • 14:50</p>
              <span class="history-badge badge-yellow">⏸ Terhenti</span>
            </div>
          </div>
          <div class="history-duration">⏱ 20 menit</div>
        </div>
      </div>
    @endif

    {{-- TAB KUIS --}}
    @if($historyTab == 'kuis')
      <div class="history-list">
        <div class="history-card">
          <div class="history-left">
            <div class="history-quiz-icon">☰</div>
            <div class="history-info">
              <h4>Angka 1-10</h4>
              <p>15 Desember 2025</p>
              <span class="history-badge badge-green">● Lulus</span>
            </div>
          </div>
        </div>

        <div class="history-card">
          <div class="history-left">
            <div class="history-quiz-icon">☰</div>
            <div class="history-info">
              <h4>Abjad A-Z</h4>
              <p>15 Desember 2025</p>
              <span class="history-badge badge-green">● Lulus</span>
            </div>
          </div>
        </div>

        <div class="history-card">
          <div class="history-left">
            <div class="history-quiz-icon">☰</div>
            <div class="history-info">
              <h4>Percakapan dasar</h4>
              <p>15 Desember 2025</p>
              <span class="history-badge badge-red">● Terhenti</span>
            </div>
          </div>
        </div>
      </div>
    @endif

    {{-- TAB PEMBELIAN --}}
    @if($historyTab == 'pembelian')
      <div class="history-list">
        <div class="history-card">
          <div class="history-left">
            <div class="history-thumb"></div>
            <div class="history-info">
              <h4>Paket Belajar Dasar</h4>
              <p>10 Desember 2025 • 09:20</p>
              <span class="history-badge badge-green">✓ Berhasil Dibeli</span>
            </div>
          </div>
          <div class="history-duration">Rp30.000</div>
        </div>

        <div class="history-card">
          <div class="history-left">
            <div class="history-thumb"></div>
            <div class="history-info">
              <h4>Paket Kuis Lengkap</h4>
              <p>05 Desember 2025 • 15:00</p>
              <span class="history-badge badge-green">✓ Berhasil Dibeli</span>
            </div>
          </div>
          <div class="history-duration">Rp30.000</div>
        </div>
      </div>
    @endif
  </div>
@endif

        {{-- ===================== FEEDBACK ===================== --}}
        @if($activeMenu == 'feedback')
          <div style="text-align: center; padding: 50px;">
            <h1 style="font-size: 2rem; color: #1e293b;">Feedback</h1>
            <p style="color: #64748b; margin: 20px 0;">Sedang dalam pengembangan</p>
            <a href="?menu=dashboard" style="color: #4CAF50;">Kembali ke Dashboard</a>
          </div>
        @endif

        {{-- ===================== PROFIL ===================== --}}
@if($activeMenu == 'profil')
  @php
    $user = Auth::user();
  @endphp

  <div class="profil-container">
    <h1 style="font-size: 2rem; color: #1e293b; margin-bottom: 25px;">Profil Saya</h1>

    <section class="card" style="padding: 24px;">
      <div class="section-head" style="margin-bottom: 20px;">
        <h3>Data Profil Murid</h3>
      </div>

      @if(session('success'))
        <div style="margin-bottom: 16px; padding: 12px 16px; background: #dcfce7; color: #166534; border-radius: 10px;">
          {{ session('success') }}
        </div>
      @endif

      <form action="{{ route('profil.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="profil-wrapper">

          {{-- KIRI --}}
          <div class="profil-form">
            <div class="profil-form-grid">

              <div>
                <label class="profil-label">Nama Lengkap</label>
                <input type="text" name="nama_lengkap" value="{{ old('nama_lengkap', $user?->nama_lengkap ?? $user?->name ?? '') }}" required class="profil-input">
              </div>

              <div>
                <label class="profil-label">Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir', $user?->tanggal_lahir ?? '') }}" required class="profil-input">
              </div>

              <div>
                <label class="profil-label">Jenis Kelamin</label>
                <select name="jenis_kelamin" required class="profil-input">
                  <option value="">Pilih Jenis Kelamin</option>
                  <option value="Laki-laki" {{ old('jenis_kelamin', $user?->jenis_kelamin ?? '') == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                  <option value="Perempuan" {{ old('jenis_kelamin', $user?->jenis_kelamin ?? '') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                </select>
              </div>

              <div>
                <label class="profil-label">Nomor Telepon</label>
                <input type="text" name="nomor_telepon" value="{{ old('nomor_telepon', $user?->nomor_telepon ?? '') }}" required placeholder="08xxxxxxxxxx" class="profil-input">
              </div>

              <div>
                <label class="profil-label">Email</label>
                <input type="email" name="email" value="{{ old('email', $user?->email ?? '') }}" required class="profil-input">
              </div>

              <div style="margin-top: 10px;">
                <button class="btn" type="submit">Simpan Data</button>
              </div>
            </div>
          </div>

          {{-- KANAN --}}
          <div class="profil-photo-side">
            <h4 class="profil-photo-title">Foto Profil</h4>

            @if(!empty($user?->foto_profil))
              <img
                id="previewFoto"
                src="{{ asset('storage/' . $user->foto_profil) }}"
                alt="Foto Profil"
                class="profil-photo-img">
            @else
              <img
                id="previewFoto"
                src="https://ui-avatars.com/api/?name={{ urlencode($user?->nama_lengkap ?? $user?->name ?? 'User') }}&background=2e5aa7&color=ffffff&size=220"
                alt="Foto Profil"
                class="profil-photo-img">
            @endif

            <p class="profil-photo-name">
              {{ $user?->nama_lengkap ?? $user?->name ?? 'Murid' }}
            </p>

            <p class="profil-photo-desc">Upload foto diri untuk profil akun</p>

            <label for="foto_profil" class="profil-upload-btn">Pilih Foto</label>
            <input
              type="file"
              name="foto_profil"
              id="foto_profil"
              accept="image/*"
              hidden
              onchange="previewImage(event)">

            <p class="profil-photo-note">
              Format: JPG, JPEG, PNG<br>
              Maksimal 2MB
            </p>
          </div>

        </div>
      </form>
    </section>
  </div>
@endif

      </div>
    </main>
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