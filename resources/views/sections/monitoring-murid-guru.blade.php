<div class="monitor-page-title">
  <h1>Monitoring Murid</h1>
  <p>Pantau aktivitas, progres, dan perkembangan murid Anda</p>
</div>

<!-- 1. STATISTIK ATAS (Disesuaikan Menjadi Skala Rasional: 25 Murid) -->
<div class="monitor-stats-row">
  <div class="monitor-stat-card">
    <div class="monitor-stat-icon soft-blue">👥</div>
    <div>
      <div class="monitor-stat-value">25</div>
      <div class="monitor-stat-label">Total Murid</div>
    </div>
  </div>

  <div class="monitor-stat-card">
    <div class="monitor-stat-icon soft-green">✓</div>
    <div>
      <div class="monitor-stat-value">20</div>
      <div class="monitor-stat-label">Murid Aktif</div>
      <div class="monitor-stat-sub">80% dari total</div>
    </div>
  </div>

  <div class="monitor-stat-card">
    <div class="monitor-stat-icon soft-yellow">◷</div>
    <div>
      <div class="monitor-stat-value">4</div>
      <div class="monitor-stat-label">Murid Tidak Aktif</div>
      <div class="monitor-stat-sub warning">16% dari total</div>
    </div>
  </div>

  <div class="monitor-stat-card">
    <div class="monitor-stat-icon soft-red">👤</div>
    <div>
      <div class="monitor-stat-value">1</div>
      <div class="monitor-stat-label">Murid Baru</div>
      <div class="monitor-stat-sub">Bulan ini</div>
    </div>
  </div>
</div>

<div class="monitor-main-grid">
  <section class="monitor-card">
    <div class="monitor-card-head">
      <h2>Daftar Murid</h2>
    </div>

    <div class="monitor-filter-row">
      <!-- INPUT PENCARIAN LIVE SEARCH -->
      <div class="monitor-search-box">
        <span>🔍</span>
        <input type="text" id="monitorSearchInput" onkeyup="liveFilterMonitoring()" placeholder="Cari murid...">
      </div>

      <!-- FILTER DROPDOWN PAKET -->
      <div class="monitor-select-box">
        <select id="monitorPaketSelect" onchange="liveFilterMonitoring()">
          <option value="Semua">Semua Paket</option>
          <option value="Gratis">Paket Gratis</option>
          <option value="Premium">Paket Premium</option>
        </select>
      </div>

      <!-- FILTER DROPDOWN STATUS -->
      <div class="monitor-select-box">
        <select id="monitorStatusSelect" onchange="liveFilterMonitoring()">
          <option value="Semua">Semua Status</option>
          <option value="Aktif">Aktif</option>
          <option value="Tidak Aktif">Tidak Aktif</option>
        </select>
      </div>

      <button class="monitor-secondary-btn" onclick="alert('Fitur Export Data Excel Mockup Aktif!')">Export</button>
    </div>

    <!-- TABEL UTAMA MONITORING DATA -->
    <table class="monitor-table">
      <thead>
        <tr>
          <th>Murid</th>
          <th>Paket Aktif</th>
          <th>Progres Belajar</th>
          <th>Video Ditonton</th>
          <th>Kuis Dikerjakan</th>
          <th>Terakhir Aktif</th>
          <th>Status</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody id="monitorTableBody">
        <!-- Andi Saputra -->
        <tr class="monitor-row" data-name="Andi Saputra" data-paket="Gratis" data-status="Aktif">
          <td>
            <div class="monitor-user">
              <div class="monitor-avatar avatar-yellow">A</div>
              <div>
                <div class="monitor-user-name">Andi Saputra</div>
                <div class="monitor-user-class">Siswa Paket Gratis</div>
              </div>
            </div>
          </td>
          <td><span class="video-badge" style="background:#e0f2fe; color:#0369a1; padding:4px 8px; border-radius:6px; font-size:12px; font-weight:600;">Gratis</span></td>
          <td>
            <div class="monitor-progress-wrap">
              <span>75%</span>
              <div class="monitor-progress"><span style="width:75%"></span></div>
            </div>
          </td>
          <td>3/4</td>
          <td>1/2</td>
          <td>2 jam lalu</td>
          <td><span class="monitor-badge active">Aktif</span></td>
          <td><button class="monitor-action-btn" onclick="alert('Membuka detail log progres milik Andi Saputra')">👁</button></td>
        </tr>

        <!-- Siti Nurhaliza -->
        <tr class="monitor-row" data-name="Siti Nurhaliza" data-paket="Gratis" data-status="Aktif">
          <td>
            <div class="monitor-user">
              <div class="monitor-avatar avatar-pink">S</div>
              <div>
                <div class="monitor-user-name">Siti Nurhaliza</div>
                <div class="monitor-user-class">Siswa Paket Gratis</div>
              </div>
            </div>
          </td>
          <td><span class="video-badge" style="background:#e0f2fe; color:#0369a1; padding:4px 8px; border-radius:6px; font-size:12px; font-weight:600;">Gratis</span></td>
          <td>
            <div class="monitor-progress-wrap">
              <span>50%</span>
              <div class="monitor-progress"><span style="width:50%"></span></div>
            </div>
          </td>
          <td>2/4</td>
          <td>1/2</td>
          <td>5 jam lalu</td>
          <td><span class="monitor-badge active">Aktif</span></td>
          <td><button class="monitor-action-btn" onclick="alert('Membuka detail log progres milik Siti Nurhaliza')">👁</button></td>
        </tr>

        <!-- Budi Santoso -->
        <tr class="monitor-row" data-name="Budi Santoso" data-paket="Gratis" data-status="Aktif">
          <td>
            <div class="monitor-user">
              <div class="monitor-avatar avatar-blue">B</div>
              <div>
                <div class="monitor-user-name">Budi Santoso</div>
                <div class="monitor-user-class">Siswa Paket Gratis</div>
              </div>
            </div>
          </td>
          <td><span class="video-badge" style="background:#e0f2fe; color:#0369a1; padding:4px 8px; border-radius:6px; font-size:12px; font-weight:600;">Gratis</span></td>
          <td>
            <div class="monitor-progress-wrap">
              <span>100%</span>
              <div class="monitor-progress"><span style="width:100%"></span></div>
            </div>
          </td>
          <td>4/4</td>
          <td>2/2</td>
          <td>1 hari lalu</td>
          <td><span class="monitor-badge active">Aktif</span></td>
          <td><button class="monitor-action-btn" onclick="alert('Membuka detail log progres milik Budi Santoso')">👁</button></td>
        </tr>

        <!-- Dewi Lestari -->
        <tr class="monitor-row" data-name="Dewi Lestari" data-paket="Premium" data-status="Tidak Aktif">
          <td>
            <div class="monitor-user">
              <div class="monitor-avatar avatar-gray">D</div>
              <div>
                <div class="monitor-user-name">Dewi Lestari</div>
                <div class="monitor-user-class">Siswa Paket Premium</div>
              </div>
            </div>
          </td>
          <td><span class="video-badge" style="background:#f3e8ff; color:#6b21a8; padding:4px 8px; border-radius:6px; font-size:12px; font-weight:600;">Premium</span></td>
          <td>
            <div class="monitor-progress-wrap">
              <span>25%</span>
              <div class="monitor-progress"><span style="width:25%"></span></div>
            </div>
          </td>
          <td>1/4</td>
          <td>0/2</td>
          <td>2 hari lalu</td>
          <td><span class="monitor-badge inactive">Tidak Aktif</span></td>
          <td><button class="monitor-action-btn" onclick="alert('Membuka detail log progres milik Dewi Lestari')">👁</button></td>
        </tr>

        <!-- Rizky Pratama -->
        <tr class="monitor-row" data-name="Rizky Pratama" data-paket="Premium" data-status="Tidak Aktif">
          <td>
            <div class="monitor-user">
              <div class="monitor-avatar avatar-cyan">R</div>
              <div>
                <div class="monitor-user-name">Rizky Pratama</div>
                <div class="monitor-user-class">Siswa Paket Premium</div>
              </div>
            </div>
          </td>
          <td><span class="video-badge" style="background:#f3e8ff; color:#6b21a8; padding:4px 8px; border-radius:6px; font-size:12px; font-weight:600;">Premium</span></td>
          <td>
            <div class="monitor-progress-wrap">
              <span>12%</span>
              <div class="monitor-progress"><span style="width:12%"></span></div>
            </div>
          </td>
          <td>0/4</td>
          <td>0/2</td>
          <td>3 hari lalu</td>
          <td><span class="monitor-badge inactive">Tidak Aktif</span></td>
          <td><button class="monitor-action-btn" onclick="alert('Membuka detail log progres milik Rizky Pratama')">👁</button></td>
        </tr>

        <!-- Aisyah Putri -->
        <tr class="monitor-row" data-name="Aisyah Putri" data-paket="Premium" data-status="Aktif">
          <td>
            <div class="monitor-user">
              <div class="monitor-avatar avatar-pink">A</div>
              <div>
                <div class="monitor-user-name">Aisyah Putri</div>
                <div class="monitor-user-class">Siswa Paket Premium</div>
              </div>
            </div>
          </td>
          <td><span class="video-badge" style="background:#f3e8ff; color:#6b21a8; padding:4px 8px; border-radius:6px; font-size:12px; font-weight:600;">Premium</span></td>
          <td>
            <div class="monitor-progress-wrap">
              <span>75%</span>
              <div class="monitor-progress"><span style="width:75%"></span></div>
            </div>
          </td>
          <td>3/4</td>
          <td>2/2</td>
          <td>30 menit lalu</td>
          <td><span class="monitor-badge active">Aktif</span></td>
          <td><button class="monitor-action-btn" onclick="alert('Membuka detail log progres milik Aisyah Putri')">👁</button></td>
        </tr>
      </tbody>
    </table>

    <div class="monitor-table-foot">
      <div>Menampilkan 1 sampai 6 dari 25 murid</div>
      <div class="monitor-pagination">
        <div class="monitor-page-btn disabled">Previous</div>
        <div class="monitor-page-btn active">1</div>
        <div class="monitor-page-btn disabled">Next</div>
      </div>
    </div>
  </section>

  <!-- AREA KANAN RINGKASAN METRIK -->
  <div class="monitor-side-wrap">
    <section class="monitor-side-card">
      <div class="monitor-side-head">
        <h3>Ringkasan Aktivitas</h3>
        <span class="monitor-range">7 Hari Terakhir</span>
      </div>
      <div class="monitor-chart-box">
        <div class="monitor-chart-title">Aktivitas Murid</div>
        <div class="monitor-line-chart"></div>
      </div>
      <div class="monitor-legend">
        <div class="monitor-legend-item"><span class="dot blue"></span><span>Murid Aktif</span><strong>20 (80%)</strong></div>
        <div class="monitor-legend-item"><span class="dot yellow"></span><span>Murid Pasif</span><strong>4 (16%)</strong></div>
        <div class="monitor-legend-item"><span class="dot green"></span><span>Murid Baru</span><strong>1 (4%)</strong></div>
      </div>
    </section>

    <section class="monitor-side-card">
      <h3>Statistik Progres</h3>
      <div class="monitor-side-list">
        <div class="monitor-side-line"><span>Rata-rata Progres Kelas</span><strong>56%</strong></div>
        <div class="monitor-side-line"><span>Rata-rata Video Ditonton</span><strong>2.2 Video</strong></div>
        <div class="monitor-side-line"><span>Rata-rata Kuis Dikerjakan</span><strong>1.1 Kuis</strong></div>
      </div>
    </section>

    <section class="monitor-side-card">
      <h3>Tingkat Engagement</h3>
      <div class="monitor-engagement-wrap">
        <div class="monitor-ring">
          <div class="monitor-ring-center">
            <strong>25</strong>
            <span>Total Murid</span>
          </div>
        </div>
        <div class="monitor-engagement-list">
          <div class="engage-item"><span class="dot green"></span><span>Tinggi</span><strong>15 (60%)</strong></div>
          <div class="engage-item"><span class="dot yellow"></span><span>Sedang</span><strong>6 (24%)</strong></div>
          <div class="engage-item"><span class="dot red"></span><span>Rendah</span><strong>4 (16%)</strong></div>
        </div>
      </div>
    </section>
  </div>
</div>

<!-- TOP RANKING MINI TABEL -->
<div class="monitor-bottom-grid">
  <section class="monitor-card">
    <div class="monitor-sub-head">
      <h2>🏆 Top Progres Belajar Murid</h2>
    </div>
    <table class="monitor-mini-table">
      <thead>
        <tr>
          <th>#</th>
          <th>Murid</th>
          <th>Progres Rata-rata</th>
          <th>Akses Paket</th>
        </tr>
      </thead>
      <tbody>
        <tr><td>1</td><td>Budi Santoso</td><td><div class="mini-progress-wrap"><span>100%</span><div class="mini-progress"><span style="width:100%"></span></div></div></td><td>Gratis</td></tr>
        <tr><td>2</td><td>Aisyah Putri</td><td><div class="mini-progress-wrap"><span>75%</span><div class="mini-progress"><span style="width:75%"></span></div></div></td><td>Premium</td></tr>
        <tr><td>3</td><td>Andi Saputra</td><td><div class="mini-progress-wrap"><span>75%</span><div class="mini-progress"><span style="width:75%"></span></div></div></td><td>Gratis</td></tr>
        <tr><td>4</td><td>Siti Nurhaliza</td><td><div class="mini-progress-wrap"><span>50%</span><div class="mini-progress"><span style="width:50%"></span></div></div></td><td>Gratis</td></tr>
      </tbody>
    </table>
  </section>

  <!-- LOG AKTIVITAS (REVISI MATERI BAHASA ISYARAT VALID) -->
  <section class="monitor-card">
    <div class="monitor-sub-head">
      <h2>👥 Aktivitas Belajar Terbaru</h2>
    </div>
    <div class="monitor-activity-list">
      <div class="monitor-activity-item">
        <div class="monitor-activity-left">
          <div class="monitor-activity-avatar avatar-yellow">A</div>
          <div>
            <div class="monitor-activity-title">Andi Saputra menyelesaikan kuis “Salam & Sapaan”</div>
            <div class="monitor-activity-desc">Mendapatkan skor sempurna 100!</div>
          </div>
        </div>
        <div class="monitor-activity-time">1 jam yang lalu</div>
      </div>

      <div class="monitor-activity-item">
        <div class="monitor-activity-left">
          <div class="monitor-activity-avatar avatar-pink">S</div>
          <div>
            <div class="monitor-activity-title">Siti Nurhaliza menonton video “Mengenal Huruf A-Z”</div>
            <div class="monitor-activity-desc">Progress durasi tonton 100% selesai</div>
          </div>
        </div>
        <div class="monitor-activity-time">2 jam yang lalu</div>
      </div>

      <div class="monitor-activity-item">
        <div class="monitor-activity-left">
          <div class="monitor-activity-avatar avatar-blue">B</div>
          <div>
            <div class="monitor-activity-title">Budi Santoso mengerjakan kuis “Angka 1-10”</div>
            <div class="quiz-activity-desc">Mendapatkan skor kelulusan 90!</div>
          </div>
        </div>
        <div class="monitor-activity-time">3 jam yang lalu</div>
      </div>
    </div>
  </section>
</div>

<!-- SCRIPT RESPONSIVITAS LIVE FILTERING MONITORING MURID -->
<script>
  function liveFilterMonitoring() {
    let searchKeyword = document.getElementById('monitorSearchInput').value.toLowerCase();
    let selectedPaket = document.getElementById('monitorPaketSelect').value;
    let selectedStatus = document.getElementById('monitorStatusSelect').value;
    let rows = document.querySelectorAll('.monitor-row');

    rows.forEach(row => {
      let studentName = row.getAttribute('data-name').toLowerCase();
      let studentPaket = row.getAttribute('data-paket');
      let studentStatus = row.getAttribute('data-status');

      let matchKeyword = studentName.includes(searchKeyword);
      let matchPaket = (selectedPaket === "Semua" || studentPaket === selectedPaket);
      let matchStatus = (selectedStatus === "Semua" || studentStatus === selectedStatus);

      if (matchKeyword && matchPaket && matchStatus) {
        row.style.display = "";
      } else {
        row.style.display = "none";
      }
    });
  }
</script>