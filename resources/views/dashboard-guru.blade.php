<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>IsyaratKita - Dashboard Guru</title>

  {{-- Google Font (Poppins) --}}
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

  {{-- CSS dari public/css --}}
  <link rel="stylesheet" href="{{ asset('css/dashboard-guru.css') }}">
  
  {{-- Tambahan CSS untuk tabel --}}
  <style>
    .data-table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 10px;
    }
    
    .data-table th {
      text-align: left;
      padding: 12px 8px;
      background: #F0F3FE;
      color: #2D3C6A;
      font-weight: 600;
      font-size: 13px;
      border-radius: 8px 8px 0 0;
    }
    
    .data-table td {
      padding: 12px 8px;
      border-bottom: 1px solid #EDF2F7;
      font-size: 14px;
    }
    
    .data-table tr:hover {
      background: #F8F9FF;
    }
    
    .data-table .badge-success {
      background: #E3FCEF;
      color: #0A7B4B;
      padding: 4px 8px;
      border-radius: 30px;
      font-size: 12px;
      font-weight: 600;
    }
    
    .data-table .badge-warning {
      background: #FFF3E0;
      color: #B45B0A;
      padding: 4px 8px;
      border-radius: 30px;
      font-size: 12px;
      font-weight: 600;
    }
    
    .progress-mini {
      width: 60px;
      height: 6px;
      background: #EDF2F7;
      border-radius: 10px;
      overflow: hidden;
      display: inline-block;
      margin-right: 8px;
    }
    
    .progress-mini-fill {
      height: 100%;
      background: #2D3C6A;
      border-radius: 10px;
    }
    
    .flex-between {
      display: flex;
      align-items: center;
      justify-content: space-between;
    }
    
    .table-title {
      font-weight: 600;
      color: #1A1F36;
      margin-bottom: 5px;
    }
    
    .table-subtitle {
      font-size: 13px;
      color: #7A8BB7;
    }
    
    .card-header-with-link {
      display: flex;
      justify-content: space-between;
      align-items: center;
      width: 100%;
    }
  </style>
</head>

<body>
  <div class="app">

    <!-- SIDEBAR -->
    <aside class="sidebar">
      <div class="brand">
        <img class="logo-img" src="{{ asset('img/HANYA LOGO - Salin.png') }}" alt="Logo">
        <div class="brand-text">
          <div class="brand-name">IsyaratKita</div>
          <div class="brand-sub">Dashboard Guru</div>
        </div>
      </div>

      <nav class="menu">
        <a class="menu-item active" href="{{ url('/dashboard-guru') }}">
          <img class="menu-icon" src="{{ asset('img/dashboard-square-01.png') }}" alt="">
          Dashboard
        </a>
        <a class="menu-item" href="#">
          <img class="menu-icon" src="{{ asset('img/katalog.png') }}" alt="">
          Kelola Paket
        </a>
        <a class="menu-item" href="#">
          <img class="menu-icon" src="{{ asset('img/materi.png') }}" alt="">
          Kelola Video
        </a>
        <a class="menu-item" href="#">
          <img class="menu-icon" src="{{ asset('img/kuis.png') }}" alt="">
          Kelola Kuis
        </a>
        <a class="menu-item" href="#">
          <img class="menu-icon" src="{{ asset('img/user.png') }}" alt="">
          Monitoring Murid
        </a>
        <a class="menu-item" href="#">
          <img class="menu-icon" src="{{ asset('img/feedback.png') }}" alt="">
          Feedback & Rating
        </a>
        <a class="menu-item" href="#">
          <img class="menu-icon" src="{{ asset('img/transaction-history.png') }}" alt="">
          Transaksi
        </a>
        <a class="menu-item" href="#">
          <img class="menu-icon" src="{{ asset('img/user.png') }}" alt="">
          Profil Guru
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

      <!-- Greeting -->
      <div class="greet">
        <h1>Halo, <span class="name">[Nama Guru]</span> 👋</h1>
        <p>Pantau aktivitas murid dan kelola materi pembelajaran bahasa isyaratmu! 📚</p>
      </div>

      <!-- STATS CARDS (3 KOTAK) -->
      <div class="stats-row">
        <div class="stat-card">
          <div class="stat-icon">
            <img src="{{ asset('img/materi.png') }}" alt="">
          </div>
          <div class="stat-content">
            <div class="stat-value">24</div>
            <div class="stat-label">Total Video</div>
          </div>
        </div>

        <div class="stat-card">
          <div class="stat-icon">
            <img src="{{ asset('img/user.png') }}" alt="">
          </div>
          <div class="stat-content">
            <div class="stat-value">1.200</div>
            <div class="stat-label">Total Murid</div>
          </div>
        </div>

        <div class="stat-card">
          <div class="stat-icon">
            <img src="{{ asset('img/feedback.png') }}" alt="">
          </div>
          <div class="stat-content">
            <div class="stat-value">4.8</div>
            <div class="stat-label">Rata-rata Rating</div>
          </div>
        </div>
      </div>

      <!-- Row: Aktivitas Terbaru + Buat Materi -->
      <div class="grid-2">

        <!-- Aktivitas Terbaru Murid -->
        <section class="card">
          <div class="card-head">
            <h2>Aktivitas Terbaru Murid</h2>
            <span class="badge">Terbaru</span>
          </div>

          <div class="activity-list">
            <div class="activity-item">
              <div class="activity-avatar">
                <img src="{{ asset('img/user.png') }}" alt="">
              </div>
              <div class="activity-content">
                <div class="activity-name">[Nama Murid]</div>
                <div class="activity-desc">Mengakses Paket Dasar</div>
                <div class="activity-time">1 hari yang lalu</div>
              </div>
            </div>

            <div class="activity-item">
              <div class="activity-avatar">
                <img src="{{ asset('img/user.png') }}" alt="">
              </div>
              <div class="activity-content">
                <div class="activity-name">[Nama Murid]</div>
                <div class="activity-desc">Selesai Kuis [Judul Kuis], Skor: 90</div>
                <div class="activity-time">2 hari yang lalu</div>
              </div>
            </div>

            <div class="activity-item">
              <div class="activity-avatar">
                <img src="{{ asset('img/user.png') }}" alt="">
              </div>
              <div class="activity-content">
                <div class="activity-name">[Nama Murid]</div>
                <div class="activity-desc">Menyelesaikan Paket Dasar</div>
                <div class="activity-time">3 hari yang lalu</div>
              </div>
            </div>

            <div class="activity-item">
              <div class="activity-avatar">
                <img src="{{ asset('img/user.png') }}" alt="">
              </div>
              <div class="activity-content">
                <div class="activity-name">[Nama Murid]</div>
                <div class="activity-desc">Memberi rating 5 ⭐</div>
                <div class="activity-time">4 hari yang lalu</div>
              </div>
            </div>
          </div>

          <div class="card-foot">
            <a class="link" href="#">Lihat Semua Aktivitas ›</a>
          </div>
        </section>

        <!-- Buat Materi Baru -->
        <section class="card create-card">
          <div class="card-head">
            <h2>Buat Materi Baru</h2>
          </div>
          
          <div class="create-content">
            <div class="create-icon">
              <img src="{{ asset('img/upload.png') }}" alt="">
            </div>
            <div class="create-text">
              Upload dan kelola video pembelajaran bahasa isyaratmu!
            </div>
            <button class="btn btn-large">+ Tambah Materi</button>
          </div>

          <div class="quick-stats">
            <div class="quick-stat">
              <div class="quick-value">5</div>
              <div class="quick-label">Paket Dibuat</div>
            </div>
            <div class="quick-stat">
              <div class="quick-value">24</div>
              <div class="quick-label">Total Video</div>
            </div>
            <div class="quick-stat">
              <div class="quick-value">1.2k</div>
              <div class="quick-label">Total Murid</div>
            </div>
            <div class="quick-stat">
              <div class="quick-value">4.8</div>
              <div class="quick-label">Rating</div>
            </div>
          </div>
        </section>
      </div>

      <!-- TABEL VIDEO TERPOPULER & RATING TERBARU -->
      <div class="grid-2" style="margin-top: 20px;">
        
        <!-- TABLE: Video Terpopuler -->
        <section class="card">
          <div class="card-head">
            <div class="card-header-with-link">
              <h2>🎥 Video Terpopuler</h2>
              <a class="link" href="#">Lihat Semua ›</a>
            </div>
          </div>
          
          <table class="data-table">
            <thead>
              <tr>
                <th>Judul Video</th>
                <th>Paket</th>
                <th>Penonton</th>
                <th>Selesai</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <div class="table-title">Pengenalan Alfabet</div>
                  <div class="table-subtitle">Video 1 • 8 menit</div>
                </td>
                <td>Paket Dasar</td>
                <td><strong>156</strong> <span style="color:#7A8BB7; font-size:12px;">murid</span></td>
                <td>
                  <div class="flex-between">
                    <span>78%</span>
                    <div class="progress-mini">
                      <div class="progress-mini-fill" style="width:78%"></div>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="table-title">Angka 1-10</div>
                  <div class="table-subtitle">Video 3 • 10 menit</div>
                </td>
                <td>Paket Dasar</td>
                <td><strong>142</strong> <span style="color:#7A8BB7; font-size:12px;">murid</span></td>
                <td>
                  <div class="flex-between">
                    <span>82%</span>
                    <div class="progress-mini">
                      <div class="progress-mini-fill" style="width:82%"></div>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="table-title">Salam & Sapaan</div>
                  <div class="table-subtitle">Video 2 • 15 menit</div>
                </td>
                <td>Paket Profesional</td>
                <td><strong>98</strong> <span style="color:#7A8BB7; font-size:12px;">murid</span></td>
                <td>
                  <div class="flex-between">
                    <span>65%</span>
                    <div class="progress-mini">
                      <div class="progress-mini-fill" style="width:65%"></div>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="table-title">Kata Sehari-hari</div>
                  <div class="table-subtitle">Video 5 • 12 menit</div>
                </td>
                <td>Paket Profesional</td>
                <td><strong>87</strong> <span style="color:#7A8BB7; font-size:12px;">murid</span></td>
                <td>
                  <div class="flex-between">
                    <span>71%</span>
                    <div class="progress-mini">
                      <div class="progress-mini-fill" style="width:71%"></div>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="table-title">Warna & Bentuk</div>
                  <div class="table-subtitle">Video 4 • 7 menit</div>
                </td>
                <td>Paket Dasar</td>
                <td><strong>76</strong> <span style="color:#7A8BB7; font-size:12px;">murid</span></td>
                <td>
                  <div class="flex-between">
                    <span>88%</span>
                    <div class="progress-mini">
                      <div class="progress-mini-fill" style="width:88%"></div>
                    </div>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
          
          <div class="card-foot" style="margin-top: 15px;">
            <span style="color:#7A8BB7; font-size:13px;">Total 12 video • Update 2 jam lalu</span>
          </div>
        </section>

        <!-- TABLE: Rating Terbaru (dengan format tabel) -->
        <section class="card">
          <div class="card-head">
            <div class="card-header-with-link">
              <h2>⭐ Rating Terbaru</h2>
              <a class="link" href="#">Lihat Semua ›</a>
            </div>
          </div>
          
          <table class="data-table">
            <thead>
              <tr>
                <th>Murid</th>
                <th>Rating</th>
                <th>Ulasan</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <div class="table-title">Andi Saputra</div>
                  <div class="table-subtitle">2 hari lalu</div>
                </td>
                <td>
                  <span style="color: #FFB800;">⭐⭐⭐⭐⭐</span>
                  <span style="color:#2D3C6A; font-weight:600; margin-left:5px;">5.0</span>
                </td>
                <td>
                  <div style="max-width: 180px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                    "Mantap banget penjelasannya!"
                  </div>
                </td>
                <td>
                  <span class="badge-success">Baru</span>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="table-title">Siti Nurhaliza</div>
                  <div class="table-subtitle">5 hari lalu</div>
                </td>
                <td>
                  <span style="color: #FFB800;">⭐⭐⭐⭐</span>
                  <span style="color:#2D3C6A; font-weight:600; margin-left:5px;">4.0</span>
                </td>
                <td>
                  <div style="max-width: 180px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                    "Bagus, tapi kurang cepat"
                  </div>
                </td>
                <td>
                  <span class="badge-warning">Perlu respon</span>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="table-title">Budi Santoso</div>
                  <div class="table-subtitle">1 minggu lalu</div>
                </td>
                <td>
                  <span style="color: #FFB800;">⭐⭐⭐⭐⭐</span>
                  <span style="color:#2D3C6A; font-weight:600; margin-left:5px;">5.0</span>
                </td>
                <td>
                  <div style="max-width: 180px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                    "Gurunya asik, mudah dipahami"
                  </div>
                </td>
                <td>
                  <span style="color:#7A8BB7; font-size:12px;">-</span>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="table-title">Dewi Lestari</div>
                  <div class="table-subtitle">1 minggu lalu</div>
                </td>
                <td>
                  <span style="color: #FFB800;">⭐⭐⭐⭐</span>
                  <span style="color:#2D3C6A; font-weight:600; margin-left:5px;">4.0</span>
                </td>
                <td>
                  <div style="max-width: 180px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                    "Tolong tambahin materi isyarat daerah"
                  </div>
                </td>
                <td>
                  <span style="color:#7A8BB7; font-size:12px;">-</span>
                </td>
              </tr>
            </tbody>
          </table>
          
          <div class="card-foot" style="margin-top: 15px;">
            <span style="color:#7A8BB7; font-size:13px;">Rata-rata rating: 4.8 dari 128 ulasan</span>
          </div>
        </section>
      </div>

    </main>
  </div>
</body>
</html>