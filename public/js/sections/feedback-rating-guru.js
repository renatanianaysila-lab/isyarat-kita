// ========================================
// FEEDBACK & RATING GURU - JAVASCRIPT
// MATERI BAHASA ISYARAT BISINDO
// ========================================

// DATA MATERI BAHASA ISYARAT
const materiData = [
    { id: 1, title: "Pengenalan Huruf A - Z", date: "10/12/2024", icon: "🔤", avgRating: 4.9, totalReviews: 8 },
    { id: 2, title: "Angka 1 - 10", date: "11/12/2024", icon: "🔢", avgRating: 4.8, totalReviews: 6 },
    { id: 3, title: "Salam & Sapaan", date: "12/12/2024", icon: "👋", avgRating: 4.9, totalReviews: 7 },
    { id: 4, title: "Kata Sehari-hari", date: "15/12/2024", icon: "💬", avgRating: 4.7, totalReviews: 5 },
    { id: 5, title: "Keluarga & Kerabat", date: "18/12/2024", icon: "👨‍👩‍👧", avgRating: 4.8, totalReviews: 6 },
    { id: 6, title: "Warna & Bentuk", date: "20/12/2024", icon: "🎨", avgRating: 4.9, totalReviews: 5 },
    { id: 7, title: "Perasaan & Emosi", date: "22/12/2024", icon: "😊", avgRating: 4.8, totalReviews: 4 },
    { id: 8, title: "Arah & Lokasi", date: "25/12/2024", icon: "🧭", avgRating: 4.7, totalReviews: 4 }
];

// DATA REVIEWS PER MATERI
const reviewsData = {
    1: [ // Pengenalan Huruf A - Z
        { id: 1, name: "Rina S.", avatar: "R", rating: 5, difficulty: "sedang", comment: "Materinya jelas dan mudah dipahami! Terima kasih", date: "2 hari lalu" },
        { id: 2, name: "Budi A.", avatar: "B", rating: 5, difficulty: "mudah", comment: "Gampang diikuti, contohnya membantu banget!", date: "3 hari lalu" },
        { id: 3, name: "Lusi M.", avatar: "L", rating: 4, difficulty: "sulit", comment: "Beberapa bagian perlu dijelaskan lagi ya guru", date: "5 hari lalu" },
        { id: 4, name: "Dewi K.", avatar: "D", rating: 5, difficulty: "mudah", comment: "Sekarang aku bisa kenalin huruf A-Z pake isyarat!", date: "1 minggu lalu" },
        { id: 5, name: "Andi P.", avatar: "A", rating: 5, difficulty: "sedang", comment: "Materi keren banget, lanjutkan!", date: "1 minggu lalu" },
        { id: 6, name: "Citra L.", avatar: "C", rating: 5, difficulty: "mudah", comment: "Cara ngajarnya asik dan tidak membosankan", date: "2 minggu lalu" },
        { id: 7, name: "Sari M.", avatar: "S", rating: 4, difficulty: "sedang", comment: "Video bagus, tapi durasi terlalu panjang", date: "2 minggu lalu" },
        { id: 8, name: "Tono W.", avatar: "T", rating: 5, difficulty: "mudah", comment: "Rekomended buat pemula!", date: "3 minggu lalu" }
    ],
    2: [ // Angka 1 - 10
        { id: 9, name: "Rizki F.", avatar: "R", rating: 5, difficulty: "mudah", comment: "Angka 1-10 mudah diikuti! Sekarang bisa berhitung pake isyarat", date: "1 hari lalu" },
        { id: 10, name: "Nina T.", avatar: "N", rating: 4, difficulty: "sulit", comment: "Agak sulit di angka 6,7,8 karena mirip-mirip", date: "2 hari lalu" },
        { id: 11, name: "Oscar R.", avatar: "O", rating: 5, difficulty: "sedang", comment: "Penjelasannya santai dan gampang diingat!", date: "4 hari lalu" },
        { id: 12, name: "Putri M.", avatar: "P", rating: 5, difficulty: "mudah", comment: "Suka banget sama videonya!", date: "5 hari lalu" },
        { id: 13, name: "Wulan S.", avatar: "W", rating: 4, difficulty: "sedang", comment: "Materi bagus, perlu latihan lebih banyak", date: "1 minggu lalu" },
        { id: 14, name: "Yuni A.", avatar: "Y", rating: 5, difficulty: "mudah", comment: "Sekarang bisa hitung 1-10 pake tangan!", date: "1 minggu lalu" }
    ],
    3: [ // Salam & Sapaan
        { id: 15, name: "Dini A.", avatar: "D", rating: 5, difficulty: "mudah", comment: "Salam, selamat pagi, terima kasih - semua dijelaskan dengan jelas!", date: "1 hari lalu" },
        { id: 16, name: "Eko P.", avatar: "E", rating: 5, difficulty: "sedang", comment: "Materi sapaan sudah bagus, suka!", date: "3 hari lalu" },
        { id: 17, name: "Nia S.", avatar: "N", rating: 5, difficulty: "mudah", comment: "Suka banget sama cara ngajarnya!", date: "5 hari lalu" },
        { id: 18, name: "Fajar W.", avatar: "F", rating: 5, difficulty: "mudah", comment: "Rekomended buat pemula!", date: "1 minggu lalu" },
        { id: 19, name: "Gita R.", avatar: "G", rating: 4, difficulty: "sulit", comment: "Bagus tapi perlu gerakan yang lebih lambat", date: "1 minggu lalu" },
        { id: 20, name: "Hendra S.", avatar: "H", rating: 5, difficulty: "sedang", comment: "Mantap, sekarang bisa salam pake isyarat", date: "2 minggu lalu" },
        { id: 21, name: "Indah P.", avatar: "I", rating: 4, difficulty: "mudah", comment: "Seru banget belajarnya!", date: "2 minggu lalu" }
    ],
    4: [ // Kata Sehari-hari
        { id: 22, name: "Joko S.", avatar: "J", rating: 5, difficulty: "mudah", comment: "Makan, minum, tidur, pergi - semua kata sehari-hari lengkap!", date: "2 hari lalu" },
        { id: 23, name: "Kiki A.", avatar: "K", rating: 4, difficulty: "sulit", comment: "Beberapa gerakan mirip, perlu lebih teliti", date: "4 hari lalu" },
        { id: 24, name: "Lina M.", avatar: "L", rating: 5, difficulty: "mudah", comment: "Videonya keren, bisa diputar ulang terus!", date: "6 hari lalu" },
        { id: 25, name: "Mona S.", avatar: "M", rating: 4, difficulty: "sedang", comment: "Membantu banget buat sehari-hari", date: "1 minggu lalu" },
        { id: 26, name: "Nanda R.", avatar: "N", rating: 5, difficulty: "mudah", comment: "Akhirnya bisa komunikasi sederhana!", date: "1 minggu lalu" }
    ],
    5: [ // Keluarga & Kerabat
        { id: 27, name: "Siti N.", avatar: "S", rating: 5, difficulty: "mudah", comment: "Ayah, Ibu, Kakak, Adik - semua dijelaskan dengan baik", date: "2 hari lalu" },
        { id: 28, name: "Teguh P.", avatar: "T", rating: 4, difficulty: "sedang", comment: "Materi keluarga bagus, butuh latihan biar hafal", date: "5 hari lalu" },
        { id: 29, name: "Umi K.", avatar: "U", rating: 5, difficulty: "mudah", comment: "Sekarang bisa cerita tentang keluarga!", date: "1 minggu lalu" },
        { id: 30, name: "Vino G.", avatar: "V", rating: 4, difficulty: "sedang", comment: "Penjelasannya jelas, suka!", date: "1 minggu lalu" },
        { id: 31, name: "Winda F.", avatar: "W", rating: 5, difficulty: "mudah", comment: "Materi keluarga sangat membantu", date: "2 minggu lalu" },
        { id: 32, name: "Xavier P.", avatar: "X", rating: 5, difficulty: "mudah", comment: "Sekarang bisa kenalin anggota keluarga", date: "2 minggu lalu" }
    ],
    6: [ // Warna & Bentuk
        { id: 33, name: "Yanto S.", avatar: "Y", rating: 5, difficulty: "mudah", comment: "Merah, biru, kuning, hijau - warna-warnanya seru!", date: "1 hari lalu" },
        { id: 34, name: "Zaki M.", avatar: "Z", rating: 5, difficulty: "sedang", comment: "Materi keren, lanjutkan!", date: "3 hari lalu" },
        { id: 35, name: "Ayu W.", avatar: "A", rating: 4, difficulty: "sulit", comment: "Bentuk lingkaran dan segitiga agak sulit dibedakan", date: "4 hari lalu" },
        { id: 36, name: "Bayu S.", avatar: "B", rating: 5, difficulty: "mudah", comment: "Belajar warna jadi menyenangkan!", date: "5 hari lalu" },
        { id: 37, name: "Cindy L.", avatar: "C", rating: 5, difficulty: "mudah", comment: "Suka banget sama materi warnanya", date: "1 minggu lalu" }
    ],
    7: [ // Perasaan & Emosi
        { id: 38, name: "Doni P.", avatar: "D", rating: 5, difficulty: "mudah", comment: "Senang, sedih, marah - semua dijelaskan dengan ekspresi yang jelas!", date: "2 hari lalu" },
        { id: 39, name: "Eva M.", avatar: "E", rating: 4, difficulty: "sedang", comment: "Materi emosi bagus, perlu lebih banyak contoh", date: "4 hari lalu" },
        { id: 40, name: "Fanny R.", avatar: "F", rating: 5, difficulty: "mudah", comment: "Sekarang bisa ungkapin perasaan pake isyarat!", date: "5 hari lalu" },
        { id: 41, name: "Galih S.", avatar: "G", rating: 5, difficulty: "mudah", comment: "Keren banget materinya", date: "1 minggu lalu" }
    ],
    8: [ // Arah & Lokasi
        { id: 42, name: "Hana K.", avatar: "H", rating: 4, difficulty: "sulit", comment: "Kanan, kiri, atas, bawah - agak sulit membedakan", date: "2 hari lalu" },
        { id: 43, name: "Irfan M.", avatar: "I", rating: 5, difficulty: "sedang", comment: "Penjelasan arahnya jelas", date: "3 hari lalu" },
        { id: 44, name: "Jihan N.", avatar: "J", rating: 5, difficulty: "mudah", comment: "Sekarang bisa nunjuk arah pake isyarat!", date: "5 hari lalu" },
        { id: 45, name: "Karin W.", avatar: "K", rating: 4, difficulty: "sedang", comment: "Materi bagus, perbanyak latihan ya", date: "1 minggu lalu" }
    ]
};

// State
let selectedMateriId = 1;
let currentSearch = "";
let currentDifficultyFilter = "all";
let currentRatingFilter = "all";

// DOM Elements
let videoListEl;
let reviewsListEl;
let selectedVideoTitleEl;
let reviewCountEl;
let videoCountEl;
let modal;
let toast;
let totalVideosEl, totalReviewsEl, avgRatingEl, totalStudentsEl;

// Helper: Get stars string
function getStars(rating) {
    const fullStar = "★";
    const emptyStar = "☆";
    return fullStar.repeat(rating) + emptyStar.repeat(5 - rating);
}

// Helper: Get difficulty class
function getDifficultyClass(difficulty) {
    switch(difficulty) {
        case 'mudah': return 'difficulty-mudah';
        case 'sedang': return 'difficulty-sedang';
        case 'sulit': return 'difficulty-sulit';
        default: return 'difficulty-sedang';
    }
}

// Helper: Get difficulty icon
function getDifficultyIcon(difficulty) {
    switch(difficulty) {
        case 'mudah': return '👍';
        case 'sedang': return '⚡';
        case 'sulit': return '💪';
        default: return '📚';
    }
}

// Helper: Get difficulty label
function getDifficultyLabel(difficulty) {
    switch(difficulty) {
        case 'mudah': return 'MUDAH';
        case 'sedang': return 'SEDANG';
        case 'sulit': return 'SULIT';
        default: return 'SEDANG';
    }
}

// Show toast notification
function showToast(message) {
    toast.textContent = message;
    toast.classList.add('show');
    setTimeout(() => {
        toast.classList.remove('show');
    }, 3000);
}

// Get average rating for a video
function getAvgRating(videoId) {
    const reviews = reviewsData[videoId] || [];
    if (reviews.length === 0) return "0.0";
    const avg = reviews.reduce((sum, r) => sum + r.rating, 0) / reviews.length;
    return avg.toFixed(1);
}

// Update statistics
function updateStats() {
    let totalReviews = 0;
    let totalRating = 0;
    let totalStudents = 0;
    
    for (const materiId in reviewsData) {
        const reviews = reviewsData[materiId];
        totalReviews += reviews.length;
        totalRating += reviews.reduce((sum, r) => sum + r.rating, 0);
        totalStudents += reviews.length * 2; // dummy: estimasi murid
    }
    
    const avgRating = totalReviews > 0 ? (totalRating / totalReviews).toFixed(1) : 0;
    
    if (totalVideosEl) totalVideosEl.textContent = materiData.length;
    if (totalReviewsEl) totalReviewsEl.textContent = totalReviews;
    if (avgRatingEl) avgRatingEl.textContent = avgRating;
    if (totalStudentsEl) totalStudentsEl.textContent = totalStudents;
    if (videoCountEl) videoCountEl.textContent = `${materiData.length} Materi`;
}

// Render materi list
function renderMateriList() {
    videoListEl.innerHTML = materiData.map(materi => `
        <div class="video-item ${materi.id === selectedMateriId ? 'active' : ''}" data-id="${materi.id}">
            <div class="video-info">
                <div class="video-title">${materi.icon} ${materi.title}</div>
                <div class="video-date">📅 ${materi.date}</div>
            </div>
            <div class="video-stats">
                <span class="star">⭐</span>
                <span>${getAvgRating(materi.id)}</span>
            </div>
        </div>
    `).join('');
    
    // Add click events
    document.querySelectorAll('.video-item').forEach(item => {
        item.addEventListener('click', () => {
            const id = parseInt(item.dataset.id);
            if (!isNaN(id) && id !== selectedMateriId) {
                selectedMateriId = id;
                renderMateriList();
                renderReviews();
                const materi = materiData.find(m => m.id === id);
                showToast(`📖 Menampilkan review untuk: ${materi.title}`);
            }
        });
    });
}

// Render reviews
function renderReviews() {
    let reviews = reviewsData[selectedMateriId] || [];
    const materi = materiData.find(m => m.id === selectedMateriId);
    
    // Apply filters
    if (currentDifficultyFilter !== "all") {
        reviews = reviews.filter(r => r.difficulty === currentDifficultyFilter);
    }
    if (currentRatingFilter !== "all") {
        reviews = reviews.filter(r => r.rating === parseInt(currentRatingFilter));
    }
    if (currentSearch) {
        reviews = reviews.filter(r => 
            r.name.toLowerCase().includes(currentSearch.toLowerCase()) ||
            r.comment.toLowerCase().includes(currentSearch.toLowerCase())
        );
    }
    
    if (selectedVideoTitleEl) {
        selectedVideoTitleEl.textContent = materi ? materi.title : "- Pilih Materi -";
    }
    if (reviewCountEl) {
        reviewCountEl.textContent = `${reviews.length} Reviews`;
    }
    
    if (reviews.length === 0) {
        reviewsListEl.innerHTML = `
            <div class="empty-state">
                <div class="empty-icon">📭</div>
                <p>Belum ada review untuk materi ini</p>
                <p style="font-size: 12px; margin-top: 8px;">Jadilah yang pertama memberikan feedback!</p>
            </div>
        `;
        return;
    }
    
    reviewsListEl.innerHTML = reviews.map(review => `
        <div class="review-item" data-review-id="${review.id}">
            <div class="review-header">
                <div class="reviewer-info">
                    <div class="reviewer-avatar">${review.avatar}</div>
                    <div class="reviewer-details">
                        <h4>${review.name}</h4>
                        <div class="review-date">📅 ${review.date}</div>
                    </div>
                </div>
                <div class="review-stars">${getStars(review.rating)}</div>
            </div>
            <div class="review-difficulty ${getDifficultyClass(review.difficulty)}">
                ${getDifficultyIcon(review.difficulty)} ${getDifficultyLabel(review.difficulty)}
            </div>
            <div class="review-comment">
                💬 "${review.comment}"
            </div>
        </div>
    `).join('');
    
    // Add click event for review items
    document.querySelectorAll('.review-item').forEach(item => {
        item.addEventListener('click', () => {
            const reviewId = parseInt(item.dataset.reviewId);
            const review = reviews.find(r => r.id === reviewId);
            if (review) {
                showReviewDetail(review);
            }
        });
    });
}

// Show review detail modal
function showReviewDetail(review) {
    const modalBody = document.getElementById('modalBody');
    if (!modalBody) return;
    
    modalBody.innerHTML = `
        <div class="detail-row">
            <div class="detail-label">👤 Nama Murid</div>
            <div class="detail-value"><strong>${review.name}</strong></div>
        </div>
        <div class="detail-row">
            <div class="detail-label">⭐ Rating</div>
            <div class="detail-value modal-stars">${getStars(review.rating)} (${review.rating}/5)</div>
        </div>
        <div class="detail-row">
            <div class="detail-label">📊 Tingkat Kesulitan</div>
            <div class="detail-value">
                <span class="review-difficulty ${getDifficultyClass(review.difficulty)}">
                    ${getDifficultyIcon(review.difficulty)} ${getDifficultyLabel(review.difficulty)}
                </span>
            </div>
        </div>
        <div class="detail-row">
            <div class="detail-label">💬 Ulasan / Komentar</div>
            <div class="detail-value">"${review.comment}"</div>
        </div>
        <div class="detail-row">
            <div class="detail-label">📅 Tanggal Review</div>
            <div class="detail-value">${review.date}</div>
        </div>
    `;
    
    if (modal) modal.style.display = "block";
}

// Setup filters
function setupFilters() {
    const searchInput = document.getElementById('searchReview');
    const filterDifficulty = document.getElementById('filterDifficulty');
    const filterRating = document.getElementById('filterRating');
    
    if (searchInput) {
        searchInput.addEventListener('input', (e) => {
            currentSearch = e.target.value;
            renderReviews();
        });
    }
    
    if (filterDifficulty) {
        filterDifficulty.addEventListener('change', (e) => {
            currentDifficultyFilter = e.target.value;
            renderReviews();
            const text = e.target.value === 'all' ? 'Semua' : e.target.options[e.target.selectedIndex].text.split(' ')[0];
            showToast(`🔍 Menampilkan review dengan tingkat kesulitan: ${text}`);
        });
    }
    
    if (filterRating) {
        filterRating.addEventListener('change', (e) => {
            currentRatingFilter = e.target.value;
            renderReviews();
            if (e.target.value !== 'all') {
                showToast(`⭐ Menampilkan review rating ${e.target.value} bintang`);
            } else {
                showToast(`⭐ Menampilkan semua review`);
            }
        });
    }
}

// Close modal
function closeModal() {
    if (modal) modal.style.display = "none";
}

// Initialize
document.addEventListener('DOMContentLoaded', () => {
    // Get DOM elements
    videoListEl = document.getElementById('videoList');
    reviewsListEl = document.getElementById('reviewsList');
    selectedVideoTitleEl = document.getElementById('selectedVideoTitle');
    reviewCountEl = document.getElementById('reviewCount');
    videoCountEl = document.getElementById('videoCount');
    modal = document.getElementById('reviewModal');
    toast = document.getElementById('toastNotification');
    
    totalVideosEl = document.getElementById('totalVideos');
    totalReviewsEl = document.getElementById('totalReviews');
    avgRatingEl = document.getElementById('avgRating');
    totalStudentsEl = document.getElementById('totalStudents');
    
    // Render all
    renderMateriList();
    renderReviews();
    updateStats();
    setupFilters();
    
    // Modal close
    const closeBtn = document.querySelector('.modal-close');
    if (closeBtn) closeBtn.onclick = closeModal;
    window.onclick = (e) => { if (e.target === modal) closeModal(); };
    
    console.log('✨ Feedback & Rating Guru - Ready ✨');
    console.log(`📚 Total materi: ${materiData.length}, 💬 Total reviews: ${Object.values(reviewsData).flat().length}`);
});