<div class="feedback-page">
    <div class="feedback-shell">
        <div class="feedback-toolbar">
            <div class="feedback-filters">
                <select class="feedback-select" id="filterKategori">
                    <option value="all">Semua Kategori</option>
                    <option value="Alfabet">Alfabet</option>
                    <option value="Angka">Angka</option>
                    <option value="Percakapan Sehari-hari">Percakapan Sehari-hari</option>
                </select>
                <select class="feedback-select" id="filterStatus">
                    <option value="all">Status Feedback</option>
                    <option value="pending">Belum Dinilai</option>
                    <option value="submitted">Sudah Dinilai</option>
                </select>
            </div>
            <div class="feedback-info">ⓘ 12 materi tersedia untuk feedback</div>
        </div>

        <div class="feedback-grid">
            <!-- FORM FEEDBACK -->
            <div class="feedback-card" id="formFeedbackCard">
                <div class="feedback-card-header">
                    <div>
                        <h3 class="feedback-card-title">Alfabet A-Z dalam Bahasa Isyarat</h3>
                    </div>
                    <div class="feedback-status status-pending">Belum Dinilai</div>
                </div>
                <div class="feedback-meta">
                    <span class="feedback-category">Alfabet</span>
                    <span>🕒 15 menit</span>
                </div>
                <div class="feedback-form-group">
                    <label>Tingkat Kejelasan Materi</label>
                    <div class="feedback-stars" id="ratingStars">
                        <span class="star" data-value="1">★</span>
                        <span class="star" data-value="2">★</span>
                        <span class="star" data-value="3">★</span>
                        <span class="star" data-value="4">★</span>
                        <span class="star" data-value="5">★</span>
                    </div>
                </div>
                <div class="feedback-form-group">
                    <label>Tingkat Kesulitan</label>
                    <div class="feedback-radio-group" id="kesulitanGroup">
                        <label><input type="radio" name="kesulitan" value="Mudah"> Mudah</label>
                        <label><input type="radio" name="kesulitan" value="Sedang"> Sedang</label>
                        <label><input type="radio" name="kesulitan" value="Sulit"> Sulit</label>
                    </div>
                </div>
                <div class="feedback-form-group">
                    <label>Komentar &amp; Saran</label>
                    <textarea class="feedback-textarea" id="komentarBaru" placeholder="Berikan komentar atau saran untuk perbaikan materi..."></textarea>
                </div>
                <button class="feedback-submit" id="kirimFeedbackBtn">✈ Kirim Feedback</button>
            </div>

            <!-- TEMPAT FEEDBACK YANG SUDAH DINILAI -->
            <div id="submittedFeedbackContainer"></div>
        </div>
    </div>
</div>

<script src="{{ asset('js/sections/feedback-content.js') }}"></script>