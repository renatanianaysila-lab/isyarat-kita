<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>IsyaratKita - Kelola Paket</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/sections/kelola-paket-guru.css') }}">

  <style>
    /* STYLING UNTUK MOCKUP POP-UP EDIT MODAL */
    .modal-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 9999;
        opacity: 0;
        pointer-events: none;
        transition: all 0.3s ease;
    }

    .modal-overlay.active {
        opacity: 1;
        pointer-events: auto;
    }

    .modal-content-card {
        background: white;
        padding: 30px;
        border-radius: 16px;
        width: 100%;
        max-width: 450px;
        box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        transform: translateY(-20px);
        transition: all 0.3s ease;
    }

    .modal-overlay.active .modal-content-card {
        transform: translateY(0);
    }

    .modal-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
        border-bottom: 1px solid #e2e8f0;
        padding-bottom: 10px;
    }

    .modal-header h3 {
        color: #1c3d73;
        font-size: 1.2rem;
        font-weight: 600;
        margin: 0;
    }

    .close-modal {
        background: none;
        border: none;
        font-size: 1.5rem;
        cursor: pointer;
        color: #94a3b8;
        line-height: 1;
    }

    .form-group {
        margin-bottom: 16px;
    }

    .form-group label {
        display: block;
        font-size: 0.85rem;
        font-weight: 500;
        color: #64748b;
        margin-bottom: 6px;
    }

    .form-group input, .form-group select {
        width: 100%;
        padding: 10px 14px;
        border: 1px solid #cbd5e1;
        border-radius: 8px;
        font-family: 'Poppins', sans-serif;
        font-size: 0.9rem;
        box-sizing: border-box;
    }

    .modal-footer {
        display: flex;
        justify-content: flex-end;
        gap: 10px;
        margin-top: 25px;
    }

    .btn-secondary {
        background: #e2e8f0;
        color: #475569;
        border: none;
        padding: 10px 18px;
        border-radius: 8px;
        cursor: pointer;
        font-weight: 500;
        font-family: 'Poppins', sans-serif;
    }

    .btn-primary {
        background: #2F6BFF;
        color: white;
        border: none;
        padding: 10px 18px;
        border-radius: 8px;
        cursor: pointer;
        font-weight: 500;
        font-family: 'Poppins', sans-serif;
    }
  </style>
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
        <input type="text" id="paketSearchInput" onkeyup="liveSearchTable()" placeholder="Cari pengguna...">
      </div>

      <div class="paket-select-box">
        <select id="paketStatusSelect" onchange="liveSearchTable()">
          <option value="Semua">Semua Status</option>
          <option value="Aktif">Aktif</option>
          <option value="Tidak Aktif">Tidak Aktif</option>
        </select>
      </div>

      <button class="paket-btn" onclick="alert('Fitur tambah pengguna baru simulasi aktif!')">+ Tambah Pengguna</button>
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
      <tbody id="paketTableBody">
        <tr class="paket-user-row" data-name="Andi Saputra" data-status="Aktif">
          <td>
            <div class="paket-info">
              <div class="paket-thumb" style="background:#CFE8FF;color:#1D4ED8;">👦</div>
              <div>
                <div class="paket-name">Andi Saputra</div>
                <div class="paket-class">andi.saputra@email.com</div>
              </div>
            </div>
          </td>
          <td>10</td>
          <td>8</td>
          <td>Rp30.000</td>
          <td><span class="paket-badge active">Aktif</span></td>
          <td>
            <div class="paket-actions">
              <button class="paket-action-btn">👁</button>
              <button class="paket-action-btn" onclick="openFormEdit(this)">✏</button>
              <button class="paket-action-btn" onclick="this.closest('tr').remove()">🗑</button>
            </div>
          </td>
        </tr>

        <tr class="paket-user-row" data-name="Siti Nurhaliza" data-status="Aktif">
          <td>
            <div class="paket-info">
              <div class="paket-thumb" style="background:#FFD7E7;color:#DB2777;">👩</div>
              <div>
                <div class="paket-name">Siti Nurhaliza</div>
                <div class="paket-class">siti.nurhaliza@email.com</div>
              </div>
            </div>
          </td>
          <td>12</td>
          <td>10</td>
          <td>Rp30.000</td>
          <td><span class="paket-badge active">Aktif</span></td>
          <td>
            <div class="paket-actions">
              <button class="paket-action-btn">👁</button>
              <button class="paket-action-btn" onclick="openFormEdit(this)">✏</button>
              <button class="paket-action-btn" onclick="this.closest('tr').remove()">🗑</button>
            </div>
          </td>
        </tr>

        <tr class="paket-user-row" data-name="Budi Santoso" data-status="Aktif">
          <td>
            <div class="paket-info">
              <div class="paket-thumb" style="background:#DDE7FF;color:#4338CA;">👦</div>
              <div>
                <div class="paket-name">Budi Santoso</div>
                <div class="paket-class">budi.santoso@email.com</div>
              </div>
            </div>
          </td>
          <td>8</td>
          <td>6</td>
          <td>Rp30.000</td>
          <td><span class="paket-badge active">Aktif</span></td>
          <td>
            <div class="paket-actions">
              <button class="paket-action-btn">👁</button>
              <button class="paket-action-btn" onclick="openFormEdit(this)">✏</button>
              <button class="paket-action-btn" onclick="this.closest('tr').remove()">🗑</button>
            </div>
          </td>
        </tr>

        <tr class="paket-user-row" data-name="Dewi Lestari" data-status="Tidak Aktif">
          <td>
            <div class="paket-info">
              <div class="paket-thumb" style="background:#E5E7EB;color:#6B7280;">👩</div>
              <div>
                <div class="paket-name">Dewi Lestari</div>
                <div class="paket-class">dewi.lestari@email.com</div>
              </div>
            </div>
          </td>
          <td>12</td>
          <td>10</td>
          <td>Rp30.000</td>
          <td><span class="paket-badge" style="background:#FFF3E0;color:#B45B0A;">Tidak Aktif</span></td>
          <td>
            <div class="paket-actions">
              <button class="paket-action-btn">👁</button>
              <button class="paket-action-btn" onclick="openFormEdit(this)">✏</button>
              <button class="paket-action-btn" onclick="this.closest('tr').remove()">🗑</button>
            </div>
          </td>
        </tr>

        <tr class="paket-user-row" data-name="Rizky Pratama" data-status="Tidak Aktif">
          <td>
            <div class="paket-info">
              <div class="paket-thumb" style="background:#DBEAFE;color:#2563EB;">👦</div>
              <div>
                <div class="paket-name">Rizky Pratama</div>
                <div class="paket-class">rizky.pratama@email.com</div>
              </div>
            </div>
          </td>
          <td>9</td>
          <td>7</td>
          <td>Rp30.000</td>
          <td><span class="paket-badge" style="background:#FFF3E0;color:#B45B0A;">Tidak Aktif</span></td>
          <td>
            <div class="paket-actions">
              <button class="paket-action-btn">👁</button>
              <button class="paket-action-btn" onclick="openFormEdit(this)">✏</button>
              <button class="paket-action-btn" onclick="this.closest('tr').remove()">🗑</button>
            </div>
          </td>
        </tr>

        <tr class="paket-user-row" data-name="Aisyah Putri" data-status="Aktif">
          <td>
            <div class="paket-info">
              <div class="paket-thumb" style="background:#FBCFE8;color:#BE185D;">👩</div>
              <div>
                <div class="paket-name">Aisyah Putri</div>
                <div class="paket-class">aisyah.putri@email.com</div>
              </div>
            </div>
          </td>
          <td>11</td>
          <td>9</td>
          <td>Rp30.000</td>
          <td><span class="paket-badge active">Aktif</span></td>
          <td>
            <div class="paket-actions">
              <button class="paket-action-btn">👁</button>
              <button class="paket-action-btn" onclick="openFormEdit(this)">✏</button>
              <button class="paket-action-btn" onclick="this.closest('tr').remove()">🗑</button>
            </div>
          </td>
        </tr>

        <tr class="paket-user-row" data-name="Fajar Romadhon" data-status="Aktif">
          <td>
            <div class="paket-info">
              <div class="paket-thumb" style="background:#BFDBFE;color:#1D4ED8;">👦</div>
              <div>
                <div class="paket-name">Fajar Romadhon</div>
                <div class="paket-class">fajar.romadhon@email.com</div>
              </div>
            </div>
          </td>
          <td>10</td>
          <td>8</td>
          <td>Rp30.000</td>
          <td><span class="paket-badge active">Aktif</span></td>
          <td>
            <div class="paket-actions">
              <button class="paket-action-btn">👁</button>
              <button class="paket-action-btn" onclick="openFormEdit(this)">✏</button>
              <button class="paket-action-btn" onclick="this.closest('tr').remove()">🗑</button>
            </div>
          </td>
        </tr>

        <tr class="paket-user-row" data-name="Nadia Aulia" data-status="Tidak Aktif">
          <td>
            <div class="paket-info">
              <div class="paket-thumb" style="background:#DDD6FE;color:#7C3AED;">👩</div>
              <div>
                <div class="paket-name">Nadia Aulia</div>
                <div class="paket-class">nadia.aulia@email.com</div>
              </div>
            </div>
          </td>
          <td>7</td>
          <td>5</td>
          <td>Rp30.000</td>
          <td><span class="paket-badge" style="background:#FFF3E0;color:#B45B0A;">Tidak Aktif</span></td>
          <td>
            <div class="paket-actions">
              <button class="paket-action-btn">👁</button>
              <button class="paket-action-btn" onclick="openFormEdit(this)">✏</button>
              <button class="paket-action-btn" onclick="this.closest('tr').remove()">🗑</button>
            </div>
          </td>
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
          <td>Alfabet</td>
          <td>856 ditonton</td>
        </tr>
        <tr>
          <td><strong>Angka 1-10</strong></td>
          <td>Angka</td>
          <td>742 ditonton</td>
        </tr>
        <tr>
          <td><strong>Salam & Sapaan</strong></td>
          <td>Salam</td>
          <td>634 ditonton</td>
        </tr>
        <tr>
          <td><strong>Percakapan Sehari-hari</strong></td>
          <td>Percakapan</td>
          <td>521 ditonton</td>
        </tr>
        <tr>
          <td><strong>Ekspresi & Emosi</strong></td>
          <td>Ekspresi</td>
          <td>478 ditonton</td>
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

<div class="modal-overlay" id="customEditModal">
  <div class="modal-content-card">
    <div class="modal-header">
      <h3>Edit Data Pengguna</h3>
      <button class="close-modal" onclick="closeFormEdit()">&times;</button>
    </div>
    <div class="modal-body">
      <div class="form-group">
        <label>Nama Lengkap</label>
        <input type="text" id="modalInputName" />
      </div>
      <div class="form-group">
        <label>Alamat Email</label>
        <input type="email" id="modalInputEmail" />
      </div>
      <div class="form-group">
        <label>Status Pengguna</label>
        <select id="modalSelectStatus">
          <option value="Aktif">Aktif</option>
          <option value="Tidak Aktif">Tidak Aktif</option>
        </select>
      </div>
    </div>
    <div class="modal-footer">
      <button class="btn-secondary" onclick="closeFormEdit()">Batal</button>
      <button class="btn-primary" onclick="submitFormEdit()">Simpan</button>
    </div>
  </div>
</div>

<script src="{{ asset('js/sections/kelola-paket-guru.js') }}"></script>

<script>
  // 1. LOGIKA UTAMA LIVE PENCERIAN & FILTER STATUS DROPDOWN
  function liveSearchTable() {
    let keyword = document.getElementById('paketSearchInput').value.toLowerCase();
    let selectedStatus = document.getElementById('paketStatusSelect').value;
    let rows = document.querySelectorAll('.paket-user-row');

    rows.forEach(row => {
      let nameAttr = row.getAttribute('data-name').toLowerCase();
      let statusAttr = row.getAttribute('data-status');

      let matchKeyword = nameAttr.includes(keyword);
      let matchStatus = (selectedStatus === "Semua" || statusAttr === selectedStatus || (selectedStatus === "Tidak Aktif" && statusAttr === "Tidak Aktif"));

      if (matchKeyword && matchStatus) {
        row.style.display = "";
      } else {
        row.style.display = "none";
      }
    });
  }

  // 2. LOGIKA OPERASIONAL POP-UP EDIT MODAL
  let currentRowElement = null;

  function openFormEdit(buttonElement) {
    currentRowElement = buttonElement.closest('.paket-user-row');
    
    // Tarik data visual yang sedang aktif di baris tabel
    let nameText = currentRowElement.querySelector('.paket-name').innerText;
    let emailText = currentRowElement.querySelector('.paket-class').innerText;
    let statusValue = currentRowElement.getAttribute('data-status');

    // Suntikkan data tersebut ke dalam field input modal
    document.getElementById('modalInputName').value = nameText;
    document.getElementById('modalInputEmail').value = emailText;
    document.getElementById('modalSelectStatus').value = statusValue;

    // Naikkan modal pop-up ke layar visual
    document.getElementById('customEditModal').classList.add('active');
  }

  function closeFormEdit() {
    document.getElementById('customEditModal').classList.remove('active');
  }

  function submitFormEdit() {
    if (!currentRowElement) return;

    // Ambil data perubahan terbaru dari dalam input form modal
    let updatedName = document.getElementById('modalInputName').value;
    let updatedEmail = document.getElementById('modalInputEmail').value;
    let updatedStatus = document.getElementById('modalSelectStatus').value;

    // Sinkronkan data visual di baris tabel utama
    currentRowElement.querySelector('.paket-name').innerText = updatedName;
    currentRowElement.querySelector('.paket-class').innerText = updatedEmail;
    currentRowElement.setAttribute('data-name', updatedName);
    currentRowElement.setAttribute('data-status', updatedStatus);

    // Manipulasi badge warna status secara dinamis
    let badgeElement = currentRowElement.querySelector('.paket-badge');
    badgeElement.innerText = updatedStatus;
    
    if (updatedStatus === "Aktif") {
        badgeElement.className = "paket-badge active";
        badgeElement.style.background = ""; // kembalikan ke CSS default file kelola-paket-guru.css
        badgeElement.style.color = "";
    } else {
        badgeElement.className = "paket-badge";
        badgeElement.style.background = "#FFF3E0";
        badgeElement.style.color = "#B45B0A";
    }

    // Tutup dan beri notifikasi sukses
    closeFormEdit();
    alert('Data pengguna berhasil diperbarui!');
  }
</script>

</body>
</html>