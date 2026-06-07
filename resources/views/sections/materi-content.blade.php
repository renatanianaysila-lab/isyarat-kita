<div class="materi-saya-container">
    <h1>Materi Saya</h1>

    <div class="filter-buttons">
        <button class="filter-btn active" data-filter="semua">Semua</button>
        <button class="filter-btn" data-filter="dasar">Paket Dasar</button>
        <button class="filter-btn" data-filter="premium">Paket Premium</button>
        <button class="filter-btn" data-filter="belum">Belum Ditonton</button>
    </div>

    <div class="materi-grid">
        <div class="materi-card" data-kategori="dasar" data-status="belum">
            <div class="materi-thumbnail" style="position: relative; overflow: hidden;">
                <span class="badge-dasar" style="z-index: 1;">Dasar</span>
                <span class="duration" style="z-index: 1;">10:30</span>
                <img src="{{ asset('img/img/abjad_bisindo.jpg') }}" alt="Abjad Bisindo" style="width: 100%; height: 100%; object-fit: cover; position: absolute; top: 0; left: 0; z-index: 0;">
            </div>
            <div class="materi-card-content">
                <h3>Abjad A-Z</h3>
                <p>Belajar huruf abjad dalam bahasa isyarat</p>
                <a href="{{ url('/video-player?video=abjad-az') }}" class="btn-mulai">Mulai Belajar</a>
            </div>
        </div>

        <div class="materi-card" data-kategori="dasar" data-status="belum">
            <div class="materi-thumbnail" style="position: relative; overflow: hidden;">
                <span class="badge-dasar" style="z-index: 1;">Dasar</span>
                <span class="duration" style="z-index: 1;">15:45</span>
                <img src="{{ asset('img/img/angka_bisindo.jpg') }}" alt="Angka Bisindo" style="width: 100%; height: 100%; object-fit: cover; position: absolute; top: 0; left: 0; z-index: 0;">
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

        <div class="materi-card" data-kategori="premium" data-status="belum">
            <div class="materi-thumbnail" style="position: relative; overflow: hidden;">
                <span class="badge-premium" style="z-index: 1;">Premium</span>
                <span class="duration" style="z-index: 1;">20:15</span>
                <img src="{{ asset('img/img/percakapan_bisindo.jpg') }}" alt="Percakapan Bisindo" style="width: 100%; height: 100%; object-fit: cover; position: absolute; top: 0; left: 0; z-index: 0;">
            </div>
            <div class="materi-card-content">
                <h3>Percakapan</h3>
                <p>Komunikasi di lingkungan medis</p>
                <a href="#" class="btn-mulai" onclick="alert('Upgrade ke paket Premium untuk mengakses materi ini!')">Mulai Belajar</a>
            </div>
        </div>

        <div class="materi-card" data-kategori="dasar" data-status="selesai">
            <div class="materi-thumbnail" style="position: relative; overflow: hidden;">
                <span class="badge-dasar" style="z-index: 1;">Dasar</span>
                <span class="duration" style="z-index: 1;">8:20</span>
                <img src="{{ asset('img/img/salam_bisindo.jpg') }}" alt="Salam Bisindo" style="width: 100%; height: 100%; object-fit: cover; position: absolute; top: 0; left: 0; z-index: 0;">
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


<script>
document.addEventListener("DOMContentLoaded", function() {
    const filterButtons = document.querySelectorAll('.filter-btn');
    const materiCards = document.querySelectorAll('.materi-card');

    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            
            filterButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');

            const filterValue = this.getAttribute('data-filter');

            materiCards.forEach(card => {
                const kategori = card.getAttribute('data-kategori');
                const status = card.getAttribute('data-status');

                if (filterValue === 'semua') {
                    card.style.display = 'block';
                } else if (filterValue === 'dasar' && kategori === 'dasar') {
                    card.style.display = 'block';
                } else if (filterValue === 'premium' && kategori === 'premium') {
                    card.style.display = 'block';
                } else if (filterValue === 'belum' && status === 'belum') {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });
});
</script>