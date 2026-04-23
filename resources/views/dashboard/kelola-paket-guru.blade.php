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
    <div class="layout">
        <aside class="sidebar">
            <div class="brand">
                <div class="brand-logo">IK</div>
                <div class="brand-text">
                    <h2>IsyaratKita</h2>
                    <p>Dashboard Guru</p>
                </div>
            </div>

            <nav class="menu">
                <a href="#"><i class="bi bi-pie-chart-fill"></i> Dashboard</a>
                <a href="#" class="active"><i class="bi bi-box-seam"></i> Kelola Paket</a>
                <a href="#"><i class="bi bi-camera-video"></i> Kelola Video</a>
                <a href="#"><i class="bi bi-ui-checks-grid"></i> Kelola Kuis</a>
                <a href="#"><i class="bi bi-people"></i> Monitoring Murid</a>
                <a href="#"><i class="bi bi-star-fill"></i> Feedback & Rating</a>
                <a href="#"><i class="bi bi-credit-card-2-front"></i> Transaksi</a>
                <a href="#"><i class="bi bi-person"></i> Profil Guru</a>
                <a href="#" class="logout"><i class="bi bi-box-arrow-left"></i> Logout</a>
            </nav>
        </aside>

        <main class="main">
            <div class="topbar">
                <div class="search-box">
                    <i class="bi bi-search"></i>
                    <input type="text" placeholder="Search...">
                </div>

                <div class="top-icons">
                    <div class="icon-btn"><i class="bi bi-bell"></i></div>
                    <div class="icon-btn"><i class="bi bi-question-circle"></i></div>
                    <div class="icon-btn"><i class="bi bi-person"></i></div>
                </div>
            </div>

            <div class="page-title-wrap">
                <div class="page-title-row">
                    <div class="page-badge"><i class="bi bi-box-seam"></i></div>
                    <div class="page-title">Kelola Paket</div>
                </div>
                <div class="page-subtitle">Kelola dan atur paket pembelajaran Anda</div>
            </div>

            <section class="stats-grid">
                <div class="stat-card">
                    <div class="stat-icon blue-soft"><i class="bi bi-bag"></i></div>
                    <div>
                        <div class="stat-number">24</div>
                        <div class="stat-label">Total Paket</div>
                    </div>
                </div>

                <div class="stat-card">
                    <div class="stat-icon green-soft"><i class="bi bi-check-circle-fill"></i></div>
                    <div>
                        <div class="stat-number">18</div>
                        <div class="stat-label">Paket Aktif</div>
                    </div>
                </div>

                <div class="stat-card">
                    <div class="stat-icon yellow-soft"><i class="bi bi-pencil-square"></i></div>
                    <div>
                        <div class="stat-number">4</div>
                        <div class="stat-label">Draft</div>
                    </div>
                </div>

                <div class="stat-card">
                    <div class="stat-icon red-soft"><i class="bi bi-x-circle-fill"></i></div>
                    <div>
                        <div class="stat-number">2</div>
                        <div class="stat-label">Non Aktif</div>
                    </div>
                </div>
            </section>

            <section class="content-grid">
                <div class="card">
                    <div class="card-title">Daftar Paket</div>

                    <div class="filter-bar">
                        <div class="input-group">
                            <i class="bi bi-search"></i>
                            <input type="text" placeholder="Cari paket...">
                        </div>

                        <div class="select-group">
                            <select>
                                <option>Semua Status</option>
                                <option>Aktif</option>
                                <option>Draft</option>
                                <option>Non Aktif</option>
                            </select>
                        </div>

                        <button class="btn-primary">
                            <i class="bi bi-plus-lg"></i> Tambah Paket
                        </button>
                    </div>

                    <div class="table-wrap">
                        <table>
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
                                            <div class="paket-icon blue-soft">A B<br>C</div>
                                            <div>
                                                <div class="paket-name">Pengenalan Alfabet</div>
                                                <div class="paket-level">Kelas 1-2</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>10</td>
                                    <td>8</td>
                                    <td>Rp30.000</td>
                                    <td><span class="status active">Aktif</span></td>
                                    <td>
                                        <div class="action-group">
                                            <button class="action-btn"><i class="bi bi-eye"></i></button>
                                            <button class="action-btn edit"><i class="bi bi-pencil"></i></button>
                                            <button class="action-btn delete"><i class="bi bi-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="paket-info">
                                            <div class="paket-icon green-soft">1 2<br>3</div>
                                            <div>
                                                <div class="paket-name">Angka 1-10</div>
                                                <div class="paket-level">Kelas 1-2</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>12</td>
                                    <td>10</td>
                                    <td>Rp30.000</td>
                                    <td><span class="status active">Aktif</span></td>
                                    <td>
                                        <div class="action-group">
                                            <button class="action-btn"><i class="bi bi-eye"></i></button>
                                            <button class="action-btn edit"><i class="bi bi-pencil"></i></button>
                                            <button class="action-btn delete"><i class="bi bi-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="paket-info">
                                            <div class="paket-icon" style="background:#f1ebff;color:#7c4dff;">
                                                <i class="bi bi-hearts"></i>
                                            </div>
                                            <div>
                                                <div class="paket-name">Salam & Sapaan</div>
                                                <div class="paket-level">Kelas 1-2</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>8</td>
                                    <td>6</td>
                                    <td>Rp30.000</td>
                                    <td><span class="status active">Aktif</span></td>
                                    <td>
                                        <div class="action-group">
                                            <button class="action-btn"><i class="bi bi-eye"></i></button>
                                            <button class="action-btn edit"><i class="bi bi-pencil"></i></button>
                                            <button class="action-btn delete"><i class="bi bi-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="paket-info">
                                            <div class="paket-icon" style="background:#fff3e5;color:#e89c16;">
                                                <i class="bi bi-chat-dots"></i>
                                            </div>
                                            <div>
                                                <div class="paket-name">Kata Sehari-hari</div>
                                                <div class="paket-level">Kelas 1-2</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>12</td>
                                    <td>10</td>
                                    <td>Rp30.000</td>
                                    <td><span class="status active">Aktif</span></td>
                                    <td>
                                        <div class="action-group">
                                            <button class="action-btn"><i class="bi bi-eye"></i></button>
                                            <button class="action-btn edit"><i class="bi bi-pencil"></i></button>
                                            <button class="action-btn delete"><i class="bi bi-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="table-footer">
                        <div>Menampilkan 1 sampai 4 dari 24 hasil</div>
                        <div class="pagination">
                            <div class="page-btn"><i class="bi bi-chevron-left"></i> Previous</div>
                            <div class="page-btn active">1</div>
                            <div class="page-btn">2</div>
                            <div class="page-btn">3</div>
                            <div class="page-btn">Next <i class="bi bi-chevron-right"></i></div>
                        </div>
                    </div>
                </div>

                <div class="summary-card">
                    <div class="summary-title">Ringkasan Paket</div>

                    <div class="donut-wrap" style="position: relative;">
                        <div class="donut"></div>
                        <div class="donut-center">
                            <h3>24</h3>
                            <p>Total Paket</p>
                        </div>
                    </div>

                    <div class="summary-list">
                        <div class="summary-item">
                            <div class="summary-left">
                                <span class="dot" style="background:#56d27a;"></span>
                                <span>Paket Aktif</span>
                            </div>
                            <strong>18 (75%)</strong>
                        </div>

                        <div class="summary-item">
                            <div class="summary-left">
                                <span class="dot" style="background:#f6b73c;"></span>
                                <span>Draft</span>
                            </div>
                            <strong>4 (17%)</strong>
                        </div>

                        <div class="summary-item">
                            <div class="summary-left">
                                <span class="dot" style="background:#ff5959;"></span>
                                <span>Non Aktif</span>
                            </div>
                            <strong>2 (8%)</strong>
                        </div>
                    </div>

                    <div class="divider"></div>

                    <div class="summary-income-label">Pendapatan Total</div>
                    <div class="summary-income">Rp 720.000</div>
                    <div class="summary-small">Dari 24 Paket</div>

                    <button class="summary-btn">
                        <i class="bi bi-bar-chart-line"></i> Lihat Laporan
                    </button>
                </div>
            </section>

            <section class="bottom-grid">
                <div class="card">
                    <div class="sub-card-header">
                        <h3><i class="bi bi-box2-heart"></i> Paket Terpopuler</h3>
                        <a href="#" class="see-all">Lihat Semua ></a>
                    </div>

                    <div class="table-wrap">
                        <table class="mini-table">
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
                                            <div class="paket-icon blue-soft">A B<br>C</div>
                                            <div>
                                                <div class="paket-name">Pengenalan Alfabet</div>
                                                <div class="paket-level">Kelas 1-2</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td><strong>1.240</strong><div class="mini-muted">Murid</div></td>
                                    <td><strong>4.8</strong> <span class="rating-star">★</span><div class="mini-muted">(128 ulasan)</div></td>
                                    <td>Rp 372.000</td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="paket-info">
                                            <div class="paket-icon green-soft">1 2<br>3</div>
                                            <div>
                                                <div class="paket-name">Angka 1-10</div>
                                                <div class="paket-level">Kelas 1-2</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td><strong>980</strong><div class="mini-muted">Murid</div></td>
                                    <td><strong>4.7</strong> <span class="rating-star">★</span><div class="mini-muted">(96 ulasan)</div></td>
                                    <td>Rp 294.000</td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="paket-info">
                                            <div class="paket-icon" style="background:#f1ebff;color:#7c4dff;">
                                                <i class="bi bi-hearts"></i>
                                            </div>
                                            <div>
                                                <div class="paket-name">Salam & Sapaan</div>
                                                <div class="paket-level">Kelas 1-2</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td><strong>750</strong><div class="mini-muted">Murid</div></td>
                                    <td><strong>4.6</strong> <span class="rating-star">★</span><div class="mini-muted">(82 ulasan)</div></td>
                                    <td>Rp 225.000</td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="paket-info">
                                            <div class="paket-icon" style="background:#fff3e5;color:#e89c16;">
                                                <i class="bi bi-chat-dots"></i>
                                            </div>
                                            <div>
                                                <div class="paket-name">Kata Sehari-hari</div>
                                                <div class="paket-level">Kelas 1-2</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td><strong>620</strong><div class="mini-muted">Murid</div></td>
                                    <td><strong>4.5</strong> <span class="rating-star">★</span><div class="mini-muted">(64 ulasan)</div></td>
                                    <td>Rp 186.000</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div style="text-align:center; color:#8a97af; font-size:14px; margin-top:14px;">
                        Total 4 paket terpopuler
                    </div>
                </div>

                <div class="card">
                    <div class="sub-card-header">
                        <h3><i class="bi bi-people-fill"></i> Aktivitas Terbaru</h3>
                        <a href="#" class="see-all">Lihat Semua ></a>
                    </div>

                    <div class="activity-list">
                        <div class="activity-item">
                            <div class="activity-left">
                                <div class="activity-avatar"><i class="bi bi-person"></i></div>
                                <div class="activity-text">
                                    <h4>Paket "Pengenalan Alfabet" diperbarui</h4>
                                    <p>Menambahkan 2 video baru</p>
                                </div>
                            </div>
                            <div class="activity-time">2 jam yang lalu</div>
                        </div>

                        <div class="activity-item">
                            <div class="activity-left">
                                <div class="activity-avatar"><i class="bi bi-person"></i></div>
                                <div class="activity-text">
                                    <h4>Paket "Angka 1-10" dibuat</h4>
                                    <p>Paket baru berhasil ditambahkan</p>
                                </div>
                            </div>
                            <div class="activity-time">5 jam yang lalu</div>
                        </div>

                        <div class="activity-item">
                            <div class="activity-left">
                                <div class="activity-avatar"><i class="bi bi-person"></i></div>
                                <div class="activity-text">
                                    <h4>Paket "Salam & Sapaan" diperbarui</h4>
                                    <p>Update kuis dan materi pembelajaran</p>
                                </div>
                            </div>
                            <div class="activity-time">1 hari yang lalu</div>
                        </div>

                        <div class="activity-item">
                            <div class="activity-left">
                                <div class="activity-avatar"><i class="bi bi-person"></i></div>
                                <div class="activity-text">
                                    <h4>Paket "Kata Sehari-hari" diperbarui</h4>
                                    <p>Menambahkan materi baru</p>
                                </div>
                            </div>
                            <div class="activity-time">2 hari yang lalu</div>
                        </div>

                        <div class="activity-item">
                            <div class="activity-left">
                                <div class="activity-avatar"><i class="bi bi-person"></i></div>
                                <div class="activity-text">
                                    <h4>Paket "Angka 1-10" diarsipkan</h4>
                                    <p>Paket dipindahkan ke non aktif</p>
                                </div>
                            </div>
                            <div class="activity-time">3 hari yang lalu</div>
                        </div>
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

