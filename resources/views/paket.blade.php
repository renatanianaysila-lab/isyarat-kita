<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IsyaratKita - Pilih Paket Belajar</title>
    
    <!-- CSS Paket -->
    <link rel="stylesheet" href="{{ asset('css/paket.css') }}">
</head>
<body>
    <div class="container">
        <!-- Header dengan Logo -->
        <div class="header">
            <div class="logo-container">
                <img src="{{ asset('img/LOGO.png') }}" alt="IsyaratKita Logo" class="logo-img">
            </div>
            <h1 class="title">Pilih Paket Belajar</h1>
            <p class="subtitle">Mulai dari dasar hingga komunikasi profesional</p>
            <div class="lihat-paket-dasar">Lihat Paket Dasar →</div>
        </div>

        <!-- Row Kartu Paket -->
        <div class="paket-row">
            <!-- Paket Dasar -->
            <div class="paket-card paket-dasar">
                <div class="badge">Cocok Untuk Pemula</div>
                
                <div class="paket-header">
                    <h3>Paket Dasar</h3>
                    <h2>Bahasa Isyarat</h2>
                    <p>Abjad, angka, kosakata dasar komunikasi sehari-hari untuk interaksi sosial dan non-formal</p>
                </div>

                <!-- Grid 2x2 untuk fitur dasar -->
                <div class="fitur-grid">
                    <div class="fitur-grid-item">
                        <div class="icon-circle">A-Z</div>
                        <span>Abjad A-Z</span>
                    </div>
                    <div class="fitur-grid-item">
                        <div class="icon-circle">🗣️</div>
                        <span>Percakapan</span>
                        <span class="label">Sehari-Hari</span>
                    </div>
                    <div class="fitur-grid-item">
                        <div class="icon-circle">1-100</div>
                        <span>Angka 1-100</span>
                    </div>
                    <div class="fitur-grid-item">
                        <div class="icon-circle">📖</div>
                        <span>Kosakata</span>
                        <span class="label">Dasar</span>
                    </div>
                </div>

                <div class="harga">Rp. 0</div>
                
                <button class="btn btn-outline">Mulai Belajar →</button>
            </div>

            <!-- Paket Premium -->
            <div class="paket-card">
                <div class="badge rekomendasi">Rekomendasi</div>
                
                <div class="paket-header">
                    <h3>Paket Premium</h3>
                    <h2>Bahasa Isyarat</h2>
                    <p>Komunikasi bahasa isyarat untuk kebutuhan profesional dan pelayanan publik</p>
                </div>

                <div class="fitur-list">
                    <div class="fitur-item">
                        <span class="icon">✓</span>
                        Akses Video Unlimited
                    </div>
                    <div class="fitur-item">
                        <span class="icon">✓</span>
                        Materi Lanjutan Eksklusif
                    </div>
                    <div class="fitur-item">
                        <span class="icon star">⭐</span>
                        Konsultasi Singkat
                    </div>
                </div>

                <div class="harga">Rp. 30.000 <small>/bulan</small></div>
                
                <button class="btn btn-primary">Upgrade Sekarang →</button>

                <div class="premium-footer">
                    Akses semua materi premium
                </div>
            </div>
        </div>
    </div>
</body>
</html>