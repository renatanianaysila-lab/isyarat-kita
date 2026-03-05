<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>IsyaratKita - Materi Saya</title>

    <!-- Google Font (Poppins) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/dashboard-murid.css') }}">
    
    <style>
        /* Style tambahan untuk halaman materi saya */
        .materi-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }

        .materi-header h1 {
            font-size: 1.8rem;
            color: #1e293b;
            margin: 0;
        }

        .search-box {
            display: flex;
            align-items: center;
            background: white;
            border: 1px solid #e2e8f0;
            border-radius: 30px;
            padding: 5px 15px;
            width: 280px;
        }

        .search-box input {
            border: none;
            outline: none;
            width: 100%;
            padding: 8px 5px;
            font-family: 'Poppins', sans-serif;
        }

        .filter-tabs {
            display: flex;
            gap: 10px;
            margin-bottom: 25px;
            flex-wrap: wrap;
        }

        .filter-tab {
            padding: 8px 20px;
            border-radius: 30px;
            background: white;
            border: 1px solid #e2e8f0;
            font-size: 0.9rem;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.2s;
        }

        .filter-tab:hover {
            background: #f1f5f9;
        }

        .filter-tab.active {
            background: #4CAF50;
            color: white;
            border-color: #4CAF50;
        }

        .stats-row {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            margin-bottom: 30px;
        }

        .stat-card {
            background: white;
            padding: 20px;
            border-radius: 16px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        }

        .stat-number {
            font-size: 1.8rem;
            font-weight: 700;
            color: #1e293b;
            line-height: 1.2;
        }

        .stat-label {
            color: #64748b;
            font-size: 0.85rem;
            margin-top: 5px;
        }

        .materi-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 20px;
        }

        .materi-card {
            background: white;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .materi-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 24px rgba(0,0,0,0.12);
        }

        .thumbnail {
            height: 160px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 3rem;
        }

        .thumbnail-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0,0,0,0.3);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s;
        }

        .materi-card:hover .thumbnail-overlay {
            opacity: 1;
        }

        .play-button {
            width: 50px;
            height: 50px;
            background: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #4CAF50;
            font-size: 1.5rem;
        }

        .duration {
            position: absolute;
            bottom: 10px;
            right: 10px;
            background: rgba(0,0,0,0.7);
            color: white;
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 0.75rem;
            font-weight: 500;
        }

        .paket-badge {
            position: absolute;
            top: 10px;
            left: 10px;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 0.7rem;
            font-weight: 600;
            text-transform: uppercase;
        }

        .paket-badge.dasar {
            background: #e9ecef;
            color: #495057;
        }

        .paket-badge.premium {
            background: #4CAF50;
            color: white;
        }

        .materi-info {
            padding: 15px;
        }

        .materi-title {
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 5px;
            color: #1e293b;
        }

        .materi-desc {
            font-size: 0.8rem;
            color: #64748b;
            margin-bottom: 12px;
            line-height: 1.4;
        }

        .progress-area {
            margin: 10px 0;
        }

        .progress-row {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 0.8rem;
        }

        .progress-bar-small {
            flex: 1;
            height: 6px;
            background: #e9ecef;
            border-radius: 10px;
            overflow: hidden;
        }

        .progress-fill-small {
            height: 100%;
            background: #4CAF50;
            border-radius: 10px;
        }

        .completed-badge {
            color: #4CAF50;
            font-weight: 500;
            font-size: 0.8rem;
        }

        .btn-action {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            font-size: 0.9rem;
            cursor: pointer;
            margin-top: 12px;
            transition: background 0.2s;
            font-family: 'Poppins', sans-serif;
        }

        .btn-mulai {
            background: #4CAF50;
            color: white;
        }

        .btn-mulai:hover {
            background: #43a047;
        }

        .btn-lanjutkan {
            background: #2196F3;
            color: white;
        }

        .btn-lanjutkan:hover {
            background: #1e88e5;
        }

        .btn-ulangi {
            background: #f1f5f9;
            color: #1e293b;
        }

        .btn-ulangi:hover {
            background: #e2e8f0;
        }

        .empty-state {
            grid-column: 1 / -1;
            text-align: center;
            padding: 60px 20px;
            background: white;
            border-radius: 16px;
        }

        .empty-state h3 {
            font-size: 1.5rem;
            color: #1e293b;
            margin: 20px 0 10px;
        }

        .empty-state p {
            color: #64748b;
            margin-bottom: 20px;
        }

        .btn-beli {
            padding: 12px 30px;
            background: #4CAF50;
            color: white;
            border: none;
            border-radius: 30px;
            font-weight: 600;
            cursor: pointer;
            font-family: 'Poppins', sans-serif;
        }
        
        @media (max-width: 768px) {
            .stats-row {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .materi-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }
            
            .search-box {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="app">
        <!-- SIDEBAR (SAMA PERSIS DENGAN DASHBOARD MURID) -->
        <aside class="sidebar">
            <div class="brand">
                <img class="logo-img" src="{{ asset('img/HANYA LOGO - Salin.png') }}" alt="Logo">
                <div class="brand-text">
                    <div class="brand-name">IsyaratKita</div>
                    <div class="brand-sub">Dashboard Murid</div>
                </div>
            </div>

            <nav class="menu">
                <!-- Dashboard -->
                <a class="menu-item" href="{{ url('/dashboard-murid') }}">
                    <img class="menu-icon" src="{{ asset('img/dashboard-square-01.png') }}" alt="">
                    Dashboard
                </a>

                <!-- Katalog Paket -->
                <a class="menu-item" href="{{ url('/paket') }}">
                    <img class="menu-icon" src="{{ asset('img/katalog.png') }}" alt="">
                    Katalog Paket
                </a>

                <!-- Materi Saya (ACTIVE) -->
                <a class="menu-item active" href="{{ url('/materi-saya') }}">
                    <img class="menu-icon" src="{{ asset('img/materi.png') }}" alt="">
                    Materi Saya
                </a>

                <!-- Kuis -->
                <a class="menu-item" href="#">
                    <img class="menu-icon" src="{{ asset('img/kuis.png') }}" alt="">
                    Kuis
                </a>

                <!-- History -->
                <a class="menu-item" href="#">
                    <img class="menu-icon" src="{{ asset('img/transaction-history.png') }}" alt="">
                    History
                </a>

                <!-- Feedback -->
                <a class="menu-item" href="#">
                    <img class="menu-icon" src="{{ asset('img/feedback.png') }}" alt="">
                    Feedback
                </a>

                <!-- Profil -->
                <a class="menu-item" href="#">
                    <img class="menu-icon" src="{{ asset('img/user.png') }}" alt="">
                    Profil
                </a>

                <!-- Logout -->
                <a class="menu-item danger" href="/login">
                    <img class="menu-icon" src="{{ asset('img/logout-04.png') }}" alt="">
                    Logout
                </a>
            </nav>
        </aside>

        <!-- MAIN CONTENT -->
        <main class="main">
            <!-- TOPBAR (SAMA PERSIS) -->
            <header class="topbar">
                <div class="search">
                    <input type="text" placeholder="Search..." />
                    <img class="search-img" src="{{ asset('img/search-visual.png') }}" alt="Search">
                </div>

                <div class="top-actions">
                    <!-- Notifikasi -->
                    <button class="icon-btn" title="Notifikasi">
                        <img class="top-icon" src="{{ asset('img/notification-01.png') }}" alt="">
                    </button>

                    <!-- Help -->
                    <button class="icon-btn" title="Bantuan">
                        <img class="top-icon" src="{{ asset('img/help-circle.png') }}" alt="">
                    </button>

                    <!-- Profile -->
                    <div class="profile-mini">
                        <img class="avatar-img" src="{{ asset('img/user.png') }}" alt="">
                    </div>
                </div>
            </header>

            <!-- CONTENT MATERI SAYA -->
            <div class="content-wrapper">
                <div style="padding: 20px;">
                    <!-- Header dengan Search -->
                    <div class="materi-header">
                        <h1>Materi Saya</h1>
                        <div class="search-box">
                            <input type="text" placeholder="Cari materi...">
                            <span>🔍</span>
                        </div>
                    </div>

                    <!-- Filter Tabs -->
                    <div class="filter-tabs">
                        <button class="filter-tab active">Semua</button>
                        <button class="filter-tab">Paket Dasar</button>
                        <button class="filter-tab">Paket Premium</button>
                        <button class="filter-tab">Belum Ditonton</button>
                        <button class="filter-tab">Sudah Ditonton</button>
                    </div>

                    <!-- Stats -->
                    <div class="stats-row">
                        <div class="stat-card">
                            <div class="stat-number">24</div>
                            <div class="stat-label">Total Video</div>
                        </div>
                        <div class="stat-card">
                            <div class="stat-number">12</div>
                            <div class="stat-label">Sudah Ditonton</div>
                        </div>
                        <div class="stat-card">
                            <div class="stat-number">12</div>
                            <div class="stat-label">Belum Ditonton</div>
                        </div>
                        <div class="stat-card">
                            <div class="stat-number">8j 45m</div>
                            <div class="stat-label">Total Waktu</div>
                        </div>
                    </div>

                    <!-- Grid Materi -->
                    <div class="materi-grid">
                        <!-- Card 1: Belum ditonton -->
                        <div class="materi-card">
                            <div class="thumbnail">
                                <span>📹</span>
                                <span class="duration">10:30</span>
                                <span class="paket-badge dasar">Dasar</span>
                                <div class="thumbnail-overlay">
                                    <div class="play-button">▶</div>
                                </div>
                            </div>
                            <div class="materi-info">
                                <div class="materi-title">Abjad A-Z</div>
                                <div class="materi-desc">Belajar huruf abjad dalam bahasa isyarat</div>
                                <div class="progress-area">
                                    <span style="color: #64748b; font-size: 0.8rem;">Belum dimulai</span>
                                </div>
                                <button class="btn-action btn-mulai">Mulai Belajar</button>
                            </div>
                        </div>

                        <!-- Card 2: Ada progress -->
                        <div class="materi-card">
                            <div class="thumbnail">
                                <span>📹</span>
                                <span class="duration">15:45</span>
                                <span class="paket-badge dasar">Dasar</span>
                                <div class="thumbnail-overlay">
                                    <div class="play-button">▶</div>
                                </div>
                            </div>
                            <div class="materi-info">
                                <div class="materi-title">Angka 1-100</div>
                                <div class="materi-desc">Belajar angka dalam bahasa isyarat</div>
                                <div class="progress-area">
                                    <div class="progress-row">
                                        <div class="progress-bar-small">
                                            <div class="progress-fill-small" style="width: 60%"></div>
                                        </div>
                                        <span>60%</span>
                                    </div>
                                </div>
                                <button class="btn-action btn-lanjutkan">Lanjutkan (6:30)</button>
                            </div>
                        </div>

                        <!-- Card 3: Premium -->
                        <div class="materi-card">
                            <div class="thumbnail">
                                <span>📹</span>
                                <span class="duration">20:15</span>
                                <span class="paket-badge premium">Premium</span>
                                <div class="thumbnail-overlay">
                                    <div class="play-button">▶</div>
                                </div>
                            </div>
                            <div class="materi-info">
                                <div class="materi-title">Percakapan Dokter-Pasien</div>
                                <div class="materi-desc">Komunikasi di lingkungan medis</div>
                                <div class="progress-area">
                                    <span style="color: #64748b; font-size: 0.8rem;">Belum dimulai</span>
                                </div>
                                <button class="btn-action btn-mulai">Mulai Belajar</button>
                            </div>
                        </div>

                        <!-- Card 4: Selesai -->
                        <div class="materi-card">
                            <div class="thumbnail">
                                <span>✅</span>
                                <span class="duration">8:20</span>
                                <span class="paket-badge dasar">Dasar</span>
                                <div class="thumbnail-overlay">
                                    <div class="play-button">▶</div>
                                </div>
                            </div>
                            <div class="materi-info">
                                <div class="materi-title">Salam & Sapaan</div>
                                <div class="materi-desc">Cara menyapa dalam bahasa isyarat</div>
                                <div class="progress-area">
                                    <span class="completed-badge">✓ Selesai</span>
                                </div>
                                <button class="btn-action btn-ulangi">Ulangi</button>
                            </div>
                        </div>

                        <!-- Card 5: Materi lain -->
                        <div class="materi-card">
                            <div class="thumbnail">
                                <span>📹</span>
                                <span class="duration">12:10</span>
                                <span class="paket-badge dasar">Dasar</span>
                                <div class="thumbnail-overlay">
                                    <div class="play-button">▶</div>
                                </div>
                            </div>
                            <div class="materi-info">
                                <div class="materi-title">Warna & Bentuk</div>
                                <div class="materi-desc">Mengenal warna dan bentuk dasar</div>
                                <div class="progress-area">
                                    <div class="progress-row">
                                        <div class="progress-bar-small">
                                            <div class="progress-fill-small" style="width: 25%"></div>
                                        </div>
                                        <span>25%</span>
                                    </div>
                                </div>
                                <button class="btn-action btn-lanjutkan">Lanjutkan</button>
                            </div>
                        </div>

                        <!-- Card 6: Premium lain -->
                        <div class="materi-card">
                            <div class="thumbnail">
                                <span>📹</span>
                                <span class="duration">18:30</span>
                                <span class="paket-badge premium">Premium</span>
                                <div class="thumbnail-overlay">
                                    <div class="play-button">▶</div>
                                </div>
                            </div>
                            <div class="materi-info">
                                <div class="materi-title">Pelayanan Publik</div>
                                <div class="materi-desc">Komunikasi di kantor pemerintahan</div>
                                <div class="progress-area">
                                    <span style="color: #64748b; font-size: 0.8rem;">Belum dimulai</span>
                                </div>
                                <button class="btn-action btn-mulai">Mulai Belajar</button>
                            </div>
                        </div>
                    </div>

                    <!-- Empty State (hidden, muncul kalau ga punya materi) -->
                    <!-- <div class="empty-state">
                        <img src="{{ asset('img/empty-folder.png') }}" alt="" style="width: 120px; opacity: 0.5;">
                        <h3>Belum Ada Materi</h3>
                        <p>Kamu belum memiliki paket apapun. Yuk beli paket dulu!</p>
                        <a href="{{ url('/paket') }}">
                            <button class="btn-beli">Lihat Paket</button>
                        </a>
                    </div> -->
                </div>
            </div>
        </main>
    </div>
</body>
</html>