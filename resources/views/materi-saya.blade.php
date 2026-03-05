<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IsyaratKita - Materi Saya</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="{{ asset('css/dashboard-murid.css') }}">
    <style>
        /* Sementara taruh sini dulu, nanti pindah ke file css */
        .materi-saya-container {
            padding: 20px;
        }
        
        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }
        
        .page-header h1 {
            font-size: 2rem;
            color: #1e293b;
        }
        
        .filter-section {
            display: flex;
            gap: 15px;
            margin-bottom: 25px;
        }
        
        .filter-btn {
            padding: 8px 20px;
            border: 1px solid #e9ecef;
            border-radius: 30px;
            background: white;
            cursor: pointer;
            font-weight: 500;
        }
        
        .filter-btn.active {
            background: #4CAF50;
            color: white;
            border-color: #4CAF50;
        }
        
        .search-box {
            display: flex;
            align-items: center;
            background: white;
            border: 1px solid #e9ecef;
            border-radius: 30px;
            padding: 5px 15px;
            width: 300px;
        }
        
        .search-box input {
            border: none;
            outline: none;
            width: 100%;
            padding: 8px 0;
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
            font-size: 2rem;
            font-weight: bold;
            color: #1e293b;
        }
        
        .stat-label {
            color: #64748b;
            font-size: 0.9rem;
        }
        
        .materi-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
        }
        
        .materi-card {
            background: white;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
            transition: transform 0.3s;
        }
        
        .materi-card:hover {
            transform: translateY(-5px);
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
        
        .duration {
            position: absolute;
            bottom: 10px;
            right: 10px;
            background: rgba(0,0,0,0.7);
            color: white;
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 0.8rem;
        }
        
        .paket-badge {
            position: absolute;
            top: 10px;
            left: 10px;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 0.7rem;
            font-weight: 600;
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
            font-size: 0.85rem;
            color: #64748b;
            margin-bottom: 10px;
        }
        
        .progress-indicator {
            display: flex;
            align-items: center;
            gap: 10px;
            margin: 10px 0;
        }
        
        .progress-bar-small {
            flex: 1;
            height: 6px;
            background: #e9ecef;
            border-radius: 10px;
        }
        
        .progress-fill-small {
            height: 100%;
            background: #4CAF50;
            border-radius: 10px;
            width: 0%;
        }
        
        .btn-mulai {
            width: 100%;
            padding: 10px;
            background: #4CAF50;
            color: white;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            margin-top: 10px;
        }
        
        .btn-lanjutkan {
            width: 100%;
            padding: 10px;
            background: #2196F3;
            color: white;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            margin-top: 10px;
        }
        
        .empty-state {
            text-align: center;
            padding: 60px 20px;
            background: white;
            border-radius: 16px;
            grid-column: 1 / -1;
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
        }
    </style>
</head>
<body>
    <div class="app">
        <!-- SIDEBAR (copy dari dashboard-murid.blade.php) -->
        <aside class="sidebar">
            <div class="brand">
                <img class="logo-img" src="{{ asset('img/HANYA LOGO - Salin.png') }}" alt="Logo">
                <div class="brand-text">
                    <div class="brand-name">IsyaratKita</div>
                    <div class="brand-sub">Materi Saya</div>
                </div>
            </div>

            <nav class="menu">
                <a class="menu-item" href="{{ url('/dashboard-murid') }}">
                    <img class="menu-icon" src="{{ asset('img/dashboard-square-01.png') }}" alt="">
                    Dashboard
                </a>
                <a class="menu-item" href="{{ url('/paket') }}">
                    <img class="menu-icon" src="{{ asset('img/katalog.png') }}" alt="">
                    Katalog Paket
                </a>
                <a class="menu-item active" href="{{ url('/materi-saya') }}">
                    <img class="menu-icon" src="{{ asset('img/materi.png') }}" alt="">
                    Materi Saya
                </a>
                <a class="menu-item" href="#">
                    <img class="menu-icon" src="{{ asset('img/kuis.png') }}" alt="">
                    Kuis
                </a>
                <a class="menu-item" href="#">
                    <img class="menu-icon" src="{{ asset('img/transaction-history.png') }}" alt="">
                    History
                </a>
                <a class="menu-item" href="#">
                    <img class="menu-icon" src="{{ asset('img/feedback.png') }}" alt="">
                    Feedback
                </a>
                <a class="menu-item" href="#">
                    <img class="menu-icon" src="{{ asset('img/user.png') }}" alt="">
                    Profil
                </a>
                <a class="menu-item danger" href="/login">
                    <img class="menu-icon" src="{{ asset('img/logout-04.png') }}" alt="">
                    Logout
                </a>
            </nav>
        </aside>

        <!-- MAIN CONTENT -->
        <main class="main">
            <!-- TOPBAR (copy dari dashboard-murid.blade.php) -->
            <header class="topbar">
                <div class="search">
                    <input type="text" placeholder="Search..." />
                    <img class="search-img" src="{{ asset('img/search-visual.png') }}" alt="Search">
                </div>
                <div class="top-actions">
                    <button class="icon-btn"><img src="{{ asset('img/notification-01.png') }}" alt=""></button>
                    <button class="icon-btn"><img src="{{ asset('img/help-circle.png') }}" alt=""></button>
                    <div class="profile-mini">
                        <img class="avatar-img" src="{{ asset('img/user.png') }}" alt="">
                    </div>
                </div>
            </header>

            <!-- CONTENT MATERI SAYA -->
            <div class="content-wrapper">
                <div class="materi-saya-container">
                    <!-- Header -->
                    <div class="page-header">
                        <h1>Materi Saya</h1>
                        <div class="search-box">
                            <input type="text" placeholder="Cari materi...">
                            <span>🔍</span>
                        </div>
                    </div>

                    <!-- Filter -->
                    <div class="filter-section">
                        <button class="filter-btn active">Semua</button>
                        <button class="filter-btn">Paket Dasar</button>
                        <button class="filter-btn">Paket Premium</button>
                        <button class="filter-btn">Belum Ditonton</button>
                        <button class="filter-btn">Sudah Ditonton</button>
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
                        <!-- Contoh Card Materi 1 - Belum ditonton -->
                        <div class="materi-card">
                            <div class="thumbnail">
                                <span>🎥</span>
                                <span class="duration">10:30</span>
                                <span class="paket-badge dasar">Dasar</span>
                            </div>
                            <div class="materi-info">
                                <div class="materi-title">Abjad A-Z</div>
                                <div class="materi-desc">Belajar huruf abjad dalam bahasa isyarat</div>
                                <div class="progress-indicator">
                                    <span class="progress-label">Belum dimulai</span>
                                </div>
                                <button class="btn-mulai">Mulai Belajar</button>
                            </div>
                        </div>

                        <!-- Contoh Card Materi 2 - Ada progress -->
                        <div class="materi-card">
                            <div class="thumbnail">
                                <span>🎥</span>
                                <span class="duration">15:45</span>
                                <span class="paket-badge dasar">Dasar</span>
                            </div>
                            <div class="materi-info">
                                <div class="materi-title">Angka 1-100</div>
                                <div class="materi-desc">Belajar angka dalam bahasa isyarat</div>
                                <div class="progress-indicator">
                                    <div class="progress-bar-small">
                                        <div class="progress-fill-small" style="width: 60%"></div>
                                    </div>
                                    <span>60%</span>
                                </div>
                                <button class="btn-lanjutkan">Lanjutkan (6:30)</button>
                            </div>
                        </div>

                        <!-- Contoh Card Materi 3 - Premium -->
                        <div class="materi-card">
                            <div class="thumbnail">
                                <span>🎥</span>
                                <span class="duration">20:15</span>
                                <span class="paket-badge premium">Premium</span>
                            </div>
                            <div class="materi-info">
                                <div class="materi-title">Percakapan Dokter-Pasien</div>
                                <div class="materi-desc">Komunikasi di lingkungan medis</div>
                                <div class="progress-indicator">
                                    <span class="progress-label">Belum dimulai</span>
                                </div>
                                <button class="btn-mulai">Mulai Belajar</button>
                            </div>
                        </div>

                        <!-- Contoh Card Materi 4 - Selesai -->
                        <div class="materi-card">
                            <div class="thumbnail">
                                <span>✅</span>
                                <span class="duration">8:20</span>
                                <span class="paket-badge dasar">Dasar</span>
                            </div>
                            <div class="materi-info">
                                <div class="materi-title">Salam & Sapaan</div>
                                <div class="materi-desc">Cara menyapa dalam bahasa isyarat</div>
                                <div class="progress-indicator">
                                    <span style="color: #4CAF50;">✓ Selesai</span>
                                </div>
                                <button class="btn-mulai">Ulangi</button>
                            </div>
                        </div>
                    </div>

                    <!-- Empty State (kalau belum punya materi) -->
                    <!-- <div class="empty-state">
                        <img src="{{ asset('img/empty-folder.png') }}" alt="" style="width: 120px;">
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