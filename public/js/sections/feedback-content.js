// ==================== FEEDBACK DUMMY (tanpa database) ====================

let feedbacks = [];

// Load data dari localStorage saat halaman dimuat
function loadFeedbacksFromStorage() {
    const stored = localStorage.getItem('isyaratkita_feedbacks');
    if (stored) {
        feedbacks = JSON.parse(stored);
    } else {
        feedbacks = [
            {
                id: 1,
                materi: "Angka 1-10 dalam Bahasa Isyarat",
                kategori: "Angka",
                rating: 4,
                kesulitan: "Sedang",
                komentar: "Materi sangat jelas dan mudah diikuti. Video berkualitas bagus dan instruktur menjelaskan dengan detail.",
                tanggal: "2 hari yang lalu",
                status: "submitted"
            },
            {
                id: 2,
                materi: "Membuat Kalimat Sederhana",
                kategori: "Kalimat",
                rating: 5,
                kesulitan: "Mudah",
                komentar: "Materi sangat bagus! Penjelasan step by step membuat saya mudah memahami isi pembelajaran.",
                tanggal: "1 minggu yang lalu",
                status: "submitted"
            }
        ];
        saveFeedbacksToStorage();
    }
    renderFeedbacks();
}

function saveFeedbacksToStorage() {
    localStorage.setItem('isyaratkita_feedbacks', JSON.stringify(feedbacks));
}

function renderFeedbacks() {
    const grid = document.getElementById('feedbackGrid');
    if (!grid) return;
    
    const kategoriFilter = document.getElementById('filterKategori')?.value || 'all';
    const statusFilter = document.getElementById('filterStatus')?.value || 'all';
    
    let filteredFeedbacks = [...feedbacks];
    
    if (kategoriFilter !== 'all') {
        filteredFeedbacks = filteredFeedbacks.filter(f => f.kategori === kategoriFilter);
    }
    
    if (statusFilter !== 'all') {
        filteredFeedbacks = filteredFeedbacks.filter(f => f.status === statusFilter);
    }
    
    const formHtml = `
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
                <textarea class="feedback-textarea" id="komentarBaru" placeholder="Berikan komentar atau saran..."></textarea>
            </div>

            <button class="feedback-submit" id="kirimFeedbackBtn">✈ Kirim Feedback</button>
        </div>
    `;
    
    let submittedHtml = '';
    filteredFeedbacks.forEach(f => {
        submittedHtml += `
            <div class="feedback-card">
                <div class="feedback-card-header">
                    <div>
                        <h3 class="feedback-card-title">${f.materi}</h3>
                    </div>
                    <div class="feedback-status status-done">Sudah Dinilai</div>
                </div>

                <div class="feedback-meta">
                    <span class="feedback-category">${f.kategori}</span>
                    <span>🕒 10 menit</span>
                </div>

                <div class="feedback-review-box" data-id="${f.id}">
                    <div class="feedback-review-row">
                        <div>
                            <div class="feedback-review-label">Penilaian Anda:</div>
                            <div class="feedback-rating">
                                <span class="feedback-rating-stars">${'★'.repeat(f.rating)}${'☆'.repeat(5-f.rating)}</span>
                                <span>${f.rating}/5</span>
                            </div>
                        </div>
                        <div>${f.tanggal}</div>
                    </div>

                    <div class="feedback-review-row" style="display:block;">
                        <div class="feedback-review-label">Kesulitan: <span style="font-weight:500;">${f.kesulitan}</span></div>
                        <div class="feedback-review-text">“${f.komentar}”</div>
                    </div>
                </div>

                <button class="feedback-edit-btn" data-id="${f.id}">✎ Edit Feedback</button>
            </div>
        `;
    });
    
    if (filteredFeedbacks.length === 0 && (kategoriFilter !== 'all' || statusFilter !== 'all')) {
        grid.innerHTML = `<div style="grid-column:1/-1; text-align:center; padding:40px; color:#64748b;">Tidak ada feedback yang ditemukan</div>`;
        return;
    }
    
    grid.innerHTML = formHtml + submittedHtml;
    
    initStarRating();
    initRadioButtons();
    document.getElementById('kirimFeedbackBtn')?.addEventListener('click', kirimFeedback);
    document.querySelectorAll('.feedback-edit-btn').forEach(btn => {
        btn.addEventListener('click', (e) => editFeedback(e.target.dataset.id));
    });
}

function initStarRating() {
    const stars = document.querySelectorAll('#ratingStars .star');
    let currentRating = 0;
    
    stars.forEach(star => {
        star.addEventListener('click', function() {
            currentRating = parseInt(this.dataset.value);
            stars.forEach((s, i) => {
                if (i < currentRating) {
                    s.classList.add('active');
                } else {
                    s.classList.remove('active');
                }
            });
        });
        
        star.addEventListener('mouseenter', function() {
            const val = parseInt(this.dataset.value);
            stars.forEach((s, i) => {
                if (i < val) {
                    s.style.color = '#fbbf24';
                } else {
                    s.style.color = '#cbd5e1';
                }
            });
        });
        
        star.addEventListener('mouseleave', function() {
            stars.forEach((s, i) => {
                s.style.color = i < currentRating ? '#fbbf24' : '#cbd5e1';
            });
        });
    });
}

function initRadioButtons() {
    const radios = document.querySelectorAll('#kesulitanGroup input[type="radio"]');
    radios.forEach(radio => {
        radio.addEventListener('change', function() {
            console.log('Kesulitan dipilih:', this.value);
        });
    });
}

function kirimFeedback() {
    const stars = document.querySelectorAll('#ratingStars .star');
    let rating = 0;
    stars.forEach((star, i) => {
        if (star.classList.contains('active')) {
            rating = i + 1;
        }
    });
    
    const kesulitanRadio = document.querySelector('#kesulitanGroup input[type="radio"]:checked');
    const kesulitan = kesulitanRadio ? kesulitanRadio.value : '';
    
    const komentar = document.getElementById('komentarBaru')?.value || '';
    
    if (rating === 0) {
        alert('⭐ Silakan berikan penilaian bintang!');
        return;
    }
    
    if (!kesulitan) {
        alert('⚠️ Silakan pilih tingkat kesulitan!');
        return;
    }
    
    if (!komentar.trim()) {
        alert('💬 Silakan isi komentar!');
        return;
    }
    
    const newFeedback = {
        id: Date.now(),
        materi: "Alfabet A-Z dalam Bahasa Isyarat",
        kategori: "Alfabet",
        rating: rating,
        kesulitan: kesulitan,
        komentar: komentar,
        tanggal: "Baru saja",
        status: "submitted"
    };
    
    feedbacks.push(newFeedback);
    saveFeedbacksToStorage();
    renderFeedbacks();
    alert('✅ Feedback berhasil dikirim! Terima kasih atas masukannya.');
}

function editFeedback(id) {
    const feedback = feedbacks.find(f => f.id == id);
    if (!feedback) return;
    
    const newRating = prompt('⭐ Masukkan rating baru (1-5):', feedback.rating);
    if (newRating && newRating >= 1 && newRating <= 5) {
        feedback.rating = parseInt(newRating);
    }
    
    const newKesulitan = prompt('📊 Masukkan tingkat kesulitan (Mudah/Sedang/Sulit):', feedback.kesulitan);
    if (newKesulitan && ['Mudah', 'Sedang', 'Sulit'].includes(newKesulitan)) {
        feedback.kesulitan = newKesulitan;
    }
    
    const newKomentar = prompt('💬 Edit komentar Anda:', feedback.komentar);
    if (newKomentar !== null) {
        feedback.komentar = newKomentar;
    }
    
    feedback.tanggal = 'Baru saja diedit';
    saveFeedbacksToStorage();
    renderFeedbacks();
    alert('✅ Feedback berhasil diedit!');
}

function initFilters() {
    const kategoriFilter = document.getElementById('filterKategori');
    const statusFilter = document.getElementById('filterStatus');
    
    if (kategoriFilter) {
        kategoriFilter.addEventListener('change', () => renderFeedbacks());
    }
    if (statusFilter) {
        statusFilter.addEventListener('change', () => renderFeedbacks());
    }
}

document.addEventListener('DOMContentLoaded', () => {
    loadFeedbacksFromStorage();
    initFilters();
});