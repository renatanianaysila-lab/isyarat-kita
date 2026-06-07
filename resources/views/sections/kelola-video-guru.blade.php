<div class="video-page-title">
  <h1>Kelola Video</h1>
  <p>Kelola dan atur video pembelajaran Anda</p>
</div>

<div class="video-stats-row">
  <div class="video-stat-card">
    <div class="video-stat-icon soft-blue">▶</div>
    <div>
      <div class="video-stat-value">8</div>
      <div class="video-stat-label">Total Video</div>
    </div>
  </div>

  <div class="video-stat-card">
    <div class="video-stat-icon soft-green">✓</div>
    <div>
      <div class="video-stat-value">6</div>
      <div class="video-stat-label">Video Aktif</div>
    </div>
  </div>

  <div class="video-stat-card">
    <div class="video-stat-icon soft-yellow">◷</div>
    <div>
      <div class="video-stat-value">1</div>
      <div class="video-stat-label">Draft</div>
    </div>
  </div>

  <div class="video-stat-card">
    <div class="video-stat-icon soft-red">✕</div>
    <div>
      <div class="video-stat-value">1</div>
      <div class="video-stat-label">Non Aktif</div>
    </div>
  </div>
</div>

<div class="video-main-grid">
  <section class="video-card">
    <div class="video-card-head">
      <h2>Daftar Video</h2>
    </div>

    <div class="video-filter-row">
      <div class="video-search-box">
        <span>🔍</span>
        <input type="text" id="videoSearchInput" onkeyup="filterVideoDashboard()" placeholder="Cari video...">
      </div>

      <div class="video-select-box">
        <select id="paketFilterSelect" onchange="filterVideoDashboard()">
          <option value="Semua">Semua Paket</option>
          <option value="Gratis">Paket Gratis</option>
          <option value="Premium">Paket Premium</option>
        </select>
      </div>

      <div class="video-select-box">
        <select id="statusFilterSelect" onchange="filterVideoDashboard()">
          <option value="Semua">Semua Status</option>
          <option value="Aktif">Aktif</option>
          <option value="Draft">Draft</option>
          <option value="Non Aktif">Non Aktif</option>
        </select>
      </div>

      <button class="video-btn" onclick="alert('Simulasi upload video baru aktif!')">+ Upload Video</button>
    </div>

    <table class="video-table">
      <thead>
        <tr>
          <th>Video</th>
          <th>Paket</th>
          <th>Durasi</th>
          <th>Views</th>
          <th>Status</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody id="videoTableBody">
        <tr class="video-row" data-name="Mengenal Huruf A - Z" data-paket="Gratis" data-status="Aktif">
          <td>
            <div class="video-info">
              <div class="video-thumb thumb-blue">ABC</div>
              <div><div class="video-name">Mengenal Huruf A - Z</div></div>
            </div>
          </td>
          <td><span class="video-badge" style="background:#e0f2fe; color:#0369a1; padding:4px 8px; border-radius:6px; font-size:12px; font-weight:600;">Gratis</span></td>
          <td>05:23</td>
          <td>1.240</td>
          <td><span class="video-badge active">Aktif</span></td>
          <td>
            <div class="video-actions">
              <button class="video-action-btn">👁</button>
              <button class="video-action-btn">✏</button>
              <button class="video-action-btn" onclick="this.closest('tr').remove()">🗑</button>
            </div>
          </td>
        </tr>

        <tr class="video-row" data-name="Angka 1 sampai 10" data-paket="Gratis" data-status="Aktif">
          <td>
            <div class="video-info">
              <div class="video-thumb thumb-green">123</div>
              <div><div class="video-name">Angka 1 sampai 10</div></div>
            </div>
          </td>
          <td><span class="video-badge" style="background:#e0f2fe; color:#0369a1; padding:4px 8px; border-radius:6px; font-size:12px; font-weight:600;">Gratis</span></td>
          <td>04:15</td>
          <td>980</td>
          <td><span class="video-badge active">Aktif</span></td>
          <td>
            <div class="video-actions">
              <button class="video-action-btn">👁</button>
              <button class="video-action-btn">✏</button>
              <button class="video-action-btn" onclick="this.closest('tr').remove()">🗑</button>
            </div>
          </td>
        </tr>

        <tr class="video-row" data-name="Salam Pagi" data-paket="Gratis" data-status="Aktif">
          <td>
            <div class="video-info">
              <div class="video-thumb thumb-yellow">👋</div>
              <div><div class="video-name">Salam Pagi</div></div>
            </div>
          </td>
          <td><span class="video-badge" style="background:#e0f2fe; color:#0369a1; padding:4px 8px; border-radius:6px; font-size:12px; font-weight:600;">Gratis</span></td>
          <td>03:48</td>
          <td>750</td>
          <td><span class="video-badge active">Aktif</span></td>
          <td>
            <div class="video-actions">
              <button class="video-action-btn">👁</button>
              <button class="video-action-btn">✏</button>
              <button class="video-action-btn" onclick="this.closest('tr').remove()">🗑</button>
            </div>
          </td>
        </tr>

        <tr class="video-row" data-name="Apa Kabar?" data-paket="Gratis" data-status="Aktif">
          <td>
            <div class="video-info">
              <div class="video-thumb thumb-orange">💬</div>
              <div><div class="video-name">Apa Kabar?</div></div>
            </div>
          </td>
          <td><span class="video-badge" style="background:#e0f2fe; color:#0369a1; padding:4px 8px; border-radius:6px; font-size:12px; font-weight:600;">Gratis</span></td>
          <td>03:12</td>
          <td>620</td>
          <td><span class="video-badge active">Aktif</span></td>
          <td>
            <div class="video-actions">
              <button class="video-action-btn">👁</button>
              <button class="video-action-btn">✏</button>
              <button class="video-action-btn" onclick="this.closest('tr').remove()">🗑</button>
            </div>
          </td>
        </tr>

        <tr class="video-row" data-name="Makan" data-paket="Premium" data-status="Aktif">
          <td>
            <div class="video-info">
              <div class="video-thumb thumb-green">🍽</div>
              <div><div class="video-name">Makan</div></div>
            </div>
          </td>
          <td><span class="video-badge" style="background:#f3e8ff; color:#6b21a8; padding:4px 8px; border-radius:6px; font-size:12px; font-weight:600;">Premium</span></td>
          <td>04:56</td>
          <td>1.100</td>
          <td><span class="video-badge active">Aktif</span></td>
          <td>
            <div class="video-actions">
              <button class="video-action-btn">👁</button>
              <button class="video-action-btn">✏</button>
              <button class="video-action-btn" onclick="this.closest('tr').remove()">🗑</button>
            </div>
          </td>
        </tr>

        <tr class="video-row" data-name="Belajar di Kelas" data-paket="Premium" data-status="Aktif">
          <td>
            <div class="video-info">
              <div class="video-thumb thumb-purple">📘</div>
              <div><div class="video-name">Belajar di Kelas</div></div>
            </div>
          </td>
          <td><span class="video-badge" style="background:#f3e8ff; color:#6b21a8; padding:4px 8px; border-radius:6px; font-size:12px; font-weight:600;">Premium</span></td>
          <td>05:10</td>
          <td>1.250</td>
          <td><span class="video-badge active">Aktif</span></td>
          <td>
            <div class="video-actions">
              <button class="video-action-btn">👁</button>
              <button class="video-action-btn">✏</button>
              <button class="video-action-btn" onclick="this.closest('tr').remove()">🗑</button>
            </div>
          </td>
        </tr>

        <tr class="video-row" data-name="Di Rumah" data-paket="Premium" data-status="Draft">
          <td>
            <div class="video-info">
              <div class="video-thumb thumb-red">🏠</div>
              <div><div class="video-name">Di Rumah</div></div>
            </div>
          </td>
          <td><span class="video-badge" style="background:#f3e8ff; color:#6b21a8; padding:4px 8px; border-radius:6px; font-size:12px; font-weight:600;">Premium</span></td>
          <td>04:02</td>
          <td>870</td>
          <td><span class="video-badge draft">Draft</span></td>
          <td>
            <div class="video-actions">
              <button class="video-action-btn">👁</button>
              <button class="video-action-btn">✏</button>
              <button class="video-action-btn" onclick="this.closest('tr').remove()">🗑</button>
            </div>
          </td>
        </tr>

        <tr class="video-row" data-name="Pergi Sekolah" data-paket="Premium" data-status="Non Aktif">
          <td>
            <div class="video-info">
              <div class="video-thumb thumb-gray">🚶</div>
              <div><div class="video-name">Pergi Sekolah</div></div>
            </div>
          </td>
          <td><span class="video-badge" style="background:#f3e8ff; color:#6b21a8; padding:4px 8px; border-radius:6px; font-size:12px; font-weight:600;">Premium</span></td>
          <td>03:30</td>
          <td>540</td>
          <td><span class="video-badge inactive">Non Aktif</span></td>
          <td>
            <div class="video-actions">
              <button class="video-action-btn">👁</button>
              <button class="video-action-btn">✏</button>
              <button class="video-action-btn" onclick="this.closest('tr').remove()">🗑</button>
            </div>
          </td>
        </tr>
      </tbody>
    </table>

    <div class="video-table-foot">
      <div>Menampilkan 1 sampai 8 dari 8 hasil</div>
      <div class="video-pagination">
        <div class="video-page-btn disabled">Previous</div>
        <div class="video-page-btn active">1</div>
        <div class="video-page-btn disabled">Next</div>
      </div>
    </div>
  </section>

  <div class="video-side-wrap">
    <section class="video-summary-card">
      <h2>Ringkasan Konten</h2>
      <div class="video-donut-wrap">
        <div class="video-donut-chart" style="background: conic-gradient(#2ecc71 0% 75%, #f1c40f 75% 87.5%, #e74c3c 87.5% 100%);">
          <div class="video-donut-center">
            <div class="big">8</div>
            <div class="small">Total Video</div>
          </div>
        </div>
      </div>

      <div class="video-summary-list">
        <div class="video-summary-item">
          <div class="video-summary-left"><span class="video-dot green"></span><span>Aktif</span></div>
          <strong>6 (75%)</strong>
        </div>
        <div class="video-summary-item">
          <div class="video-summary-left"><span class="video-dot yellow"></span><span>Draft</span></div>
          <strong>1 (12.5%)</strong>
        </div>
        <div class="video-summary-item">
          <div class="video-summary-left"><span class="video-dot red"></span><span>Non Aktif</span></div>
          <strong>1 (12.5%)</strong>
        </div>
      </div>
    </section>

    <section class="video-small-card">
      <h3>Total Akumulasi Views</h3>
      <div class="video-small-value">7.350</div>
      <div class="video-small-sub">Views Keseluruhan</div>
      <div class="video-chart-line"></div>
      <div class="video-up-text">▲ 14% dari minggu lalu</div>
    </section>

    <section class="video-small-card">
      <h3>Proporsi Paket Kelas</h3>
      <div class="video-list-mini">
        <div class="video-list-mini-item"><span>Paket Premium</span><strong>4 Video</strong></div>
        <div class="video-list-mini-item"><span>Paket Gratis</span><strong>4 Video</strong></div>
      </div>
    </section>
  </div>
</div>

<div class="video-bottom-grid">
  <section class="video-card">
    <div class="video-sub-head">
      <h2>🎥 5 Top Video Terpopuler</h2>
    </div>
    <table class="video-mini-table">
      <thead>
        <tr>
          <th>Video</th>
          <th>Akses</th>
          <th>Views</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1 &nbsp; Belajar di Kelas</td>
          <td>Premium</td>
          <td>1.250</td>
          <td><div class="video-bar"><span style="width:100%"></span></div></td>
        </tr>
        <tr>
          <td>2 &nbsp; Mengenal Huruf A - Z</td>
          <td>Gratis</td>
          <td>1.240</td>
          <td><div class="video-bar"><span style="width:99%"></span></div></td>
        </tr>
        <tr>
          <td>3 &nbsp; Makan</td>
          <td>Premium</td>
          <td>1.100</td>
          <td><div class="video-bar"><span style="width:88%"></span></div></td>
        </tr>
        <tr>
          <td>4 &nbsp; Angka 1 sampai 10</td>
          <td>Gratis</td>
          <td>980</td>
          <td><div class="video-bar"><span style="width:78%"></span></div></td>
        </tr>
        <tr>
          <td>5 &nbsp; Di Rumah</td>
          <td>Premium</td>
          <td>870</td>
          <td><div class="video-bar"><span style="width:69%"></span></div></td>
        </tr>
      </tbody>
    </table>
  </section>

  <section class="video-card">
    <div class="video-sub-head">
      <h2>👥 Log Pembaruan Terakhir</h2>
    </div>
    <div class="video-activity-list">
      <div class="video-activity-item">
        <div class="video-activity-left">
          <div class="video-activity-icon green">↑</div>
          <div>
            <div class="video-activity-title">Video “Belajar di Kelas” diterbitkan</div>
            <div class="video-activity-desc">Paket Premium</div>
          </div>
        </div>
        <div class="video-activity-time">30 menit lalu</div>
      </div>
      <div class="video-activity-item">
        <div class="video-activity-left">
          <div class="video-activity-icon green">↑</div>
          <div>
            <div class="video-activity-title">Video “Mengenal Huruf A - Z” dirilis</div>
            <div class="video-activity-desc">Paket Gratis</div>
          </div>
        </div>
        <div class="video-activity-time">2 jam yang lalu</div>
      </div>
      <div class="video-activity-item">
        <div class="video-activity-left">
          <div class="video-activity-icon red">✕</div>
          <div>
            <div class="video-activity-title">Video “Pergi Sekolah” di-nonaktifkan</div>
            <div class="video-activity-desc">Paket Premium</div>
          </div>
        </div>
        <div class="video-activity-time">1 hari yang lalu</div>
      </div>
    </div>
  </section>
</div>

<script>
  function filterVideoDashboard() {
    let searchInput = document.getElementById('videoSearchInput').value.toLowerCase();
    let selectedPaket = document.getElementById('paketFilterSelect').value;
    let selectedStatus = document.getElementById('statusFilterSelect').value;
    let videoRows = document.querySelectorAll('.video-row');

    videoRows.forEach(row => {
      let videoName = row.getAttribute('data-name').toLowerCase();
      let videoPaket = row.getAttribute('data-paket');
      let videoStatus = row.getAttribute('data-status');

      let matchSearch = videoName.includes(searchInput);
      let matchPaket = (selectedPaket === "Semua" || videoPaket === selectedPaket);
      let matchStatus = (selectedStatus === "Semua" || videoStatus === selectedStatus);

      if (matchSearch && matchPaket && matchStatus) {
        row.style.display = "";
      } else {
        row.style.display = "none";
      }
    });
  }
</script>