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
    </div>
  </div>
</div>

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