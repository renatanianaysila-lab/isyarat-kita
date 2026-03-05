<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>IsyaratKita - Dashboard Murid</title>

  {{-- Google Font (Poppins) --}}
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

  {{-- CSS dari public/css --}}
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
        <a class="menu-item active" href="{{ url('/dashboard-murid') }}">
          <img class="menu-icon" src="{{ asset('img/dashboard-square-01.png') }}" alt="">
          Dashboard
        </a>

        <a class="menu-item" href="{{ url('/paket') }}">
          <img class="menu-icon" src="{{ asset('img/katalog.png') }}" alt="">
          Katalog Paket
        </a>

        <a class="menu-item" href="#">
          <img class="menu-icon" src="{{ asset('img/materi.png') }}" alt="">
          Materi Saya
        </a>

        <a class="menu-item" href="#">
          <img class="menu-icon" src="{{ asset('img/kuis.png') }}" alt="">
          Kuis
        </a>

        <a class="menu-item" href="#">
          <img class="menu-icon" src="{{ asset('img/transaction-history.png') }}" alt="">
          History
        </a>

        <a class="menu-item" href="#">
          <img class="menu-icon" src="{{ asset('img/feedback.png') }}" alt="">
          Feedback
        </a>

        <a class="menu-item" href="#">
          <img class="menu-icon" src="{{ asset('img/user.png') }}" alt="">
          Profil
        </a>

        <a class="menu-item danger" href="/login">
          <img class="menu-icon" src="{{ asset('img/logout-04.png') }}" alt="">
          Logout
        </a>
      </nav>
    </aside>

    <!-- MAIN -->
    <main class="main">

      <!-- TOPBAR -->
      <header class="topbar">
        <div class="search">
          <input type="text" placeholder="Search..." />
          <img class="search-img" src="{{ asset('img/search-visual.png') }}" alt="Search">
        </div>

        <div class="top-actions">
          <!-- Notifikasi -->
          <button class="icon-btn" title="Notifikasi">
            <img class="top-icon" src="{{ asset('img/notification-01.png') }}" alt="">
          </button>

          <!-- Help -->
          <button class="icon-btn" title="Bantuan">
            <img class="top-icon" src="{{ asset('img/help-circle.png') }}" alt="">
          </button>

          <!-- Profile -->
          <div class="profile-mini">
            <img class="avatar-img" src="{{ asset('img/user.png') }}" alt="">
          </div>
        </div>
      </header>

      <!-- CONTENT WRAPPER -->
      <div class="content-wrapper">
        <!-- Greeting -->
        <div class="greet">
          <h1>Halo, <span class="name">[Nama Murid]</span> 👋</h1>
          <p>Yuk, lanjutkan belajar bahasa isyaratmu! ⭐</p>
        </div>

        <!-- Row: Progress + Paket -->
<div class="grid-2">

  <!-- PROGRESS SECTION - DESAIN BARU -->
  <section class="card progress-card-custom">
    <div class="card-head">
      <h2>Progress Belajar Hari Ini</h2>
      <span class="tanggal">{{ now()->format('d F Y') }}</span>
    </div>
    
    @php
        // Nanti ganti dengan data dari database
        $user = Auth::user();
        $videosCompleted = 12; // Contoh statis dulu
        $totalVideos = 20;
        $avgScore = 80;
        $watchTime = 525; // dalam menit
        $streak = 7;
        $points = 45;
        $progressPercentage = ($videosCompleted / $totalVideos) * 100;
    @endphp
    
    <!-- Circle Progress + Stats -->
    <div class="progress-main-row" style="display: flex; gap: 25px; margin-bottom: 20px;">
      <!-- Circle Progress -->
      <div class="progress-circle-container" style="flex-shrink: 0;">
        <div class="progress-circle" style="position: relative; width: 120px; height: 120px;">
          <svg width="120" height="120" viewBox="0 0 120 120">
            <circle cx="60" cy="60" r="54" fill="none" stroke="#e9ecef" stroke-width="8"/>
            <circle cx="60" cy="60" r="54" fill="none" stroke="#4CAF50" stroke-width="8" 
                    stroke-linecap="round" 
                    stroke-dasharray="339.292" 
                    stroke-dashoffset="{{ 339.292 - (339.292 * $progressPercentage / 100) }}"
                    transform="rotate(-90 60 60)"/>
          </svg>
          <div class="progress-text" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center;">
            <span class="progress-number" style="display: block; font-size: 28px; font-weight: bold; color: #1e293b;">{{ round($progressPercentage) }}%</span>
            <span class="progress-label" style="font-size: 12px; color: #64748b;">Selesai</span>
          </div>
        </div>
      </div>
      
      <!-- Stats Grid -->
      <div style="flex: 1; display: grid; grid-template-columns: repeat(2, 1fr); gap: 15px;">
        <div>
          <div style="font-size: 0.85rem; color: #64748b; margin-bottom: 5px;">Video Dipelajari</div>
          <div style="font-size: 1.5rem; font-weight: bold; color: #1e293b;">{{ $videosCompleted }} <small style="font-size: 0.9rem; color: #94a3b8;">/ {{ $totalVideos }}</small></div>
          <div style="height: 6px; background: #e9ecef; border-radius: 10px; margin-top: 8px; width: 100%;">
            <div style="height: 100%; width: {{ $progressPercentage }}%; background: linear-gradient(90deg, #4CAF50, #8BC34A); border-radius: 10px;"></div>
          </div>
        </div>
        
        <div>
          <div style="font-size: 0.85rem; color: #64748b; margin-bottom: 5px;">Rata-rata Skor</div>
          <div style="font-size: 1.5rem; font-weight: bold; color: #1e293b;">{{ $avgScore }}</div>
          <div style="color: #FFC107; font-size: 0.9rem; margin-top: 5px;">
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
          <div style="font-size: 0.85rem; color: #64748b; margin-bottom: 5px;">Waktu Belajar</div>
          <div style="font-size: 1.5rem; font-weight: bold; color: #1e293b;">{{ floor($watchTime/60) }}j {{ $watchTime%60 }}m</div>
          <div style="font-size: 0.8rem; color: #94a3b8;">Total keseluruhan</div>
        </div>
        
        <div>
          <div style="font-size: 0.85rem; color: #64748b; margin-bottom: 5px;">Poin Belajar</div>
          <div style="font-size: 1.5rem; font-weight: bold; color: #1e293b;">{{ $points }}</div>
          <div style="font-size: 0.8rem; color: #94a3b8;">🔥 {{ $streak }} hari streak</div>
        </div>
      </div>
    </div>
    
    <!-- Grafik Progress -->
    <div class="graph" style="margin-top: 20px; padding-top: 20px; border-top: 1px solid #e9ecef;">
      <div class="graph-title" style="font-size: 0.9rem; color: #64748b; margin-bottom: 12px;">Grafik Progress 7 Hari Terakhir</div>
      <div class="graph-box" style="height: 100px; background: #f8fafc; border-radius: 12px; display: flex; align-items: flex-end; padding: 12px 8px; gap: 8px;">
        <div style="height: 40px; width: 12%; background: #4CAF50; border-radius: 6px 6px 0 0;"></div>
        <div style="height: 65px; width: 12%; background: #4CAF50; border-radius: 6px 6px 0 0;"></div>
        <div style="height: 30px; width: 12%; background: #4CAF50; border-radius: 6px 6px 0 0;"></div>
        <div style="height: 70px; width: 12%; background: #4CAF50; border-radius: 6px 6px 0 0;"></div>
        <div style="height: 55px; width: 12%; background: #4CAF50; border-radius: 6px 6px 0 0;"></div>
        <div style="height: 45px; width: 12%; background: #4CAF50; border-radius: 6px 6px 0 0;"></div>
        <div style="height: 80px; width: 12%; background: #4CAF50; border-radius: 6px 6px 0 0;"></div>
      </div>
      <div style="display: flex; justify-content: space-between; margin-top: 8px; font-size: 0.7rem; color: #94a3b8;">
        <span>Sen</span><span>Sel</span><span>Rab</span><span>Kam</span><span>Jum</span><span>Sab</span><span>Min</span>
      </div>
    </div>
  </section>

  <!-- Row: Progress + Paket -->
<div class="grid-2">

    <!-- PROGRESS SECTION - DESAIN BARU -->
    <section class="card progress-card-custom">
        <div class="card-head">
            <h2>Progress Belajar Hari Ini</h2>
            <span class="tanggal">{{ now()->format('d F Y') }}</span>
        </div>
        
        @php
            // Contoh data statis
            $user = Auth::user();
            $videosCompleted = 12;
            $totalVideos = 20;
            $avgScore = 80;
            $watchTime = 525; // dalam menit
            $streak = 7;
            $points = 45;
            $progressPercentage = ($videosCompleted / $totalVideos) * 100;
        @endphp
        
        <!-- Circle Progress + Stats -->
        <div class="progress-main-row" style="display: flex; gap: 25px; margin-bottom: 20px;">
            <!-- Circle Progress -->
            <div class="progress-circle-container" style="flex-shrink: 0;">
                <div class="progress-circle" style="position: relative; width: 120px; height: 120px;">
                    <svg width="120" height="120" viewBox="0 0 120 120">
                        <circle cx="60" cy="60" r="54" fill="none" stroke="#e9ecef" stroke-width="8"/>
                        <circle cx="60" cy="60" r="54" fill="none" stroke="#4CAF50" stroke-width="8" 
                                stroke-linecap="round" 
                                stroke-dasharray="339.292" 
                                stroke-dashoffset="{{ 339.292 - (339.292 * $progressPercentage / 100) }}"
                                transform="rotate(-90 60 60)"/>
                    </svg>
                    <div class="progress-text" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center;">
                        <span class="progress-number" style="display: block; font-size: 28px; font-weight: bold; color: #1e293b;">{{ round($progressPercentage) }}%</span>
                        <span class="progress-label" style="font-size: 12px; color: #64748b;">Selesai</span>
                    </div>
                </div>
            </div>
            
            <!-- Stats Grid -->
            <div style="flex: 1; display: grid; grid-template-columns: repeat(2, 1fr); gap: 15px;">
                <div>
                    <div style="font-size: 0.85rem; color: #64748b; margin-bottom: 5px;">Video Dipelajari</div>
                    <div style="font-size: 1.5rem; font-weight: bold; color: #1e293b;">{{ $videosCompleted }} <small style="font-size: 0.9rem; color: #94a3b8;">/ {{ $totalVideos }}</small></div>
                    <div style="height: 6px; background: #e9ecef; border-radius: 10px; margin-top: 8px; width: 100%;">
                        <div style="height: 100%; width: {{ $progressPercentage }}%; background: linear-gradient(90deg, #4CAF50, #8BC34A); border-radius: 10px;"></div>
                    </div>
                </div>
                
                <div>
                    <div style="font-size: 0.85rem; color: #64748b; margin-bottom: 5px;">Rata-rata Skor</div>
                    <div style="font-size: 1.5rem; font-weight: bold; color: #1e293b;">{{ $avgScore }}</div>
                    <div style="color: #FFC107; font-size: 0.9rem; margin-top: 5px;">
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
                    <div style="font-size: 0.85rem; color: #64748b; margin-bottom: 5px;">Waktu Belajar</div>
                    <div style="font-size: 1.5rem; font-weight: bold; color: #1e293b;">{{ floor($watchTime/60) }}j {{ $watchTime%60 }}m</div>
                    <div style="font-size: 0.8rem; color: #94a3b8;">Total keseluruhan</div>
                </div>
                
                <div>
                    <div style="font-size: 0.85rem; color: #64748b; margin-bottom: 5px;">Poin Belajar</div>
                    <div style="font-size: 1.5rem; font-weight: bold; color: #1e293b;">{{ $points }}</div>
                    <div style="font-size: 0.8rem; color: #94a3b8;">🔥 {{ $streak }} hari streak</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Paket yang Dimiliki -->
    <section class="card">
        <div class="card-head">
            <h2>Paket yang Dimiliki</h2>
        </div>

        <div class="paket-grid">
            <!-- Paket Dasar -->
            <div class="paket-card">
                <div class="paket-title">Paket Dasar</div>
                <div class="paket-sub">60 hari tersisa</div>
                <ul class="paket-list">
                    <li>Preview thumbnail</li>
                    <li>judul paket, deskripsi singkat paket</li>
                    <li><b>Aktif</b></li>
                </ul>
                <button class="btn">Lanjut Belajar</button>
            </div>

            <!-- Paket Premium -->
            <div class="paket-card">
                <div class="paket-title">Paket Premium</div>
                <div class="paket-sub">240 hari tersisa</div>
                <ul class="paket-list">
                    <li>Preview thumbnail</li>
                    <li>judul paket, deskripsi singkat paket</li>
                    <li><b>Aktif</b></li>
                </ul>
                <button class="btn">Lanjut Belajar</button>
            </div>
        </div>

        <div class="card-foot">
            <a class="link" href="<?php echo e(url('/paket')); ?>">Lihat Semua Paket ›</a>
        </div>
    </section>
</div>

            <!-- Link Lihat Semua Paket mengarah ke halaman paket -->
            <div class="card-foot">
              <a class="link" href="{{ url('/paket') }}">Lihat Semua Paket ›</a>
            </div>
          </section>
        </div>

        <!-- Rekomendasi -->
        <div class="section-head">
          <h3>Rekomendasi Materi untuk <span class="name">[Nama Murid]</span>:</h3>
          <a class="link" href="#">Lihat Semua Materi</a>
        </div>

        <!-- Materi lanjutan & history -->
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
            <button class="btn full">Lanjutkan Belajar</button>
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
            <button class="btn full">Lanjutkan Belajar</button>
          </section>
        </div>

        <!-- FORM (requirement text + file) -->
        <div class="section-head" style="margin-top:18px;">
          <h3>Form Identitas Murid</h3>
          <span class="badge">Form</span>
        </div>

        <section class="card">
          <form action="/upload-identitas" method="POST" enctype="multipart/form-data">
            @csrf

            <table class="form-table" width="100%" cellpadding="10">
              <tr>
                <td><label>Nama Lengkap</label></td>
                <td>
                  <input type="text" name="nama" required>
                </td>
              </tr>

              <tr>
                <td><label>Tanggal Lahir</label></td>
                <td>
                  <input type="date" name="tanggal_lahir" required>
                </td>
              </tr>

              <tr>
                <td><label>Upload KTP / Kartu Pelajar</label></td>
                <td>
                  <input type="file" name="ktp" accept=".jpg,.jpeg,.png,.pdf" required>
                </td>
              </tr>

              <tr>
                <td></td>
                <td>
                  <button class="btn" type="submit">Simpan Data</button>
                </td>
              </tr>
            </table>
          </form>
        </section>
      </div> {{-- Tutup content-wrapper --}}
    </main>
  </div> {{-- Tutup app --}}
</body>
</html>