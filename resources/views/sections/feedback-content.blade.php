<div class="feedback-page">
    <div class="feedback-shell">
        <div class="feedback-header">
            <div>
                <h2>Feedback Pembelajaran</h2>
                <p>Berikan penilaian terhadap materi yang telah Anda pelajari</p>
            </div>

            <div class="feedback-header-right">
                <div class="feedback-bell">🔔</div>
                <div class="feedback-avatar">A</div>
            </div>
        </div>

        <div class="feedback-toolbar">
            <div class="feedback-filters">
                <select class="feedback-select" id="filterKategori">
                    <option value="all">Semua Kategori</option>
                    <option value="Alfabet">Alfabet</option>
                    <option value="Angka">Angka</option>
                    <option value="Kalimat">Kalimat</option>
                </select>

                <select class="feedback-select" id="filterStatus">
                    <option value="all">Status Feedback</option>
                    <option value="pending">Belum Dinilai</option>
                    <option value="submitted">Sudah Dinilai</option>
                </select>
            </div>

            <div class="feedback-info">ⓘ 12 materi tersedia untuk feedback</div>
        </div>

        <div class="feedback-grid" id="feedbackGrid">
            <!-- Konten akan diisi oleh JS -->
        </div>
    </div>
</div>

<script src="{{ asset('js/sections/feedback-content.js') }}"></script>