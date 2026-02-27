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
  <div class="brand-badge">IK</div>
  <div class="brand-sub">Dashboard Murid</div>
</div>

      <nav class="menu">
        <a class="menu-item active" href="{{ url('/dashboard-murid') }}">
  <img class="menu-icon" src="{{ asset('img/dashboard-square-01.png') }}" alt="">
  Dashboard
</a>

<a class="menu-item" href="#">
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

      <div class="sidebar-footer">
        <a class="menu-item danger" href="/login">↩ Logout</a>
      </div>
    </aside>

    <!-- MAIN -->
    <main class="main">

      <!-- TOPBAR -->
      <header class="topbar">
  <div class="search">
    <input type="text" placeholder="Search..." />
    <span class="search-icon">🔎</span>
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
        <!-- Greeting -->
        <div class="greet">
          <h1>Halo, <span class="name">[Nama Murid]</span> 👋</h1>
          <p>Yuk, lanjutkan belajar bahasa isyaratmu! ⭐</p>
        </div>

        <!-- Row: Progress + Paket -->
        <div class="grid-2">

          <!-- Progress -->
          <section class="card">
            <div class="card-head">
              <h2>Welcome/Progress</h2>
            </div>

            <div class="progress-row">
              <div class="label">Progress Belajar Hari Ini</div>
              <div class="percent">60%</div>
            </div>

            <div class="progress-bar">
              <div class="progress-fill" style="width:60%"></div>
            </div>

            <div class="stats-mini">
              <div class="stat"><b>12</b> Video Dipelajari</div>
              <div class="sep">|</div>
              <div class="stat">Skor Kuis: <b>80</b></div>
              <div class="sep">|</div>
              <div class="stat">Statistik lain?</div>
            </div>

            <div class="graph">
              <div class="graph-title">Grafik Progress Belajar (opsional)</div>
              <div class="graph-box"></div>
            </div>
          </section>

          <!-- Paket yang Dimiliki -->
          <section class="card">
            <div class="card-head">
              <h2>Paket yang Dimiliki</h2>
            </div>

            <div class="paket-grid">
              <div class="paket-card">
                <div class="paket-title">Paket Dasar</div>
                <div class="paket-sub">200 hari tersisa</div>
                <ul class="paket-list">
                  <li>Preview thumbnail</li>
                  <li>judul paket, deskripsi singkat paket</li>
                  <li><b>Aktif</b></li>
                </ul>
                <button class="btn">Lanjut Belajar</button>
              </div>

              <div class="paket-card">
                <div class="paket-title">Paket Profesional</div>
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
              <a class="link" href="#">Lihat Semua Paket ›</a>
            </div>
          </section>
        </div>

        <!-- Rekomendasi -->
        <div class="section-head">
          <h3>Rekomendasi Materi untuk <span class="name">[Nama Murid]</span>:</h3>
          <a class="link" href="#">Lihat Semua Materi</a>
        </div>

        <div class="grid-3">
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
            <div class="materi-tag">Materi Selanjutnya (Isi Paket Dasar)</div>
            <div class="materi-body">
              <div class="thumb"></div>
              <div class="materi-info">
                <div class="materi-title">Judul atau Deskripsi Materi</div>
                <div class="materi-time">⏱ 8 Menit</div>
              </div>
            </div>
            <button class="btn full">Lanjutkan Belajar</button>
          </section>

          <section class="card materi-card locked">
            <div class="materi-tag">Coba Paket Profesional!</div>
            <div class="materi-body">
              <div class="thumb lock"></div>
              <div class="materi-info">
                <div class="materi-title">Thumbshul Video</div>
                <div class="materi-time">⏱ 8 Menit</div>
              </div>
            </div>
            <button class="btn full outline">Lihat Paket Profesional</button>
          </section>
        </div>

        <!-- FORM (requirement text + file) -->
        <div class="section-head" style="margin-top:18px;">
          <h3>Upload Bukti Pembayaran</h3>
          <span class="badge">Form</span>
        </div>

        <section class="card">
          <form class="pay-form" action="/upload-bukti" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-grid">
              <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" name="nama" placeholder="Masukkan nama lengkap" required>
              </div>

              <div class="form-group">
                <label>Nomor Transaksi</label>
                <input type="text" name="transaksi" placeholder="Contoh: TRX-00123" required>
              </div>

              <div class="form-group full">
                <label>Upload Bukti (jpg/png/pdf)</label>
                <input type="file" name="bukti" accept=".jpg,.jpeg,.png,.pdf" required>
              </div>
            </div>

            <button class="btn" type="submit">Kirim Bukti</button>
          </form>
        </section>

      </section>
    </main>
  </div>
</body>
</html>