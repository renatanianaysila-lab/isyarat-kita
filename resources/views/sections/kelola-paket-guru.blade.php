<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Paket Guru</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- TAMBAHKAN INI -->
    <link rel="stylesheet" href="{{ asset('css/dashboard/kelola-paket-guru.css') }}">

    </head>
<body>
    <div class="paket-page-title">
  <h1>Kelola Paket</h1>
  <p>Kelola dan atur paket pembelajaran Anda</p>
</div>

<div class="paket-stats-row">
  <div class="paket-stat-card">
    <div class="paket-stat-icon" style="background:#EDF3FF;">
      <img src="{{ asset('img/katalog.png') }}" alt="">
    </div>
    <div>
      <div class="paket-stat-value">24</div>
      <div class="paket-stat-label">Total Paket</div>
    </div>
  </div>

  <div class="paket-stat-card">
    <div class="paket-stat-icon" style="background:#E8F9EF;">
      <img src="{{ asset('img/check-circle.png') }}" alt="">
    </div>
    <div>
      <div class="paket-stat-value">18</div>
      <div class="paket-stat-label">Paket Aktif</div>
    </div>
  </div>

  <div class="paket-stat-card">
    <div class="paket-stat-icon" style="background:#FFF5DE;">
      <img src="{{ asset('img/edit-02.png') }}" alt="">
    </div>
    <div>
      <div class="paket-stat-value">4</div>
      <div class="paket-stat-label">Draft</div>
    </div>
  </div>

  <div class="paket-stat-card">
    <div class="paket-stat-icon" style="background:#FFECEC;">
      <img src="{{ asset('img/cancel-circle.png') }}" alt="">
    </div>
    <div>
      <div class="paket-stat-value">2</div>
      <div class="paket-stat-label">Non Aktif</div>
    </div>
  </div>
</div>

<div class="paket-main-grid">
  <section class="paket-card">
    <div class="paket-card-head">
      <h2>Daftar Paket</h2>
    </div>

    <div class="paket-filter-row">
      <div class="paket-search-box">
        <img src="{{ asset('img/search-visual.png') }}" alt="" style="width:16px;height:16px;">
        <input type="text" placeholder="Cari paket...">
      </div>

      <div class="paket-select-box">
        <select>
          <option>Semua Status</option>
          <option>Aktif</option>
          <option>Draft</option>
          <option>Non Aktif</option>
        </select>
      </div>

      <button class="paket-btn">+ Tambah Paket</button>
    </div>

    <table class="paket-table">
      <thead>
        <tr>
          <th>Nama Paket</th>
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
              <div class="paket-thumb" style="background:#EDF3FF;color:#2F6BFF;">A B<br>C</div>
              <div>
                <div class="paket-name">Pengenalan Alfabet</div>
                <div class="paket-class">Kelas 1-2</div>
              </div>
            </div>
          </td>
          <td>10</td>
          <td>8</td>
          <td>Rp30.000</td>
          <td><span class="paket-badge active">Aktif</span></td>
          <td>
            <div class="paket-actions">
              <button class="paket-action-btn"><img src="{{ asset('img/view.png') }}" alt=""></button>
              <button class="paket-action-btn"><img src="{{ asset('img/edit-02.png') }}" alt=""></button>
              <button class="paket-action-btn"><img src="{{ asset('img/delete-02.png') }}" alt=""></button>
            </div>
          </td>
        </tr>

        <tr>
          <td>
            <div class="paket-info">
              <div class="paket-thumb" style="background:#E8F9EF;color:#22B35B;">1 2<br>3</div>
              <div>
                <div class="paket-name">Angka 1-10</div>
                <div class="paket-class">Kelas 1-2</div>
              </div>
            </div>
          </td>
          <td>12</td>
          <td>10</td>
          <td>Rp30.000</td>
          <td><span class="paket-badge active">Aktif</span></td>
          <td>
            <div class="paket-actions">
              <button class="paket-action-btn"><img src="{{ asset('img/view.png') }}" alt=""></button>
              <button class="paket-action-btn"><img src="{{ asset('img/edit-02.png') }}" alt=""></button>
              <button class="paket-action-btn"><img src="{{ asset('img/delete-02.png') }}" alt=""></button>
            </div>
          </td>
        </tr>

        <tr>
          <td>
            <div class="paket-info">
              <div class="paket-thumb" style="background:#F3EDFF;">
                <img src="{{ asset('img/love.png') }}" alt="">
              </div>
              <div>
                <div class="paket-name">Salam & Sapaan</div>
                <div class="paket-class">Kelas 1-2</div>
              </div>
            </div>
          </td>
          <td>8</td>
          <td>6</td>
          <td>Rp30.000</td>
          <td><span class="paket-badge active">Aktif</span></td>
          <td>
            <div class="paket-actions">
              <button class="paket-action-btn"><img src="{{ asset('img/view.png') }}" alt=""></button>
              <button class="paket-action-btn"><img src="{{ asset('img/edit-02.png') }}" alt=""></button>
              <button class="paket-action-btn"><img src="{{ asset('img/delete-02.png') }}" alt=""></button>
            </div>
          </td>
        </tr>

        <tr>
          <td>
            <div class="paket-info">
              <div class="paket-thumb" style="background:#FFF3E5;">
                <img src="{{ asset('img/chatting.png') }}" alt="">
              </div>
              <div>
                <div class="paket-name">Kata Sehari-hari</div>
                <div class="paket-class">Kelas 1-2</div>
              </div>
            </div>
          </td>
          <td>12</td>
          <td>10</td>
          <td>Rp30.000</td>
          <td><span class="paket-badge active">Aktif</span></td>
          <td>
            <div class="paket-actions">
              <button class="paket-action-btn"><img src="{{ asset('img/view.png') }}" alt=""></button>
              <button class="paket-action-btn"><img src="{{ asset('img/edit-02.png') }}" alt=""></button>
              <button class="paket-action-btn"><img src="{{ asset('img/delete-02.png') }}" alt=""></button>
            </div>
          </td>
        </tr>
      </tbody>
    </table>

    <div class="paket-table-foot">
      <div>Menampilkan 1 sampai 4 dari 24 hasil</div>
      <div class="paket-pagination">
        <div class="paket-page-btn">Previous</div>
        <div class="paket-page-btn active">1</div>
        <div class="paket-page-btn">2</div>
        <div class="paket-page-btn">3</div>
        <div class="paket-page-btn">Next</div>
      </div>
    </div>
  </section>

  <section class="paket-summary-card">
    <h2>Ringkasan Paket</h2>

    <div class="donut-wrap">
      <div class="donut-chart">
        <div class="donut-center">
          <div class="big">24</div>
          <div class="small">Total Paket</div>
        </div>
      </div>
    </div>

    <div class="paket-summary-list">
      <div class="paket-summary-item">
        <div class="paket-summary-left">
          <span class="paket-dot" style="background:#56D27A;"></span>
          <span>Paket Aktif</span>
        </div>
        <strong>18 (75%)</strong>
      </div>

      <div class="paket-summary-item">
        <div class="paket-summary-left">
          <span class="paket-dot" style="background:#F6B73C;"></span>
          <span>Draft</span>
        </div>
        <strong>4 (17%)</strong>
      </div>

      <div class="paket-summary-item">
        <div class="paket-summary-left">
          <span class="paket-dot" style="background:#FF5959;"></span>
          <span>Non Aktif</span>
        </div>
        <strong>2 (8%)</strong>
      </div>
    </div>

    <div class="paket-divider"></div>

    <div class="paket-income-label">Pendapatan Total</div>
    <div class="paket-income-value">Rp 720.000</div>
    <div class="paket-income-sub">Dari 24 Paket</div>

    <button class="paket-report-btn">Lihat Laporan</button>
  </section>
</div>

<div class="paket-bottom-grid">
  <section class="paket-card">
    <div class="paket-sub-head">
      <h2>📦 Paket Terpopuler</h2>
      <a class="paket-link" href="#">Lihat Semua ›</a>
    </div>

    <table class="paket-mini-table">
      <thead>
        <tr>
          <th>Paket</th>
          <th>Jumlah Murid</th>
          <th>Rating</th>
          <th>Pendapatan</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            <div class="paket-info">
              <div class="paket-thumb" style="background:#EDF3FF;color:#2F6BFF;">A B<br>C</div>
              <div>
                <div class="paket-name">Pengenalan Alfabet</div>
                <div class="paket-class">Kelas 1-2</div>
              </div>
            </div>
          </td>
          <td><strong>1.240</strong><div class="paket-mini-muted">Murid</div></td>
          <td><strong>4.8</strong> <span class="paket-star">★</span><div class="paket-mini-muted">(128 ulasan)</div></td>
          <td>Rp 372.000</td>
        </tr>

        <tr>
          <td>
            <div class="paket-info">
              <div class="paket-thumb" style="background:#E8F9EF;color:#22B35B;">1 2<br>3</div>
              <div>
                <div class="paket-name">Angka 1-10</div>
                <div class="paket-class">Kelas 1-2</div>
              </div>
            </div>
          </td>
          <td><strong>980</strong><div class="paket-mini-muted">Murid</div></td>
          <td><strong>4.7</strong> <span class="paket-star">★</span><div class="paket-mini-muted">(96 ulasan)</div></td>
          <td>Rp 294.000</td>
        </tr>

        <tr>
          <td>
            <div class="paket-info">
              <div class="paket-thumb" style="background:#F3EDFF;">
                <img src="{{ asset('img/love.png') }}" alt="">
              </div>
              <div>
                <div class="paket-name">Salam & Sapaan</div>
                <div class="paket-class">Kelas 1-2</div>
              </div>
            </div>
          </td>
          <td><strong>750</strong><div class="paket-mini-muted">Murid</div></td>
          <td><strong>4.6</strong> <span class="paket-star">★</span><div class="paket-mini-muted">(82 ulasan)</div></td>
          <td>Rp 225.000</td>
        </tr>

        <tr>
          <td>
            <div class="paket-info">
              <div class="paket-thumb" style="background:#FFF3E5;">
                <img src="{{ asset('img/chatting.png') }}" alt="">
              </div>
              <div>
                <div class="paket-name">Kata Sehari-hari</div>
                <div class="paket-class">Kelas 1-2</div>
              </div>
            </div>
          </td>
          <td><strong>620</strong><div class="paket-mini-muted">Murid</div></td>
          <td><strong>4.5</strong> <span class="paket-star">★</span><div class="paket-mini-muted">(64 ulasan)</div></td>
          <td>Rp 186.000</td>
        </tr>
      </tbody>
    </table>

    <div class="paket-bottom-note">Total 4 paket terpopuler</div>
  </section>

  <section class="paket-card">
    <div class="paket-sub-head">
      <h2>👥 Aktivitas Terbaru</h2>
      <a class="paket-link" href="#">Lihat Semua ›</a>
    </div>

    <div class="paket-activity-list">
      <div class="paket-activity-item">
        <div class="paket-activity-left">
          <div class="paket-activity-avatar">
            <img src="{{ asset('img/user.png') }}" alt="">
          </div>
          <div>
            <div class="paket-activity-title">Paket "Pengenalan Alfabet" diperbarui</div>
            <div class="paket-activity-desc">Menambahkan 2 video baru</div>
          </div>
        </div>
        <div class="paket-activity-time">2 jam yang lalu</div>
      </div>

      <div class="paket-activity-item">
        <div class="paket-activity-left">
          <div class="paket-activity-avatar">
            <img src="{{ asset('img/user.png') }}" alt="">
          </div>
          <div>
            <div class="paket-activity-title">Paket "Angka 1-10" dibuat</div>
            <div class="paket-activity-desc">Paket baru berhasil ditambahkan</div>
          </div>
        </div>
        <div class="paket-activity-time">5 jam yang lalu</div>
      </div>

      <div class="paket-activity-item">
        <div class="paket-activity-left">
          <div class="paket-activity-avatar">
            <img src="{{ asset('img/user.png') }}" alt="">
          </div>
          <div>
            <div class="paket-activity-title">Paket "Salam & Sapaan" diperbarui</div>
            <div class="paket-activity-desc">Update kuis dan materi pembelajaran</div>
          </div>
        </div>
        <div class="paket-activity-time">1 hari yang lalu</div>
      </div>

      <div class="paket-activity-item">
        <div class="paket-activity-left">
          <div class="paket-activity-avatar">
            <img src="{{ asset('img/user.png') }}" alt="">
          </div>
          <div>
            <div class="paket-activity-title">Paket "Kata Sehari-hari" diperbarui</div>
            <div class="paket-activity-desc">Menambahkan materi baru</div>
          </div>
        </div>
        <div class="paket-activity-time">2 hari yang lalu</div>
      </div>

      <div class="paket-activity-item">
        <div class="paket-activity-left">
          <div class="paket-activity-avatar">
            <img src="{{ asset('img/user.png') }}" alt="">
          </div>
          <div>
            <div class="paket-activity-title">Paket "Angka 1-10" diarsipkan</div>
            <div class="paket-activity-desc">Paket dipindahkan ke non aktif</div>
          </div>
        </div>
        <div class="paket-activity-time">3 hari yang lalu</div>
      </div>
    </div>

    <div class="paket-bottom-note">Total 5 aktivitas terbaru</div>
  </section>
</div>

                    <div style="text-align:center; color:#8a97af; font-size:14px; margin-top:18px;">
                        Total 5 aktivitas terbaru
                    </div>
                </div>
            </section>
        </main>
    </div>
</body>
</html>

