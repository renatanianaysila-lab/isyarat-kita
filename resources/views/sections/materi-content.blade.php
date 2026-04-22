<div class="materi-saya-container">
    <h1>Materi Saya</h1>

    <div class="filter-buttons">
        <button class="filter-btn active">Semua</button>
        <button class="filter-btn">Paket Dasar</button>
        <button class="filter-btn">Paket Premium</button>
        <button class="filter-btn">Belum Ditonton</button>
    </div>

    <div class="materi-grid">
        <!-- Card Materi 1 - Abjad A-Z -->
        <div class="materi-card">
            <div class="materi-thumbnail">
                <span class="badge-dasar">Dasar</span>
                <span class="duration">10:30</span>
            </div>
            <div class="materi-card-content">
                <h3>Abjad A-Z</h3>
                <p>Belajar huruf abjad dalam bahasa isyarat</p>
                <a href="{{ url('/video-player?video=abjad-az') }}" class="btn-mulai">Mulai Belajar</a>
            </div>
        </div>

        <!-- Card Materi 2 - Angka 1-100 -->
        <div class="materi-card">
            <div class="materi-thumbnail">
                <span class="badge-dasar">Dasar</span>
                <span class="duration">15:45</span>
            </div>
            <div class="materi-card-content">
                <h3>Angka 1-100</h3>
                <p>Belajar angka dalam bahasa isyarat</p>
                <div class="progress-wrapper">
                    <div class="progress-bar">
                        <div class="progress-fill" style="width: 60%;"></div>
                    </div>
                    <span class="progress-text">60%</span>
                </div>
                <a href="{{ url('/video-player?video=angka-1-100') }}" class="btn-lanjut">Lanjutkan</a>
            </div>
        </div>

        <!-- Card Materi 3 - Percakapan Dokter (Premium) -->
        <div class="materi-card">
            <div class="materi-thumbnail">
                <span class="badge-premium">Premium</span>
                <span class="duration">20:15</span>
            </div>
            <div class="materi-card-content">
                <h3>Percakapan Dokter</h3>
                <p>Komunikasi di lingkungan medis</p>
                <a href="#" class="btn-mulai" onclick="alert('Upgrade ke paket Premium untuk mengakses materi ini!')">Mulai Belajar</a>
            </div>
        </div>

        <!-- Card Materi 4 - Salam & Sapaan -->
        <div class="materi-card">
            <div class="materi-thumbnail">
                <span class="badge-dasar">Dasar</span>
                <span class="duration">8:20</span>
            </div>
            <div class="materi-card-content">
                <h3>Salam & Sapaan</h3>
                <p>Cara menyapa dalam bahasa isyarat</p>
                <span class="completed">✓ Selesai</span>
                <a href="{{ url('/video-player?video=salam-sapaan') }}" class="btn-ulang">Ulangi</a>
            </div>
        </div>
    </div>

    <div class="back-link">
        <a href="?menu=dashboard">← Kembali ke Dashboard</a>
    </div>
</div>