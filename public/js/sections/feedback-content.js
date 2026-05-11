// ==================== FEEDBACK DUMMY ====================

let feedbacks = [];

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
                materi: "Percakapan Sehari-hari",
                kategori: "Percakapan Sehari-hari",
                rating: 5,
                kesulitan: "Mudah",
                komentar: "Materi sangat bagus! Penjelasan step by step membuat saya mudah memahami isi pembelajaran.",
                tanggal: "1 minggu yang lalu",
                status: "submitted"
            }
        ];
        saveFeedbacksToStorage();
    }
    renderSubmittedFeedbacks();
}

function saveFeedbacksToStorage() {
    localStorage.setItem('isyaratkita_feedbacks', JSON.stringify(feedbacks));
}

function renderSubmittedFeedbacks() {
    const container = document.getElementById('submittedFeedbackContainer');
    if (!container) return;
    
    const kategoriFilter = document.getElementById('filterKategori')?.value || 'all';
    const statusFilter = document.getElementById('filterStatus')?.value || 'all';
    
    let filtered = [...feedbacks];
    
    if (kategoriFilter !== 'all') {
        filtered = filtered.filter(f => f.kategori === kategoriFilter);
    }
    if (statusFilter !== 'all') {
        filtered = filtered.filter(f => f.status === statusFilter);
    }
    
    if (filtered.length === 0) {
        container.innerHTML = '<div style="grid-column:1/-1; text-align:center; padding:40px; color:#64748b;">📭 Belum ada feedback yang dikirim</div>';
        return;
    }
    
    container.innerHTML = filtered.map(f => `
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
    `).join('');
    
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
                s.style.color = i < val ? '#fbbf24' : '#cbd5e1';
            });
        });
        
        star.addEventListener('mouseleave', function() {
            stars.forEach((s, i) => {
                s.style.color = i < currentRating ? '#fbbf24' : '#cbd5e1';
            });
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
    renderSubmittedFeedbacks();
    
    stars.forEach(s => s.classList.remove('active'));
    document.querySelectorAll('#kesulitanGroup input[type="radio"]').forEach(r => r.checked = false);
    document.getElementById('komentarBaru').value = '';
    
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
    renderSubmittedFeedbacks();
    alert('✅ Feedback berhasil diedit!');
}

function initFilters() {
    const kategoriFilter = document.getElementById('filterKategori');
    const statusFilter = document.getElementById('filterStatus');
    
    if (kategoriFilter) {
        kategoriFilter.addEventListener('change', () => renderSubmittedFeedbacks());
    }
    if (statusFilter) {
        statusFilter.addEventListener('change', () => renderSubmittedFeedbacks());
    }
}

document.addEventListener('DOMContentLoaded', () => {
    loadFeedbacksFromStorage();
    initStarRating();
    initFilters();
    document.getElementById('kirimFeedbackBtn')?.addEventListener('click', kirimFeedback);
});

import { api } from './services/api-service.js';

async function syncFeedbackToAPI() {
    const feedbacksFromStorage = localStorage.getItem('isyaratkita_feedbacks');
    if (feedbacksFromStorage) {
        const feedbacks = JSON.parse(feedbacksFromStorage);
        const latestFeedback = feedbacks[feedbacks.length - 1];
        
        if (latestFeedback) {
            const result = await api.createPost({
                title: `Feedback: ${latestFeedback.materi}`,
                body: `Rating: ${latestFeedback.rating}/5\nKesulitan: ${latestFeedback.kesulitan}\nKomentar: ${latestFeedback.komentar}`,
                userId: 1
            });
            
            if (result.success) {
                console.log('✅ Feedback synced to API');
                localStorage.setItem('last_sync_time', new Date().toISOString());
            }
        }
    }
}

async function loadFeedbackFromAPI() {
    const result = await api.getComments();
    if (result.success) {
        const apiFeedbacks = result.data.slice(0, 5);
        console.log('📋 Feedback from API:', apiFeedbacks.length);
        return apiFeedbacks;
    }
    return [];
}

window.syncFeedbackToAPI = syncFeedbackToAPI;
window.loadFeedbackFromAPI = loadFeedbackFromAPI;