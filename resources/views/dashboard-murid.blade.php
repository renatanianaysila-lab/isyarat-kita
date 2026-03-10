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
        <!-- Dashboard -->
        <a class="menu-item {{ request()->get('menu') == 'dashboard' || !request()->get('menu') ? 'active' : '' }}" 
           href="?menu=dashboard">
            <img class="menu-icon" src="{{ asset('img/dashboard-square-01.png') }}" alt="">
            Dashboard
        </a>

        <!-- Katalog Paket -->
        <a class="menu-item" href="{{ url('/paket') }}">
            <img class="menu-icon" src="{{ asset('img/katalog.png') }}" alt="">
            Katalog Paket
        </a>

        <!-- Materi Saya -->
        <a class="menu-item {{ request()->get('menu') == 'materi' ? 'active' : '' }}" 
           href="?menu=materi">
            <img class="menu-icon" src="{{ asset('img/materi.png') }}" alt="">
            Materi Saya
        </a>

        <!-- Kuis -->
        <a class="menu-item {{ request()->get('menu') == 'kuis' ? 'active' : '' }}" 
           href="?menu=kuis">
            <img class="menu-icon" src="{{ asset('img/kuis.png') }}" alt="">
            Kuis
        </a>

        <!-- History -->
        <a class="menu-item {{ request()->get('menu') == 'history' ? 'active' : '' }}" 
           href="?menu=history">
            <img class="menu-icon" src="{{ asset('img/transaction-history.png') }}" alt="">
            History
        </a>

        <!-- Feedback -->
        <a class="menu-item {{ request()->get('menu') == 'feedback' ? 'active' : '' }}" 
           href="?menu=feedback">
            <img class="menu-icon" src="{{ asset('img/feedback.png') }}" alt="">
            Feedback
        </a>

        <!-- Profil -->
        <a class="menu-item {{ request()->get('menu') == 'profil' ? 'active' : '' }}" 
           href="?menu=profil">
            <img class="menu-icon" src="{{ asset('img/user.png') }}" alt="">
            Profil
        </a>

        <!-- Logout -->
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

      <!-- CONTENT WRAPPER -->
      <div class="content-wrapper">
        
        <!-- CEK MENU AKTIF -->
        @php
            $activeMenu = request()->get('menu', 'dashboard');
        @endphp
        
        <!-- ========== DASHBOARD VIEW ========== -->
        @if($activeMenu == 'dashboard')
            <!-- Greeting -->
            <div class="greet">
                <h1>Halo, <span class="name">[Nama Murid]</span> 👋</h1>
                <p>Yuk, lanjutkan belajar bahasa isyaratmu! ⭐</p>
            </div>

            <!-- Row: Progress + Paket -->
            <div class="grid-2">
                <!-- PROGRESS SECTION -->
                <section class="card progress-card-custom">
                    <div class="card-head">
                        <h2>Progress Belajar Hari Ini</h2>
                        <span class="tanggal">{{ now()->format('d F Y') }}</span>
                    </div>
                    
                    @php
                        $user = Auth::user();
                        $videosCompleted = 12;
                        $totalVideos = 20;
                        $avgScore = 80;
                        $watchTime = 525;
                        $streak = 7;
                        $points = 45;
                        $progressPercentage = ($videosCompleted / $totalVideos) * 100;
                    @endphp
                    
                    <!-- Circle Progress + Stats -->
                    <div class="progress-main-row" style="display: flex; gap: 25px; margin-bottom: 20px;">
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

                <!-- PAKET SECTION -->
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
                        <a class="link" href="{{ url('/paket') }}">Lihat Semua Paket ›</a>
                    </div>
                </section>
            </div>

            <!-- Rekomendasi -->
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
        
        <!-- ========== MATERI SAYA VIEW ========== -->
        @if($activeMenu == 'materi')
            <div class="materi-saya-container">
                <h1 style="font-size: 2rem; color: #1e293b; margin-bottom: 25px;">Materi Saya</h1>
                
                <!-- Filter Tabs -->
                <div style="display: flex; gap: 10px; margin-bottom: 25px; flex-wrap: wrap;">
                    <button style="padding: 8px 20px; border-radius: 30px; background: #4CAF50; color: white; border: none; font-weight: 500;">Semua</button>
                    <button style="padding: 8px 20px; border-radius: 30px; background: white; border: 1px solid #e2e8f0; cursor: pointer;">Paket Dasar</button>
                    <button style="padding: 8px 20px; border-radius: 30px; background: white; border: 1px solid #e2e8f0; cursor: pointer;">Paket Premium</button>
                    <button style="padding: 8px 20px; border-radius: 30px; background: white; border: 1px solid #e2e8f0; cursor: pointer;">Belum Ditonton</button>
                </div>

                <!-- Grid Materi -->
                <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 20px;">
                    <!-- Card 1 -->
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

                    <!-- Card 2 -->
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

                    <!-- Card 3 -->
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

                    <!-- Card 4 -->
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
        
        <!-- ========== KUIS VIEW ========== -->
        @if($activeMenu == 'kuis')
            <div style="text-align: center; padding: 50px;">
                <h1 style="font-size: 2rem; color: #1e293b;">Halaman Kuis</h1>
                <p style="color: #64748b; margin: 20px 0;">Sedang dalam pengembangan</p>
                <a href="?menu=dashboard" style="color: #4CAF50;">Kembali ke Dashboard</a>
            </div>
        @endif
        
        <!-- ========== HISTORY VIEW ========== -->
        @if($activeMenu == 'history')
            <div style="text-align: center; padding: 50px;">
                <h1 style="font-size: 2rem; color: #1e293b;">History Belajar</h1>
                <p style="color: #64748b; margin: 20px 0;">Sedang dalam pengembangan</p>
                <a href="?menu=dashboard" style="color: #4CAF50;">Kembali ke Dashboard</a>
            </div>
        @endif
        
        <!-- ========== FEEDBACK VIEW ========== -->
        @if($activeMenu == 'feedback')
            <div style="text-align: center; padding: 50px;">
                <h1 style="font-size: 2rem; color: #1e293b;">Feedback</h1>
                <p style="color: #64748b; margin: 20px 0;">Sedang dalam pengembangan</p>
                <a href="?menu=dashboard" style="color: #4CAF50;">Kembali ke Dashboard</a>
            </div>
        @endif
        
        <!-- ========== PROFIL VIEW ========== -->
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

            <form action="{{ route('profil.update') }}" method="POST">
                @csrf
                @method('PUT')

                <div style="display: grid; gap: 18px; max-width: 600px;">

                    <div>
                        <label style="display:block; margin-bottom:8px; font-weight:600;">Nama Lengkap</label>
                        <input
                            type="text"
                            name="nama_lengkap"
                            value="{{ old('nama_lengkap', $user?->nama_lengkap ?? $user?->name ?? '') }}"
                            required
                            style="width:100%; padding:12px 14px; border:1px solid #d1d5db; border-radius:10px; outline:none;"
                        >
                    </div>

                    <div>
                        <label style="display:block; margin-bottom:8px; font-weight:600;">Tanggal Lahir</label>
                        <input
                            type="date"
                            name="tanggal_lahir"
                            value="{{ old('tanggal_lahir', $user?->tanggal_lahir ?? '') }}"
                            required
                            style="width:100%; padding:12px 14px; border:1px solid #d1d5db; border-radius:10px; outline:none;"
                        >
                    </div>

                    <div>
                        <label style="display:block; margin-bottom:8px; font-weight:600;">Jenis Kelamin</label>
                        <select
                            name="jenis_kelamin"
                            required
                            style="width:100%; padding:12px 14px; border:1px solid #d1d5db; border-radius:10px; outline:none; background:white;"
                        >
                            <option value="">Pilih Jenis Kelamin</option>
                            <option value="Laki-laki" {{ old('jenis_kelamin', $user?->jenis_kelamin ?? '') == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                            <option value="Perempuan" {{ old('jenis_kelamin', $user?->jenis_kelamin ?? '') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                        </select>
                    </div>

                    <div>
                        <label style="display:block; margin-bottom:8px; font-weight:600;">Nomor Telepon</label>
                        <input
                            type="text"
                            name="nomor_telepon"
                            value="{{ old('nomor_telepon', $user?->nomor_telepon ?? '') }}"
                            required
                            placeholder="08xxxxxxxxxx"
                            style="width:100%; padding:12px 14px; border:1px solid #d1d5db; border-radius:10px; outline:none;"
                        >
                    </div>

                    <div>
                        <label style="display:block; margin-bottom:8px; font-weight:600;">Email</label>
                        <input
                            type="email"
                            name="email"
                            value="{{ old('email', $user?->email ?? '') }}"
                            required
                            style="width:100%; padding:12px 14px; border:1px solid #d1d5db; border-radius:10px; outline:none;"
                        >
                    </div>

                    <div style="margin-top: 10px;">
                        <button class="btn" type="submit">Simpan Data</button>
                    </div>
                </div>
            </form>
        </section>
    </div>
@endif