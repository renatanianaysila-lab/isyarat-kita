<<<<<<< HEAD
<div class="trx-page-title">
  <h1>Transaksi</h1>
  <p>Kelola dan pantau semua transaksi pembayaran</p>
</div>

<div class="trx-stats-row">
  <div class="trx-stat-card">
    <div class="trx-stat-icon soft-blue">💳</div>
    <div>
      <div class="trx-stat-value">Rp 720.000</div>
      <div class="trx-stat-label">Total Pendapatan</div>
      <div class="trx-stat-sub positive">+18% dari minggu lalu</div>
    </div>
  </div>

  <div class="trx-stat-card">
    <div class="trx-stat-icon soft-green">✓</div>
    <div>
      <div class="trx-stat-value">24</div>
      <div class="trx-stat-label">Total Transaksi</div>
      <div class="trx-stat-sub positive">+20% dari minggu lalu</div>
    </div>
  </div>

  <div class="trx-stat-card">
    <div class="trx-stat-icon soft-yellow">◷</div>
    <div>
      <div class="trx-stat-value">22</div>
      <div class="trx-stat-label">Transaksi Berhasil</div>
      <div class="trx-stat-sub positive">+22% dari minggu lalu</div>
    </div>
  </div>

  <div class="trx-stat-card">
    <div class="trx-stat-icon soft-red">✕</div>
    <div>
      <div class="trx-stat-value">2</div>
      <div class="trx-stat-label">Transaksi Gagal</div>
      <div class="trx-stat-sub warning">↓ 10% dari minggu lalu</div>
=======
<div class="transaksi-container">
  <!-- Header -->
  <div class="transaksi-header">
    <h1>💰 Transaksi & Pendapatan</h1>
    <p>Kelola penarikan saldo dan lihat riwayat pemasukan dari murid-muridmu</p>
  </div>

  <!-- Saldo Card -->
  <div class="saldo-card">
    <div class="saldo-icon">💵</div>
    <div class="saldo-content">
      <div class="saldo-label">SALDO SAAT INI</div>
      <div class="saldo-value" id="saldoValue">Rp 0</div>
      <div class="saldo-sub">Total yang dapat ditarik</div>
    </div>
    <button class="btn-tarik" id="tarikSaldoBtn">
      <span>💰</span> TARIK UANG
    </button>
  </div>

  <div class="minimal-text">Minimal penarikan: Rp 500.000</div>

  <!-- Daftar Pemasukan -->
  <div class="pemasukan-section">
    <div class="section-header">
      <h2>📋 Daftar Pemasukan</h2>
      <span class="badge-terbaru">Terbaru</span>
    </div>

    <div class="pemasukan-list" id="pemasukanList">
      <!-- Data akan diisi JavaScript -->
    </div>

    <div class="lihat-semua">
      <a href="#" id="lihatSemuaBtn">Lihat Semua Transaksi ›</a>
>>>>>>> 6df4230955a64022ee5ccdb0a4d7614c9029b418
    </div>
  </div>
</div>

<<<<<<< HEAD
<div class="trx-main-grid">
  <section class="trx-card">
    <div class="trx-card-head">
      <h2>Daftar Transaksi</h2>
    </div>

    <div class="trx-filter-row">
      <div class="trx-search-box">
        <span>🔍</span>
        <input type="text" placeholder="Cari transaksi...">
      </div>

      <div class="trx-select-box">
        <select>
          <option>Semua Metode</option>
          <option>QRIS</option>
          <option>Virtual Account</option>
        </select>
      </div>

      <div class="trx-select-box">
        <select>
          <option>Semua Status</option>
          <option>Berhasil</option>
          <option>Gagal</option>
          <option>Pending</option>
        </select>
      </div>

      <button class="trx-secondary-btn">Export</button>
    </div>

    <table class="trx-table">
      <thead>
        <tr>
          <th>ID Transaksi</th>
          <th>Murid</th>
          <th>Paket</th>
          <th>Metode Pembayaran</th>
          <th>Jumlah</th>
          <th>Status</th>
          <th>Tanggal</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>TRX-240518-001</td>
          <td>Andi Saputra</td>
          <td>Pengenalan Alfabet</td>
          <td>QRIS</td>
          <td>Rp30.000</td>
          <td><span class="trx-badge success">Berhasil</span></td>
          <td>18 Mei 2024 10:30</td>
          <td><button class="trx-action-btn">👁</button></td>
        </tr>
        <tr>
          <td>TRX-240518-002</td>
          <td>Siti Nurhaliza</td>
          <td>Angka 1-10</td>
          <td>BCA Virtual Account</td>
          <td>Rp30.000</td>
          <td><span class="trx-badge success">Berhasil</span></td>
          <td>18 Mei 2024 09:45</td>
          <td><button class="trx-action-btn">👁</button></td>
        </tr>
        <tr>
          <td>TRX-240517-003</td>
          <td>Budi Santoso</td>
          <td>Salam & Sapaan</td>
          <td>QRIS</td>
          <td>Rp30.000</td>
          <td><span class="trx-badge success">Berhasil</span></td>
          <td>17 Mei 2024 16:20</td>
          <td><button class="trx-action-btn">👁</button></td>
        </tr>
        <tr>
          <td>TRX-240517-004</td>
          <td>Dewi Lestari</td>
          <td>Kata Sehari-hari</td>
          <td>Mandiri Virtual Account</td>
          <td>Rp30.000</td>
          <td><span class="trx-badge success">Berhasil</span></td>
          <td>17 Mei 2024 14:10</td>
          <td><button class="trx-action-btn">👁</button></td>
        </tr>
        <tr>
          <td>TRX-240516-005</td>
          <td>Rizky Pratama</td>
          <td>Pengenalan Alfabet</td>
          <td>BRI Virtual Account</td>
          <td>Rp30.000</td>
          <td><span class="trx-badge failed">Gagal</span></td>
          <td>16 Mei 2024 11:05</td>
          <td><button class="trx-action-btn">👁</button></td>
        </tr>
        <tr>
          <td>TRX-240516-006</td>
          <td>Aisyah Putri</td>
          <td>Angka 1-10</td>
          <td>QRIS</td>
          <td>Rp30.000</td>
          <td><span class="trx-badge success">Berhasil</span></td>
          <td>16 Mei 2024 09:30</td>
          <td><button class="trx-action-btn">👁</button></td>
        </tr>
        <tr>
          <td>TRX-240515-007</td>
          <td>Fajar Romadhon</td>
          <td>Salam & Sapaan</td>
          <td>BNI Virtual Account</td>
          <td>Rp30.000</td>
          <td><span class="trx-badge success">Berhasil</span></td>
          <td>15 Mei 2024 13:50</td>
          <td><button class="trx-action-btn">👁</button></td>
        </tr>
        <tr>
          <td>TRX-240515-008</td>
          <td>Nadia Aulia</td>
          <td>Kata Sehari-hari</td>
          <td>QRIS</td>
          <td>Rp30.000</td>
          <td><span class="trx-badge success">Berhasil</span></td>
          <td>15 Mei 2024 10:15</td>
          <td><button class="trx-action-btn">👁</button></td>
        </tr>
      </tbody>
    </table>

    <div class="trx-table-foot">
      <div>Menampilkan 1 sampai 8 dari 24 transaksi</div>
      <div class="trx-pagination">
        <div class="trx-page-btn">Previous</div>
        <div class="trx-page-btn active">1</div>
        <div class="trx-page-btn">2</div>
        <div class="trx-page-btn">3</div>
        <div class="trx-page-btn">Next</div>
      </div>
    </div>
  </section>

  <div class="trx-side-wrap">
    <section class="trx-summary-card">
      <div class="trx-side-head">
        <h3>Ringkasan Pendapatan</h3>
        <span class="trx-range">7 Hari Terakhir</span>
      </div>

      <div class="trx-income-title">Total Pendapatan</div>
      <div class="trx-income-big">Rp 720.000</div>
      <div class="trx-income-sub positive">+18% dari 7 hari lalu</div>

      <div class="trx-line-chart"></div>

      <div class="trx-summary-list">
        <div class="trx-summary-item">
          <span class="dot blue"></span>
          <span>QRIS</span>
          <strong>Rp 420.000 (58%)</strong>
        </div>
        <div class="trx-summary-item">
          <span class="dot yellow"></span>
          <span>Virtual Account</span>
          <strong>Rp 300.000 (42%)</strong>
        </div>
      </div>
    </section>

    <section class="trx-card">
      <h3>Metode Pembayaran</h3>
      <div class="trx-method-wrap">
        <div class="trx-method-ring"></div>
        <div class="trx-method-list">
          <div class="trx-method-item"><span class="dot blue"></span><span>QRIS</span><strong>14 Transaksi (58%)</strong></div>
          <div class="trx-method-item"><span class="dot yellow"></span><span>Virtual Account</span><strong>10 Transaksi (42%)</strong></div>
        </div>
      </div>
    </section>

    <section class="trx-card">
      <h3>Status Transaksi</h3>
      <div class="trx-status-list">
        <div class="trx-status-item"><span class="dot green"></span><span>Berhasil</span><strong>22 Transaksi (92%)</strong></div>
        <div class="trx-status-item"><span class="dot yellow"></span><span>Pending</span><strong>0 Transaksi (0%)</strong></div>
        <div class="trx-status-item"><span class="dot red"></span><span>Gagal</span><strong>2 Transaksi (8%)</strong></div>
      </div>
    </section>
  </div>
</div>

<div class="trx-bottom-grid">
  <section class="trx-card">
    <div class="trx-card-head">
      <h2>Rincian Metode Pembayaran</h2>
    </div>

    <table class="trx-mini-table">
      <thead>
        <tr>
          <th>Metode</th>
          <th>Jumlah Transaksi</th>
          <th>Total Pendapatan</th>
          <th>Persentase</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>QRIS</td>
          <td>14</td>
          <td>Rp 420.000</td>
          <td>58%</td>
        </tr>
        <tr>
          <td>Virtual Account</td>
          <td>10</td>
          <td>Rp 300.000</td>
          <td>42%</td>
        </tr>
        <tr>
          <td><strong>Total</strong></td>
          <td><strong>24</strong></td>
          <td><strong>Rp 720.000</strong></td>
          <td><strong>100%</strong></td>
        </tr>
      </tbody>
    </table>
  </section>

  <section class="trx-card">
    <div class="trx-card-head">
      <h2>Aktivitas Terbaru</h2>
      <a class="trx-link" href="#">Lihat Semua ›</a>
    </div>

    <div class="trx-activity-list">
      <div class="trx-activity-item">
        <div>
          <div class="trx-activity-title">Andi Saputra membeli paket “Pengenalan Alfabet”</div>
          <div class="trx-activity-desc">Pembayaran berhasil melalui QRIS</div>
        </div>
        <div class="trx-activity-time">18 Mei 2024 10:30</div>
      </div>
      <div class="trx-activity-item">
        <div>
          <div class="trx-activity-title">Siti Nurhaliza membeli paket “Angka 1-10”</div>
          <div class="trx-activity-desc">Pembayaran berhasil melalui BCA Virtual Account</div>
        </div>
        <div class="trx-activity-time">18 Mei 2024 09:45</div>
      </div>
      <div class="trx-activity-item">
        <div>
          <div class="trx-activity-title">Budi Santoso membeli paket “Salam & Sapaan”</div>
          <div class="trx-activity-desc">Pembayaran berhasil melalui QRIS</div>
        </div>
        <div class="trx-activity-time">17 Mei 2024 16:20</div>
      </div>
      <div class="trx-activity-item">
        <div>
          <div class="trx-activity-title">Rizky Pratama pembayaran gagal</div>
          <div class="trx-activity-desc">Pembayaran BRI Virtual Account tidak berhasil</div>
        </div>
        <div class="trx-activity-time">16 Mei 2024 11:05</div>
      </div>
      <div class="trx-activity-item">
        <div>
          <div class="trx-activity-title">Fajar Romadhon membeli paket “Salam & Sapaan”</div>
          <div class="trx-activity-desc">Pembayaran berhasil melalui BNI Virtual Account</div>
        </div>
        <div class="trx-activity-time">15 Mei 2024 13:50</div>
      </div>
    </div>

    <div class="trx-bottom-note">Total 5 aktivitas terbaru</div>
  </section>
</div>
=======
<!-- Modal Tarik Saldo -->
<div id="tarikModal" class="modal-transaksi">
  <div class="modal-transaksi-content">
    <div class="modal-transaksi-header">
      <h3>💰 Tarik Saldo</h3>
      <span class="modal-close">&times;</span>
    </div>
    <div class="modal-transaksi-body">
      <form id="tarikForm">
        <div class="form-group">
          <label>Jumlah Penarikan</label>
          <input type="text" id="jumlahTarik" placeholder="Minimal Rp 500.000" required>
        </div>
        <div class="form-group">
          <label>Nomor Rekening</label>
          <input type="text" id="nomorRekening" placeholder="Masukkan nomor rekening bank" required>
        </div>
        <div class="form-group">
          <label>Atas Nama</label>
          <input type="text" id="atasNama" placeholder="Nama pemilik rekening" required>
        </div>
        <div class="form-group">
          <label>Nama Bank</label>
          <input type="text" id="namaBank" placeholder="Contoh: BCA, Mandiri, BRI" required>
        </div>
        <div class="modal-buttons">
          <button type="button" class="btn-cancel" id="cancelTarikBtn">Batal</button>
          <button type="submit" class="btn-submit">Ajukan Penarikan</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Toast Notification -->
<div id="toastNotif" class="toast-notification"></div>

@push('scripts')
<script src="{{ asset('js/sections/transaksi-guru.js') }}"></script>
@endpush
>>>>>>> 6df4230955a64022ee5ccdb0a4d7614c9029b418
