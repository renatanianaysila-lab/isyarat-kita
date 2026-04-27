<div class="fb-page">

  {{-- HEADER --}}
  <div class="fb-header">
    <div class="fb-header-icon">📋</div>
    <div>
      <h1 class="fb-title">Feedback & Rating</h1>
      <p class="fb-subtitle">Lihat feedback, ulasan, dan rating dari murid terhadap materi yang Anda buat</p>
    </div>
  </div>

  {{-- STATS ROW --}}
  <div class="fb-stats-row">
    <div class="fb-stat-card">
      <div class="fb-stat-icon fb-icon-blue">★</div>
      <div class="fb-stat-body">
        <div class="fb-stat-value">4.8</div>
        <div class="fb-stat-label">Rata-rata Rating</div>
        <div class="fb-stat-sub positive">↑ 0.2 dari bulan lalu</div>
      </div>
    </div>
    <div class="fb-stat-card">
      <div class="fb-stat-icon fb-icon-blue2">💬</div>
      <div class="fb-stat-body">
        <div class="fb-stat-value">528</div>
        <div class="fb-stat-label">Total Feedback</div>
        <div class="fb-stat-sub positive">↑ 18% dari bulan lalu</div>
      </div>
    </div>
    <div class="fb-stat-card">
      <div class="fb-stat-icon fb-icon-green">👍</div>
      <div class="fb-stat-body">
        <div class="fb-stat-value">468</div>
        <div class="fb-stat-label">Feedback Positif</div>
        <div class="fb-stat-sub">88% dari total</div>
      </div>
    </div>
    <div class="fb-stat-card">
      <div class="fb-stat-icon fb-icon-red">👎</div>
      <div class="fb-stat-body">
        <div class="fb-stat-value">60</div>
        <div class="fb-stat-label">Feedback Perlu Ditingkatkan</div>
        <div class="fb-stat-sub warning">12% dari total</div>
      </div>
    </div>
  </div>

  {{-- TOP GRID: Ringkasan Rating + Chart --}}
  <div class="fb-top-grid">

    {{-- Ringkasan Rating --}}
    <div class="fb-card">
      <h2 class="fb-card-title">Ringkasan Rating</h2>
      <div class="fb-rating-overview">
        <div class="fb-rating-big">
          <div class="fb-big-score">4.8</div>
          <div class="fb-big-stars">★★★★½</div>
          <div class="fb-big-sub">Dari 528 ulasan</div>
        </div>
        <div class="fb-rating-bars">
          <div class="fb-bar-item">
            <span class="fb-bar-label">5 ★</span>
            <div class="fb-bar-track"><div class="fb-bar-fill" style="width:73%"></div></div>
            <span class="fb-bar-count">388 (73%)</span>
          </div>
          <div class="fb-bar-item">
            <span class="fb-bar-label">4 ★</span>
            <div class="fb-bar-track"><div class="fb-bar-fill" style="width:19%"></div></div>
            <span class="fb-bar-count">98 (19%)</span>
          </div>
          <div class="fb-bar-item">
            <span class="fb-bar-label">3 ★</span>
            <div class="fb-bar-track"><div class="fb-bar-fill fb-bar-orange" style="width:5%"></div></div>
            <span class="fb-bar-count">28 (5%)</span>
          </div>
          <div class="fb-bar-item">
            <span class="fb-bar-label">2 ★</span>
            <div class="fb-bar-track"><div class="fb-bar-fill fb-bar-orange" style="width:2%"></div></div>
            <span class="fb-bar-count">10 (2%)</span>
          </div>
          <div class="fb-bar-item">
            <span class="fb-bar-label">1 ★</span>
            <div class="fb-bar-track"><div class="fb-bar-fill fb-bar-red" style="width:1%"></div></div>
            <span class="fb-bar-count">4 (1%)</span>
          </div>
        </div>
      </div>
    </div>

    {{-- Rating dari Waktu ke Waktu --}}
    <div class="fb-card">
      <div class="fb-card-head">
        <h2 class="fb-card-title">Rating dari Waktu ke Waktu</h2>
        <select class="fb-select-sm">
          <option>7 Hari Terakhir</option>
          <option>30 Hari Terakhir</option>
        </select>
      </div>
      <div class="fb-chart-wrap">
        <canvas id="fbLineChart" height="130"></canvas>
      </div>
      <div class="fb-chart-foot">
        <div class="fb-chart-foot-left">
          <span class="fb-star-icon">★</span>
          <span>Rata-rata Rating</span>
        </div>
        <div class="fb-chart-foot-right">
          <strong>4.8</strong>
          <span class="positive">↑ 0.2 dari 7 hari lalu</span>
        </div>
      </div>
    </div>

  </div>

  {{-- MAIN GRID: Feedback Terbaru + Sidebar --}}
  <div class="fb-main-grid">

    {{-- Feedback Terbaru --}}
    <div class="fb-card">
      <h2 class="fb-card-title">Feedback Terbaru</h2>
      <div class="fb-filter-row">
        <div class="fb-search-box">
          <span>🔍</span>
          <input type="text" placeholder="Cari feedback..." id="fbSearch">
        </div>
        <select class="fb-select" id="filterPaket">
          <option value="all">Semua Paket</option>
          <option>Pengenalan Alfabet</option>
          <option>Angka 1-10</option>
          <option>Salam & Sapaan</option>
          <option>Kata Sehari-hari</option>
        </select>
        <select class="fb-select" id="filterRating">
          <option value="all">Semua Rating</option>
          <option value="5">5 Bintang</option>
          <option value="4">4 Bintang</option>
          <option value="3">3 Bintang</option>
        </select>
      </div>

      <table class="fb-table">
        <tbody id="fbTableBody">
          <tr>
            <td class="fb-col-user">
              <div class="fb-user">
                <div class="fb-avatar av-yellow">A</div>
                <div>
                  <div class="fb-user-name">Andi Saputra</div>
                  <div class="fb-user-sub">Kelas 5</div>
                </div>
              </div>
            </td>
            <td class="fb-col-materi">
              <div class="fb-materi-name">Pengenalan Alfabet</div>
              <div class="fb-materi-jenis">Video</div>
            </td>
            <td class="fb-col-rating">
              <div class="fb-score">5.0</div>
              <div class="fb-stars-yellow">★★★★★</div>
            </td>
            <td class="fb-col-komentar">Penjelasannya mudah dipahami dan sangat membantu!</td>
            <td class="fb-col-side">
              <div class="fb-time">2 jam lalu</div>
              <span class="fb-badge fb-badge-positif">Positif</span>
            </td>
          </tr>
          <tr>
            <td class="fb-col-user">
              <div class="fb-user">
                <div class="fb-avatar av-pink">S</div>
                <div>
                  <div class="fb-user-name">Siti Nurhaliza</div>
                  <div class="fb-user-sub">Kelas 4</div>
                </div>
              </div>
            </td>
            <td class="fb-col-materi">
              <div class="fb-materi-name">Angka 1-10</div>
              <div class="fb-materi-jenis">Kuis</div>
            </td>
            <td class="fb-col-rating">
              <div class="fb-score">5.0</div>
              <div class="fb-stars-yellow">★★★★★</div>
            </td>
            <td class="fb-col-komentar">Kuisnya seru dan bikin semangat belajar 🔥</td>
            <td class="fb-col-side">
              <div class="fb-time">5 jam lalu</div>
              <span class="fb-badge fb-badge-positif">Positif</span>
            </td>
          </tr>
          <tr>
            <td class="fb-col-user">
              <div class="fb-user">
                <div class="fb-avatar av-blue">B</div>
                <div>
                  <div class="fb-user-name">Budi Santoso</div>
                  <div class="fb-user-sub">Kelas 6</div>
                </div>
              </div>
            </td>
            <td class="fb-col-materi">
              <div class="fb-materi-name">Salam & Sapaan</div>
              <div class="fb-materi-jenis">Video</div>
            </td>
            <td class="fb-col-rating">
              <div class="fb-score">4.0</div>
              <div class="fb-stars-yellow">★★★★☆</div>
            </td>
            <td class="fb-col-komentar">Materinya bagus, tapi suaranya agak kecil.</td>
            <td class="fb-col-side">
              <div class="fb-time">1 hari lalu</div>
              <span class="fb-badge fb-badge-perlu">Perlu Ditingkatkan</span>
            </td>
          </tr>
          <tr>
            <td class="fb-col-user">
              <div class="fb-user">
                <div class="fb-avatar av-cyan">D</div>
                <div>
                  <div class="fb-user-name">Dewi Lestari</div>
                  <div class="fb-user-sub">Kelas 5</div>
                </div>
              </div>
            </td>
            <td class="fb-col-materi">
              <div class="fb-materi-name">Kata Sehari-hari</div>
              <div class="fb-materi-jenis">Video</div>
            </td>
            <td class="fb-col-rating">
              <div class="fb-score">5.0</div>
              <div class="fb-stars-yellow">★★★★★</div>
            </td>
            <td class="fb-col-komentar">Contoh kalimatnya membantu banget!</td>
            <td class="fb-col-side">
              <div class="fb-time">1 hari lalu</div>
              <span class="fb-badge fb-badge-positif">Positif</span>
            </td>
          </tr>
          <tr>
            <td class="fb-col-user">
              <div class="fb-user">
                <div class="fb-avatar av-gray">R</div>
                <div>
                  <div class="fb-user-name">Rizky Pratama</div>
                  <div class="fb-user-sub">Kelas 4</div>
                </div>
              </div>
            </td>
            <td class="fb-col-materi">
              <div class="fb-materi-name">Angka 1-10</div>
              <div class="fb-materi-jenis">Video</div>
            </td>
            <td class="fb-col-rating">
              <div class="fb-score">3.0</div>
              <div class="fb-stars-yellow">★★★☆☆</div>
            </td>
            <td class="fb-col-komentar">Tolong tambahkan latihan yang lebih banyak.</td>
            <td class="fb-col-side">
              <div class="fb-time">2 hari lalu</div>
              <span class="fb-badge fb-badge-perlu">Perlu Ditingkatkan</span>
            </td>
          </tr>
          <tr>
            <td class="fb-col-user">
              <div class="fb-user">
                <div class="fb-avatar av-yellow">A</div>
                <div>
                  <div class="fb-user-name">Aisyah Putri</div>
                  <div class="fb-user-sub">Kelas 5</div>
                </div>
              </div>
            </td>
            <td class="fb-col-materi">
              <div class="fb-materi-name">Pengenalan Alfabet</div>
              <div class="fb-materi-jenis">Kuis</div>
            </td>
            <td class="fb-col-rating">
              <div class="fb-score">5.0</div>
              <div class="fb-stars-yellow">★★★★★</div>
            </td>
            <td class="fb-col-komentar">Sangat menyenangkan dan mudah dipahami!</td>
            <td class="fb-col-side">
              <div class="fb-time">2 hari lalu</div>
              <span class="fb-badge fb-badge-positif">Positif</span>
            </td>
          </tr>
        </tbody>
      </table>

      <div class="fb-table-foot">
        <span>Menampilkan 1 sampai 6 dari 528 feedback</span>
        <div class="fb-pagination">
          <button class="fb-page-btn">‹ Previous</button>
          <button class="fb-page-btn active">1</button>
          <button class="fb-page-btn">2</button>
          <button class="fb-page-btn">3</button>
          <span class="fb-page-dots">...</span>
          <button class="fb-page-btn">88</button>
          <button class="fb-page-btn">Next ›</button>
        </div>
      </div>
    </div>

    {{-- SIDEBAR --}}
    <div class="fb-sidebar">

      {{-- Feedback Berdasarkan Materi --}}
      <div class="fb-card">
        <h2 class="fb-card-title">Feedback Berdasarkan Materi</h2>
        <div class="fb-donut-wrap">
          <canvas id="fbDonutChart" width="160" height="160"></canvas>
          <div class="fb-donut-center">
            <div class="fb-donut-value">528</div>
            <div class="fb-donut-label">Total Feedback</div>
          </div>
        </div>
        <div class="fb-legend">
          <div class="fb-legend-item">
            <span class="fb-dot" style="background:#2563eb"></span>
            <span>Pengenalan Alfabet</span>
            <strong>180 (34%)</strong>
          </div>
          <div class="fb-legend-item">
            <span class="fb-dot" style="background:#22c55e"></span>
            <span>Angka 1-10</span>
            <strong>150 (28%)</strong>
          </div>
          <div class="fb-legend-item">
            <span class="fb-dot" style="background:#f59e0b"></span>
            <span>Salam & Sapaan</span>
            <strong>90 (17%)</strong>
          </div>
          <div class="fb-legend-item">
            <span class="fb-dot" style="background:#8b5cf6"></span>
            <span>Kata Sehari-hari</span>
            <strong>108 (21%)</strong>
          </div>
        </div>
      </div>

      {{-- Sentimen Feedback --}}
      <div class="fb-card">
        <h2 class="fb-card-title">Sentimen Feedback</h2>
        <div class="fb-sentimen-list">
          <div class="fb-sentimen-item">
            <span class="fb-sentimen-icon">😊</span>
            <span class="fb-sentimen-label">Positif</span>
            <strong class="fb-sentimen-val positive">468 (88%)</strong>
          </div>
          <div class="fb-sentimen-item">
            <span class="fb-sentimen-icon">😐</span>
            <span class="fb-sentimen-label">Perlu Ditingkatkan</span>
            <strong class="fb-sentimen-val warning">60 (11%)</strong>
          </div>
          <div class="fb-sentimen-item">
            <span class="fb-sentimen-icon">😞</span>
            <span class="fb-sentimen-label">Negatif</span>
            <strong class="fb-sentimen-val">0 (1%)</strong>
          </div>
        </div>
      </div>

    </div>
  </div>

  {{-- BOTTOM GRID --}}
  <div class="fb-bottom-grid">

    {{-- Rating Tertinggi --}}
    <div class="fb-card">
      <div class="fb-card-head">
        <h2 class="fb-card-title">Rating Tertinggi</h2>
        <a href="#" class="fb-link">Lihat Semua »</a>
      </div>
      <table class="fb-mini-table">
        <thead>
          <tr>
            <th>Materi</th>
            <th>Jenis</th>
            <th>Rating</th>
            <th>Ulasan</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><strong>Pengenalan Alfabet</strong></td>
            <td>Video</td>
            <td><span class="fb-mini-score">5.0</span> <span class="fb-mini-stars">★★★★★</span> <span class="fb-mini-count">(210)</span></td>
            <td class="fb-mini-ulasan">Materi sangat membantu!</td>
          </tr>
          <tr>
            <td><strong>Angka 1-10</strong></td>
            <td>Kuis</td>
            <td><span class="fb-mini-score">4.9</span> <span class="fb-mini-stars">★★★★★</span> <span class="fb-mini-count">(180)</span></td>
            <td class="fb-mini-ulasan">Seru dan mudah dipahami</td>
          </tr>
          <tr>
            <td><strong>Salam & Sapaan</strong></td>
            <td>Video</td>
            <td><span class="fb-mini-score">4.8</span> <span class="fb-mini-stars">★★★★☆</span> <span class="fb-mini-count">(120)</span></td>
            <td class="fb-mini-ulasan">Penjelasan jelas</td>
          </tr>
          <tr>
            <td><strong>Kata Sehari-hari</strong></td>
            <td>Video</td>
            <td><span class="fb-mini-score">4.7</span> <span class="fb-mini-stars">★★★★☆</span> <span class="fb-mini-count">(160)</span></td>
            <td class="fb-mini-ulasan">Contoh kalimat bagus</td>
          </tr>
        </tbody>
      </table>
      <div class="fb-table-note">Total 4 materi dengan rating tertinggi</div>
    </div>

    {{-- Saran & Masukan --}}
    <div class="fb-card">
      <div class="fb-card-head">
        <h2 class="fb-card-title">Saran & Masukan</h2>
        <a href="#" class="fb-link">Lihat Semua »</a>
      </div>
      <div class="fb-saran-list">
        <div class="fb-saran-item">
          <span class="fb-saran-icon" style="background:#edf3ff">💬</span>
          <span class="fb-saran-text">Tambah lebih banyak latihan soal</span>
          <strong>36</strong>
        </div>
        <div class="fb-saran-item">
          <span class="fb-saran-icon" style="background:#fff5de">🔊</span>
          <span class="fb-saran-text">Perjelas suara pada beberapa video</span>
          <strong>18</strong>
        </div>
        <div class="fb-saran-item">
          <span class="fb-saran-icon" style="background:#e8f9ef">📚</span>
          <span class="fb-saran-text">Buat materi tingkat menengah</span>
          <strong>15</strong>
        </div>
        <div class="fb-saran-item">
          <span class="fb-saran-icon" style="background:#fff0f0">⭐</span>
          <span class="fb-saran-text">Tambahkan animasi pada video</span>
          <strong>12</strong>
        </div>
        <div class="fb-saran-item">
          <span class="fb-saran-icon" style="background:#fff3e0">🕒</span>
          <span class="fb-saran-text">Sediakan kuis dengan waktu lebih fleksibel</span>
          <strong>8</strong>
        </div>
      </div>
      <div class="fb-table-note">Total 89 saran & masukan</div>
    </div>

  </div>

</div>

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
// ===== LINE CHART =====
const lineCtx = document.getElementById('fbLineChart').getContext('2d');
new Chart(lineCtx, {
  type: 'line',
  data: {
    labels: ['12 Mei','13 Mei','14 Mei','15 Mei','16 Mei','17 Mei','18 Mei'],
    datasets: [{
      data: [3.5, 3.8, 4.0, 3.9, 4.2, 4.5, 4.8],
      borderColor: '#2563eb',
      backgroundColor: 'rgba(37,99,235,0.08)',
      borderWidth: 2.5,
      pointBackgroundColor: '#2563eb',
      pointRadius: 4,
      tension: 0.4,
      fill: true
    }]
  },
  options: {
    plugins: { legend: { display: false } },
    scales: {
      y: { min: 3.0, max: 5.0, ticks: { stepSize: 0.5, font: { size: 11 } }, grid: { color: '#f1f5f9' } },
      x: { ticks: { font: { size: 11 } }, grid: { display: false } }
    }
  }
});

// ===== DONUT CHART =====
const donutCtx = document.getElementById('fbDonutChart').getContext('2d');
new Chart(donutCtx, {
  type: 'doughnut',
  data: {
    datasets: [{
      data: [180, 150, 90, 108],
      backgroundColor: ['#2563eb','#22c55e','#f59e0b','#8b5cf6'],
      borderWidth: 0,
      hoverOffset: 6
    }]
  },
  options: {
    cutout: '68%',
    plugins: { legend: { display: false } }
  }
});
</script>
@endpush