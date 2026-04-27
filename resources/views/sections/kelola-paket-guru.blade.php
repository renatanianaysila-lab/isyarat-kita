<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>IsyaratKita - Kelola Paket</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/sections/kelola-paket-guru.css') }}">
</head>
<body>

<div class="paket-page-title">
  <h1>Kelola Paket</h1>
  <p>Kelola dan atur paket pembelajaran Anda</p>
</div>

<div class="paket-stats-row">
  <div class="paket-stat-card">
    <div class="paket-stat-icon" style="background:#EDF3FF;">
      <span style="color:#2F6BFF;font-weight:700;">👥</span>
    </div>
    <div>
      <div class="paket-stat-value">1.248</div>
      <div class="paket-stat-label">Total Pengguna</div>
    </div>
  </div>

  <div class="paket-stat-card">
    <div class="paket-stat-icon" style="background:#E8F9EF;">
      <span style="color:#22B35B;font-weight:700;">✓</span>
    </div>
    <div>
      <div class="paket-stat-value">1.056</div>
      <div class="paket-stat-label">Pengguna Aktif</div>
    </div>
  </div>

  <div class="paket-stat-card">
    <div class="paket-stat-icon" style="background:#FFF5DE;">
      <span style="color:#F0A500;font-weight:700;">◷</span>
    </div>
    <div>
      <div class="paket-stat-value">142</div>
      <div class="paket-stat-label">Pengguna Tidak Aktif</div>
    </div>
  </div>

  <div class="paket-stat-card">
    <div class="paket-stat-icon" style="background:#F3EDFF;">
      <span style="color:#8B5CF6;font-weight:700;">👤</span>
    </div>
    <div>
      <div class="paket-stat-value">50</div>
      <div class="paket-stat-label">Pengguna Baru</div>
    </div>
  </div>
</div>

<div class="paket-main-grid">
  <section class="paket-card">
    <div class="paket-card-head">
      <h2>Daftar Pengguna</h2>
    </div>

    <div class="paket-filter-row">
      <div class="paket-search-box">
        <span style="font-size:14px;">🔍</span>
        <input type="text" placeholder="Cari pengguna...">
      </div>

      <div class="paket-select-box">
        <select>
          <option>Semua Status</option>
          <option>Aktif</option>
          <option>Non Aktif</option>
        </select>
      </div>

      <button class="paket-btn">+ Tambah Pengguna</button>
    </div>

    <table class="paket-table">
      <thead>
        <tr>
          <th>Daftar Nama Pengguna</th>
          <th>Jumlah Video</th>
          <th>Jumlah Kuis</th>
          <th>Harga</th>
          <th>Status</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            <div class="paket-info">
              <div class="paket-thumb" style="background:#CFE8FF;color:#1D4ED8;">👦</div>
              <div>
                <div class="paket-name">Andi Saputra</div>
                <div class="paket-class">andi.saputra@email.com</div>
              </div>
            </div>
          </div></td>
          <td>10</div></td>
          <td>8</div></td>
          <td>Rp30.000</div></td>
          <td><span class="paket-badge active">Aktif</span></div></td>
          <td>
            <div class="paket-actions">
              <button class="paket-action-btn">👁</button>
              <button class="paket-action-btn">✏</button>
              <button class="paket-action-btn">🗑</button>
            </div>
           </div></td>
        </tr>

        <tr>
          <td>
            <div class="paket-info">
              <div class="paket-thumb" style="background:#FFD7E7;color:#DB2777;">👩</div>
              <div>
                <div class="paket-name">Siti Nurhaliza</div>
                <div class="paket-class">siti.nurhaliza@email.com</div>
              </div>
            </div>
           </div></td>
          <td>12</div></td>
          <td>10</div></td>
          <td>Rp30.000</div></td>
          <td><span class="paket-badge active">Aktif</span></div></td>
          <td>
            <div class="paket-actions">
              <button class="paket-action-btn">👁</button>
              <button class="paket-action-btn">✏</button>
              <button class="paket-action-btn">🗑</button>
            </div>
           </div></td>
        </tr>

        <tr>
          <td>
            <div class="paket-info">
              <div class="paket-thumb" style="background:#DDE7FF;color:#4338CA;">👦</div>
              <div>
                <div class="paket-name">Budi Santoso</div>
                <div class="paket-class">budi.santoso@email.com</div>
              </div>
            </div>
           </div></td>
          <td>8</div></td>
          <td>6</div></td>
          <td>Rp30.000</div></td>
          <td><span class="paket-badge active">Aktif</span></div></td>
          <td>
            <div class="paket-actions">
              <button class="paket-action-btn">👁</button>
              <button class="paket-action-btn">✏</button>
              <button class="paket-action-btn">🗑</button>
            </div>
           </div></td>
        </tr>

        <tr>
          <td>
            <div class="paket-info">
              <div class="paket-thumb" style="background:#E5E7EB;color:#6B7280;">👩</div>
              <div>
                <div class="paket-name">Dewi Lestari</div>
                <div class="paket-class">dewi.lestari@email.com</div>
              </div>
            </div>
           </div></td>
          <td>12</div></td>
          <td>10</div></td>
          <td>Rp30.000</div></td>
          <td><span class="paket-badge" style="background:#FFF3E0;color:#B45B0A;">Tidak Aktif</span></div></td>
          <td>
            <div class="paket-actions">
              <button class="paket-action-btn">👁</button>
              <button class="paket-action-btn">✏</button>
              <button class="paket-action-btn">🗑</button>
            </div>
           </div></td>
        </tr>

        <tr>
          <td>
            <div class="paket-info">
              <div class="paket-thumb" style="background:#DBEAFE;color:#2563EB;">👦</div>
              <div>
                <div class="paket-name">Rizky Pratama</div>
                <div class="paket-class">rizky.pratama@email.com</div>
              </div>
            </div>
           </div></td>
          <td>9</div></td>
          <td>7</div></td>
          <td>Rp30.000</div></td>
          <td><span class="paket-badge" style="background:#FFF3E0;color:#B45B0A;">Tidak Aktif</span></div></td>
          <td>
            <div class="paket-actions">
              <button class="paket-action-btn">👁</button>
              <button class="paket-action-btn">✏</button>
              <button class="paket-action-btn">🗑</button>
            </div>
           </div></td>
        </tr>

        <tr>
          <td>
            <div class="paket-info">
              <div class="paket-thumb" style="background:#FBCFE8;color:#BE185D;">👩</div>
              <div>
                <div class="paket-name">Aisyah Putri</div>
                <div class="paket-class">aisyah.putri@email.com</div>
              </div>
            </div>
           </div></td>
          <td>11</div></td>
          <td>9</div></td>
          <td>Rp30.000</div></td>
          <td><span class="paket-badge active">Aktif</span></div></td>
          <td>
            <div class="paket-actions">
              <button class="paket-action-btn">👁</button>
              <button class="paket-action-btn">✏</button>
              <button class="paket-action-btn">🗑</button>
            </div>
           </div></td>
        </tr>

        <tr>
          <td>
            <div class="paket-info">
              <div class="paket-thumb" style="background:#BFDBFE;color:#1D4ED8;">👦</div>
              <div>
                <div class="paket-name">Fajar Romadhon</div>
                <div class="paket-class">fajar.romadhon@email.com</div>
              </div>
            </div>
           </div></td>
          <td>10</div></td>
          <td>8</div></td>
          <td>Rp30.000</div></td>
          <td><span class="paket-badge active">Aktif</span></div></td>
          <td>
            <div class="paket-actions">
              <button class="paket-action-btn">👁</button>
              <button class="paket-action-btn">✏</button>
              <button class="paket-action-btn">🗑</button>
            </div>
           </div></td>
        </tr>

        <tr>
          <td>
            <div class="paket-info">
              <div class="paket-thumb" style="background:#DDD6FE;color:#7C3AED;">👩</div>
              <div>
                <div class="paket-name">Nadia Aulia</div>
                <div class="paket-class">nadia.aulia@email.com</div>
              </div>
            </div>
           </div></td>
          <td>7</div></td>
          <td>5</div></td>
          <td>Rp30.000</div></td>
          <td><span class="paket-badge" style="background:#FFF3E0;color:#B45B0A;">Tidak Aktif</span></div></td>
          <td>
            <div class="paket-actions">
              <button class="paket-action-btn">👁</button>
              <button class="paket-action-btn">✏</button>
              <button class="paket-action-btn">🗑</button>
            </div>
           </div></td>
        </tr>
      </tbody>
    </table>

    <div class="paket-table-foot">
      <div>Menampilkan 1 sampai 8 dari 1.248 pengguna</div>
      <div class="paket-pagination">
        <div class="paket-page-btn">Previous</div>
        <div class="paket-page-btn active">1</div>
        <div class="paket-page-btn">2</div>
        <div class="paket-page-btn">3</div>
        <div class="paket-page-btn">156</div>
        <div class="paket-page-btn">Next</div>
      </div>
    </div>
  </section>

  <section class="paket-summary-card">
    <h2>📚 Ringkasan Materi Bahasa Isyarat</h2>

    <div class="donut-wrap">
      <div class="donut-chart" style="background: conic-gradient(#2F6BFF 0 38%, #56D27A 38% 63%, #F6B73C 63% 78%, #8B5CF6 78% 91%, #FF5959 91% 100%);">
        <div class="donut-center">
          <div class="big">32</div>
          <div class="small">Total Video</div>
        </div>
      </div>
    </div>

    <div class="paket-summary-list">
      <div class="paket-summary-item">
        <div class="paket-summary-left">
          <span class="paket-dot" style="background:#2F6BFF;"></span>
          <span>🖐️ Alfabet (A-Z)</span>
        </div>
        <strong>12 Video</strong>
      </div>

      <div class="paket-summary-item">
        <div class="paket-summary-left">
          <span class="paket-dot" style="background:#56D27A;"></span>
          <span>🔢 Angka</span>
        </div>
        <strong>8 Video</strong>
      </div>

      <div class="paket-summary-item">
        <div class="paket-summary-left">
          <span class="paket-dot" style="background:#F6B73C;"></span>
          <span>👋 Salam & Sapaan</span>
        </div>
        <strong>5 Video</strong>
      </div>

      <div class="paket-summary-item">
        <div class="paket-summary-left">
          <span class="paket-dot" style="background:#8B5CF6;"></span>
          <span>💬 Percakapan Sehari-hari</span>
        </div>
        <strong>4 Video</strong>
      </div>

      <div class="paket-summary-item">
        <div class="paket-summary-left">
          <span class="paket-dot" style="background:#FF5959;"></span>
          <span>😊 Ekspresi & Emosi</span>
        </div>
        <strong>3 Video</strong>
      </div>
    </div>

    <div class="paket-divider"></div>

    <div class="paket-income-label">🎯 Total Murid Terdaftar</div>
    <div class="paket-income-value">1.248 Murid</div>
    <div class="paket-income-sub">1.056 aktif belajar</div>

    <button class="paket-report-btn">📈 Lihat Laporan</button>
  </section>
</div>

<div class="paket-bottom-grid">
  <section class="paket-card">
    <div class="paket-sub-head">
      <h2>🔥 Materi Bahasa Isyarat Terpopuler</h2>
      <a class="paket-link" href="#">Lihat Semua ›</a>
    </div>

    <table class="paket-mini-table">
      <thead>
        <tr>
          <th>Materi</th>
          <th>Kategori</th>
          <th>Jumlah Ditonton</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><strong>Huruf A - Z</strong></td>
          <td>Alfabet</div></td>
          <td>856 ditonton</div></td>
        </tr>
        <tr>
          <td><strong>Angka 1-10</strong></td>
          <td>Angka</div></td>
          <td>742 ditonton</div></td>
        </tr>
        <tr>
          <td><strong>Salam & Sapaan</strong></td>
          <td>Salam</div></td>
          <td>634 ditonton</div></td>
        </tr>
        <tr>
          <td><strong>Percakapan Sehari-hari</strong></td>
          <td>Percakapan</div></td>
          <td>521 ditonton</div></td>
        </tr>
        <tr>
          <td><strong>Ekspresi & Emosi</strong></td>
          <td>Ekspresi</div></td>
          <td>478 ditonton</div></td>
        </tr>
      </tbody>
    </table>

    <div class="paket-bottom-note">Total 5 materi terpopuler</div>
  </section>

  <section class="paket-card">
    <div class="paket-sub-head">
      <h2>🔄 Aktivitas Murid Terbaru</h2>
      <a class="paket-link" href="#">Lihat Semua ›</a>
    </div>

    <div class="paket-activity-list">
      <div class="paket-activity-item">
        <div class="paket-activity-left">
          <div class="paket-activity-avatar">👦</div>
          <div>
            <div class="paket-activity-title">Andi Saputra menyelesaikan kuis “Salam & Sapa”</div>
            <div class="paket-activity-desc">Salam & Sapa</div>
          </div>
        </div>
        <div class="paket-activity-time">1 jam yang lalu</div>
      </div>

      <div class="paket-activity-item">
        <div class="paket-activity-left">
          <div class="paket-activity-avatar">👩</div>
          <div>
            <div class="paket-activity-title">Siti Nurhaliza menonton video “Mengenal Huruf A-Z”</div>
            <div class="paket-activity-desc">Mengenal Huruf A-Z</div>
          </div>
        </div>
        <div class="paket-activity-time">2 jam yang lalu</div>
      </div>

      <div class="paket-activity-item">
        <div class="paket-activity-left">
          <div class="paket-activity-avatar">👦</div>
          <div>
            <div class="paket-activity-title">Budi Santoso mengerjakan kuis “Angka 1-10"</div>
            <div class="paket-activity-desc">Angka 1-10</div>
          </div>
        </div>
        <div class="paket-activity-time">3 jam yang lalu</div>
      </div>

      <div class="paket-activity-item">
        <div class="paket-activity-left">
          <div class="paket-activity-avatar">👩</div>
          <div>
            <div class="paket-activity-title">Aisyah Putri menyelesaikan video “Angka 1-10”</div>
            <div class="paket-activity-desc">Angka 1-10</div>
          </div>
        </div>
        <div class="paket-activity-time">4 jam yang lalu</div>
      </div>

      <div class="paket-activity-item">
        <div class="paket-activity-left">
          <div class="paket-activity-avatar">👨</div>
          <div>
            <div class="paket-activity-title">Dewi Lestari login ke platform</div>
            <div class="paket-activity-desc">Kata Sehari-hari</div>
          </div>
        </div>
        <div class="paket-activity-time">5 jam yang lalu</div>
      </div>
    </div>

    <div class="paket-bottom-note">Total 8 aktivitas hari ini</div>
  </section>
</div>

<script src="{{ asset('js/sections/kelola-paket-guru.js') }}"></script>

</body>
</html>