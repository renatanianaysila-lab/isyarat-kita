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
  <link rel="stylesheet" href="{{ asset('css/dashboard/dashboard-content-guru.css') }}">
</head>
<body>
<div class="dashboard-container">
  <!-- GREETING -->
  <div class="greeting-section">
    <h1>Halo, <span class="teacher-name">Renata Nian Naysila</span> 👋</h1>
    <p>Pantau aktivitas murid dan kelola materi pembelajaran bahasa isyaratmu! 📚✨</p>
  </div>

  <!-- STATS CARDS -->
  <div class="stats-row">
    <div class="stat-card">
      <div class="stat-icon">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
          <rect x="2" y="4" width="20" height="16" rx="2" />
          <line x1="2" y1="8" x2="22" y2="8" />
        </svg>
      </div>
      <div class="stat-content">
        <div class="stat-value">32</div>
        <div class="stat-label">Total Video</div>
      </div>
    </div>
    <div class="stat-card">
      <div class="stat-icon">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
          <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2" />
          <circle cx="12" cy="7" r="4" />
        </svg>
      </div>
      <div class="stat-content">
        <div class="stat-value">1.384</div>
        <div class="stat-label">Total Murid</div>
      </div>
    </div>
    <div class="stat-card">
      <div class="stat-icon">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
          <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
        </svg>
      </div>
      <div class="stat-content">
        <div class="stat-value">4.85</div>
        <div class="stat-label">Rata-rata Rating</div>
      </div>
    </div>
  </div>

  <!-- ROW: AKTIVITAS + BUAT MATERI -->
  <div class="grid-2cols">
    <!-- Kiri: Aktivitas Terbaru Murid -->
    <div class="card">
      <div class="card-header">
        <h2>Aktivitas Terbaru Murid</h2>
        <span class="badge-new">Terbaru</span>
      </div>
      <div class="activity-feed">
        <div class="activity-row">
          <div class="activity-avatar">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#2D3C6A" stroke-width="1.6">
              <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2" />
              <circle cx="12" cy="7" r="4" />
            </svg>
          </div>
          <div class="activity-details">
            <div class="activity-name">Rina Safitri</div>
            <div class="activity-action">Mengakses Paket Gratis • Video "Huruf A-Z"</div>
            <div class="activity-time">1 hari yang lalu</div>
          </div>
        </div>
        <div class="activity-row">
          <div class="activity-avatar">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#2D3C6A" stroke-width="1.6">
              <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2" />
              <circle cx="12" cy="7" r="4" />
            </svg>
          </div>
          <div class="activity-details">
            <div class="activity-name">Budi Prasetyo</div>
            <div class="activity-action">Selesai Kuis [Alfabet Isyarat], Skor: 95</div>
            <div class="activity-time">2 hari yang lalu</div>
          </div>
        </div>
        <div class="activity-row">
          <div class="activity-avatar">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#2D3C6A" stroke-width="1.6">
              <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2" />
              <circle cx="12" cy="7" r="4" />
            </svg>
          </div>
          <div class="activity-details">
            <div class="activity-name">Citra Amelia</div>
            <div class="activity-action">Menyelesaikan Paket Profesional • 100% tonton</div>
            <div class="activity-time">3 hari yang lalu</div>
          </div>
        </div>
        <div class="activity-row">
          <div class="activity-avatar">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#2D3C6A" stroke-width="1.6">
              <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2" />
              <circle cx="12" cy="7" r="4" />
            </svg>
          </div>
          <div class="activity-details">
            <div class="activity-name">Dian Nuraeni</div>
            <div class="activity-action">Memberi rating 5 ⭐ & ulasan positif</div>
            <div class="activity-time">4 hari yang lalu</div>
          </div>
        </div>
      </div>
      <div class="card-footer-border">
        <a href="#" class="link-soft" id="lihatSemuaAktivitasBtn">Lihat Semua Aktivitas ›</a>
      </div>
    </div>

    <!-- Kanan: Buat Materi Baru -->
    <div class="card premium-create-card">
      <div class="card-header">
        <h2>Buat Materi Baru</h2>
        <span style="opacity:0.6; font-size:12px;">📹</span>
      </div>
      <div class="create-center">
        <div class="upload-icon-circle">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
            <path d="M12 3v12m0 0-3-3m3 3 3-3" />
            <rect x="2" y="5" width="20" height="14" rx="2" />
          </svg>
        </div>
        <div class="create-desc">Upload dan kelola video pembelajaran bahasa isyaratmu!</div>
        <button class="btn-primary-white" id="tambahMateriBtn">+ Tambah Materi</button>
      </div>
      <div class="stats-mini">
        <div class="stat-mini-item"><div class="stat-mini-value">5</div><div class="stat-mini-label">Paket Dibuat</div></div>
        <div class="stat-mini-item"><div class="stat-mini-value">32</div><div class="stat-mini-label">Total Video</div></div>
        <div class="stat-mini-item"><div class="stat-mini-value">1.4k</div><div class="stat-mini-label">Total Murid</div></div>
        <div class="stat-mini-item"><div class="stat-mini-value">4.85</div><div class="stat-mini-label">Rating</div></div>
      </div>
    </div>
  </div>

  <!-- ROW KEDUA: VIDEO TERPOPULER + RATING TERBARU -->
  <div class="grid-2cols">
    <!-- Video Terpopuler -->
    <div class="card">
      <div class="card-header">
        <div style="display: flex; justify-content: space-between; width: 100%; align-items: center;">
          <h2>🎥 Video Terpopuler</h2>
          <a href="#" class="link-soft" id="lihatSemuaVideoBtn">Lihat Semua ›</a>
        </div>
      </div>
      <table class="video-table">
        <thead>
          <tr><th>Judul Video</th><th>Paket</th><th>Penonton</th><th>Selesai</th></tr>
        </thead>
        <tbody>
          <tr>
            <td><div class="title-with-meta">Pengenalan Alfabet</div><div class="meta-small">Video 1 • 8 menit</div></td>
            <td>Paket Gratis</div></td>
            <td><strong>156</strong> <span class="text-muted">murid</span></div></td>
            <td><div class="flex-between"><span>78%</span><div class="progress-bar-mini"><div class="progress-fill" style="width:78%"></div></div></div></div></td>
          </tr>
          <tr>
            <td><div class="title-with-meta">Angka 1-10</div><div class="meta-small">Video 3 • 10 menit</div></div></td>
            <td>Paket Gratis</div></div></td>
            <td><strong>142</strong> <span class="text-muted">murid</span></div></div></td>
            <td><div class="flex-between"><span>82%</span><div class="progress-bar-mini"><div class="progress-fill" style="width:82%"></div></div></div></div></div></td>
          </tr>
          <tr>
            <td><div class="title-with-meta">Salam & Sapaan</div><div class="meta-small">Video 2 • 15 menit</div></div></div></td>
            <td>Paket Premium</div></div></div></td>
            <td><strong>98</strong> <span class="text-muted">murid</span></div></div></div></td>
            <td><div class="flex-between"><span>65%</span><div class="progress-bar-mini"><div class="progress-fill" style="width:65%"></div></div></div></div></div></div></td>
          </tr>
          <tr>
            <td><div class="title-with-meta">Percakapan Sehari-hari</div><div class="meta-small">Video 5 • 12 menit</div></div></div></td>
            <td>Paket Premium</div></div></div></td>
            <td><strong>87</strong> <span class="text-muted">murid</span></div></div></div></td>
            <td><div class="flex-between"><span>71%</span><div class="progress-bar-mini"><div class="progress-fill" style="width:71%"></div></div></div></div></div></div></td>
          </tr>
          <tr>
            <td><div class="title-with-meta">Warna & Bentuk</div><div class="meta-small">Video 4 • 7 menit</div></div></div></td>
            <td>Paket Premium</div></div></div></td>
            <td><strong>76</strong> <span class="text-muted">murid</span></div></div></div></td>
            <td><div class="flex-between"><span>88%</span><div class="progress-bar-mini"><div class="progress-fill" style="width:88%"></div></div></div></div></div></div></td>
          </tr>
        </tbody>
      </table>
      <div class="card-footer-note">Total 12 video • Update 2 jam lalu</div>
    </div>

    <!-- Rating Terbaru -->
    <div class="card">
      <div class="card-header">
        <div style="display: flex; justify-content: space-between; width: 100%; align-items: center;">
          <h2>⭐ Rating Terbaru</h2>
          <a href="#" class="link-soft" id="lihatSemuaRatingBtn">Lihat Semua ›</a>
        </div>
      </div>
      <table class="review-table">
        <thead>
          <tr><th>Murid</th><th>Rating</th><th>Ulasan</th><th></th></tr>
        </thead>
        <tbody>
          <tr>
            <td><div class="title-with-meta">Eka Wijaya</div><div class="meta-small">2 hari lalu</div></div></td>
            <td><span class="rating-stars">★★★★★</span> <strong>5.0</strong></div></div></td>
            <td><span style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; display: inline-block; max-width: 160px;">"Mantap banget penjelasannya!"</span></div></div></td>
            <td><span class="badge-green">Baru</span></div></div></td>
          </tr>
          <tr>
            <td><div class="title-with-meta">Fitri Handayani</div><div class="meta-small">5 hari lalu</div></div></div></td>
            <td><span class="rating-stars">★★★★☆</span> <strong>4.0</strong></div></div></td>
            <td><span style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; display: inline-block; max-width: 160px;">"Bagus, tapi kurang cepat"</span></div></div></td>
            <td><span class="badge-amber">Perlu respon</span></div></div></td>
          </tr>
          <tr>
            <td><div class="title-with-meta">Gilang Ramadhan</div><div class="meta-small">1 minggu lalu</div></div></div></td>
            <td><span class="rating-stars">★★★★★</span> <strong>5.0</strong></div></div></td>
            <td><span style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; display: inline-block; max-width: 160px;">"Gurunya asik, mudah dipahami"</span></div></div></td>
            <td><span class="text-muted">-</span></div></div></td>
          </tr>
          <tr>
            <td><div class="title-with-meta">Hani Safitri</div><div class="meta-small">1 minggu lalu</div></div></div></td>
            <td><span class="rating-stars">★★★★☆</span> <strong>4.0</strong></div></div></td>
            <td><span style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; display: inline-block; max-width: 160px;">"Tolong tambahin materi isyarat daerah"</span></div></div></td>
            <td><span class="text-muted">-</span></div></div></td>
          </tr>
        </tbody>
      </table>
      <div class="card-footer-note">Rata-rata rating: 4.8 dari 128 ulasan</div>
    </div>
  </div>
</div>

<!-- MODAL UPLOAD MATERI -->
<div id="uploadModal" class="modal">
  <div class="modal-content">
    <div class="modal-header">
      <h3>📤 Upload Materi Baru</h3>
      <span class="modal-close">&times;</span>
    </div>
    <div class="modal-body">
      <form id="uploadForm" enctype="multipart/form-data">
        <div class="form-group">
          <label>Judul Video</label>
          <input type="text" id="judulVideo" placeholder="Contoh: Huruf A, Salam Pagi, Angka 1-10" required>
        </div>
        <div class="form-group">
          <label>Upload File Video</label>
          <div class="file-upload-area" id="fileUploadArea">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#7A8BB7" stroke-width="1.5">
              <path d="M12 3v12m0 0-3-3m3 3 3-3" />
              <rect x="2" y="5" width="20" height="14" rx="2" />
            </svg>
            <p>Klik atau drag & drop file video</p>
            <span class="file-hint">MP4, MOV, AVI (Max 500MB)</span>
            <input type="file" id="fileVideo" accept="video/mp4,video/mov,video/avi,video/mkv,video/webm" style="display:none">
          </div>
          <div id="fileNameDisplay" class="file-name-display"></div>
        </div>
        <div class="form-group">
          <label>Deskripsi (opsional)</label>
          <textarea id="deskripsi" rows="3" placeholder="Tulis deskripsi singkat tentang video ini..."></textarea>
        </div>
        <div class="modal-buttons">
          <button type="button" class="btn-cancel" id="cancelModalBtn">Batal</button>
          <button type="submit" class="btn-submit">Upload Materi</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- TOAST NOTIFICATION -->
<div id="toastNotification" class="toast-notification"></div>

<script src="{{ asset('js/dashboard/dashboard-content-guru.js') }}"></script>
</body>
</html>