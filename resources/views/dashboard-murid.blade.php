<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>IsyaratKita - Dashboard Murid</title>
  <link rel="stylesheet" href="{{ asset('css/dashboard-murid.css') }}">
</head>
<body>

  <!-- Navbar -->
  <header class="navbar">
    <div class="nav-left">
      <div class="logo-circle">IK</div>
      <span class="brand">IsyaratKita</span>
    </div>

    <nav class="nav-mid">
      <a href="#" class="nav-link">Dashboard</a>
      <a href="#" class="nav-link">Video Materi</a>
      <a href="#" class="nav-link">Kuis</a>
      <a href="#" class="nav-link">History</a>
      <a href="#" class="nav-link">Profil</a>
    </nav>

    <div class="nav-right">
      <div class="user-chip">
        <div class="user-avatar">NR</div>
        <div class="user-meta">
          <div class="user-name">Naysila</div>
          <div class="user-role">Murid</div>
        </div>
      </div>
      <button class="btn-primary">Keluar</button>
    </div>
  </header>

  <main class="container">

    <!-- Banner gradient -->
    <section class="hero">
      <h1>Halo, [nama kamu] </h1>
      <p>
        Lanjutkan belajar BISINDO hari ini. Kamu sudah dekat menyelesaikan level dasar.
      </p>

      <div class="hero-actions">
        <button class="btn-primary">Lanjut Belajar</button>
        <button class="btn-outline">Lihat Paket</button>
      </div>
    </section>

    <!-- Ringkasan cepat -->
    <section class="stats">
      <div class="stat-card">
        <div class="stat-title">Paket Aktif</div>
        <div class="stat-value">Premium</div>
        <div class="stat-sub">Akses berlaku: 6 bulan</div>
      </div>

      <div class="stat-card">
        <div class="stat-title">Progres Belajar</div>
        <div class="stat-value">68%</div>
        <div class="progress">
          <div class="bar" style="width:68%"></div>
        </div>
        <div class="stat-sub">3 materi lagi untuk naik level</div>
      </div>

      <div class="stat-card">
        <div class="stat-title">Nilai Kuis Terakhir</div>
        <div class="stat-value">85</div>
        <div class="stat-sub">Topik: Kosakata Sehari-hari</div>
      </div>
    </section>

    <!-- Konten 2 kolom -->
    <section class="grid-2">

      <!-- Video terbaru -->
      <section class="panel">
        <div class="panel-head">
          <h2>Video Terbaru</h2>
          <a href="#" class="link">Lihat semua</a>
        </div>

        <div class="list">
          <div class="item">
            <div class="thumb">▶</div>
            <div class="item-info">
              <div class="item-title">Abjad A–E (Dasar)</div>
              <div class="item-sub">Durasi: 07:15 • Level: Dasar</div>
            </div>
            <button class="btn-mini">Tonton</button>
          </div>

          <div class="item">
            <div class="thumb">▶</div>
            <div class="item-info">
              <div class="item-title">Angka 1–10</div>
              <div class="item-sub">Durasi: 05:40 • Level: Dasar</div>
            </div>
            <button class="btn-mini">Tonton</button>
          </div>

          <div class="item">
            <div class="thumb">▶</div>
            <div class="item-info">
              <div class="item-title">Sapaan Sehari-hari</div>
              <div class="item-sub">Durasi: 08:05 • Level: Dasar</div>
            </div>
            <button class="btn-mini">Tonton</button>
          </div>
        </div>

        <div class="panel-note">
          <b>Tips:</b> Setelah menonton video, kerjakan kuis untuk mengunci pemahaman.
        </div>
      </section>

      <!-- Quick actions -->
      <section class="panel">
        <div class="panel-head">
          <h2>Menu Cepat</h2>
          <span class="pill">Akses Murid</span>
        </div>

        <div class="quick">
          <a class="quick-card" href="#">
            <div class="quick-title">Kategori Bulanan</div>
            <div class="quick-sub">Lihat materi per kategori</div>
          </a>

          <a class="quick-card" href="#">
            <div class="quick-title">Detail Paket</div>
            <div class="quick-sub">Info paket & masa aktif</div>
          </a>

          <a class="quick-card" href="#">
            <div class="quick-title">Transaksi</div>
            <div class="quick-sub">Riwayat pembelian paket</div>
          </a>

          <a class="quick-card" href="#">
            <div class="quick-title">Pembayaran</div>
            <div class="quick-sub">Konfirmasi pembayaran</div>
          </a>

          <a class="quick-card" href="#">
            <div class="quick-title">Feedback</div>
            <div class="quick-sub">Nilai video & pengajar</div>
          </a>

          <a class="quick-card" href="#">
            <div class="quick-title">Forum Diskusi</div>
            <div class="quick-sub">Tanya jawab & komunitas</div>
          </a>
        </div>
      </section>
    </section>

    <!-- History & Progres -->
    <section class="grid-2">

      <section class="panel">
        <div class="panel-head">
          <h2>History Singkat</h2>
          <a href="#" class="link">Buka History</a>
        </div>

        <div class="table-wrap">
          <table>
            <thead>
              <tr>
                <th>Tanggal</th>
                <th>Aktivitas</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>26 Feb</td>
                <td>Menonton “Abjad A–E”</td>
                <td><span class="badge done">Selesai</span></td>
              </tr>
              <tr>
                <td>25 Feb</td>
                <td>Kuis “Kosakata”</td>
                <td><span class="badge done">Nilai 85</span></td>
              </tr>
              <tr>
                <td>24 Feb</td>
                <td>Transaksi Paket Premium</td>
                <td><span class="badge pending">Diproses</span></td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>

      <section class="panel">
        <div class="panel-head">
          <h2>Target Mingguan</h2>
          <span class="pill">Progres</span>
        </div>

        <div class="target">
          <div class="target-row">
            <div>
              <div class="target-title">Video Ditonton</div>
              <div class="target-sub">Target 5 video/minggu</div>
            </div>
            <div class="target-right">
              <div class="target-number">3/5</div>
              <div class="mini-progress">
                <div class="mini-bar" style="width:60%"></div>
              </div>
            </div>
          </div>

          <div class="target-row">
            <div>
              <div class="target-title">Kuis Dikerjakan</div>
              <div class="target-sub">Target 3 kuis/minggu</div>
            </div>
            <div class="target-right">
              <div class="target-number">1/3</div>
              <div class="mini-progress">
                <div class="mini-bar" style="width:33%"></div>
              </div>
            </div>
          </div>

          <div class="target-row">
            <div>
              <div class="target-title">Forum / Diskusi</div>
              <div class="target-sub">Target 2 aktivitas/minggu</div>
            </div>
            <div class="target-right">
              <div class="target-number">0/2</div>
              <div class="mini-progress">
                <div class="mini-bar" style="width:0%"></div>
              </div>
            </div>
          </div>

          <div class="cta-box">
            <div>
              <div class="cta-title">Mau makin cepat naik level?</div>
              <div class="cta-sub">Kerjakan 1 video + 1 kuis per hari.</div>
            </div>
            <button class="btn-primary">Mulai Sekarang</button>
          </div>
        </div>
      </section>

    </section>

    <!-- FORM UPLOAD BUKTI PEMBAYARAN (TEXT + FILE) -->
    <section class="panel form-panel" style="margin-top:14px;">
      <div class="panel-head">
        <h2>Upload Bukti Pembayaran</h2>
        <span class="pill">Form Murid</span>
      </div>

      <!-- Kalau Laravel, aktifkan @csrf -->
      <form action="/upload-bukti" method="POST" enctype="multipart/form-data" class="payment-form">
        <!-- Laravel only: -->
        @csrf

        <div class="form-group">
          <label>Nama Lengkap</label>
          <input type="text" name="nama" placeholder="Masukkan nama lengkap" required>
        </div>

        <div class="form-group">
          <label>Nomor Transaksi</label>
          <input type="text" name="transaksi" placeholder="Contoh: TRX-00123" required>
        </div>

        <div class="form-group">
          <label>Upload Bukti (jpg/png/pdf)</label>
          <input type="file" name="bukti" accept=".jpg,.jpeg,.png,.pdf" required>
        </div>

        <button type="submit" class="btn-primary">Kirim Bukti</button>
      </form>
    </section>

    <footer class="footer">
      © 2026 IsyaratKita • Dashboard Murid
    </footer>

  </main>
</body>
</html>