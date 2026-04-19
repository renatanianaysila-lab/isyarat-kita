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
                <select class="feedback-select">
                    <option>Semua Kategori</option>
                    <option>Alfabet</option>
                    <option>Angka</option>
                    <option>Kalimat</option>
                </select>

                <select class="feedback-select">
                    <option>Status Feedback</option>
                    <option>Belum Dinilai</option>
                    <option>Sudah Dinilai</option>
                </select>
            </div>

            <div class="feedback-info">ⓘ 12 materi tersedia untuk feedback</div>
        </div>

        <div class="feedback-grid">
            {{-- CARD FORM FEEDBACK --}}
            <div class="feedback-card">
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
                    <div class="feedback-stars">
                        <span>★</span>
                        <span>★</span>
                        <span>★</span>
                        <span>★</span>
                        <span>★</span>
                    </div>
                </div>

                <div class="feedback-form-group">
                    <label>Tingkat Kesulitan</label>
                    <div class="feedback-radio-group">
                        <label><input type="radio" name="kesulitan"> Mudah</label>
                        <label><input type="radio" name="kesulitan"> Sedang</label>
                        <label><input type="radio" name="kesulitan"> Sulit</label>
                    </div>
                </div>

                <div class="feedback-form-group">
                    <label>Komentar &amp; Saran</label>
                    <textarea class="feedback-textarea" placeholder="Berikan komentar atau saran untuk perbaikan materi..."></textarea>
                </div>

                <button class="feedback-submit">✈ Kirim Feedback</button>
            </div>

            {{-- CARD HASIL FEEDBACK 1 --}}
            <div class="feedback-card">
                <div class="feedback-card-header">
                    <div>
                        <h3 class="feedback-card-title">Angka 1-10 dalam Bahasa Isyarat</h3>
                    </div>
                    <div class="feedback-status status-done">Sudah Dinilai</div>
                </div>

                <div class="feedback-meta">
                    <span class="feedback-category" style="color:#16a34a;">Angka</span>
                    <span>🕒 10 menit</span>
                </div>

                <div class="feedback-review-box">
                    <div class="feedback-review-row">
                        <div>
                            <div class="feedback-review-label">Penilaian Anda:</div>
                            <div class="feedback-rating">
                                <span class="feedback-rating-stars">★★★★☆</span>
                                <span>4/5</span>
                            </div>
                        </div>
                        <div>2 hari yang lalu</div>
                    </div>

                    <div class="feedback-review-row" style="display:block;">
                        <div class="feedback-review-label">Kesulitan: <span style="font-weight:500;">Sedang</span></div>
                        <div class="feedback-review-text">
                            “Materi sangat jelas dan mudah diikuti. Video berkualitas bagus dan instruktur menjelaskan dengan detail.”
                        </div>
                    </div>
                </div>

                <button class="feedback-edit-btn">✎ Edit Feedback</button>
            </div>

            {{-- CARD HASIL FEEDBACK 2 --}}
            <div class="feedback-card feedback-space-top" style="grid-column: 2 / 3;">
                <div class="feedback-card-header">
                    <div>
                        <h3 class="feedback-card-title">Membuat Kalimat Sederhana</h3>
                    </div>
                    <div class="feedback-status status-done">Sudah Dinilai</div>
                </div>

                <div class="feedback-meta">
                    <span class="feedback-category" style="color:#ef4444;">Kalimat</span>
                    <span>🕒 20 menit</span>
                </div>

                <div class="feedback-review-box">
                    <div class="feedback-review-row">
                        <div>
                            <div class="feedback-review-label">Penilaian Anda:</div>
                            <div class="feedback-rating">
                                <span class="feedback-rating-stars">★★★★★</span>
                                <span>5/5</span>
                            </div>
                        </div>
                        <div>1 minggu yang lalu</div>
                    </div>

                    <div class="feedback-review-row" style="display:block;">
                        <div class="feedback-review-label">Kesulitan: <span style="font-weight:500;">Mudah</span></div>
                        <div class="feedback-review-text">
                            “Materi sangat bagus! Penjelasan step by step membuat saya mudah memahami isi pembelajaran.”
                        </div>
                    </div>
                </div>

                <button class="feedback-edit-btn">✎ Edit Feedback</button>
            </div>
        </div>
    </div>
</div>