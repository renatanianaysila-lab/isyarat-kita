document.addEventListener('DOMContentLoaded', function() {
    
    // ========== DATA VIDEO (MATERI BAHASA ISYARAT) ==========
    const videoData = [
        { id: 1, title: 'Huruf A - Z (Alfabet)', date: '12 Okt 2024', icon: '🖐️', avgRating: 4.9 },
        { id: 2, title: 'Angka 1-10', date: '10 Okt 2024', icon: '🔢', avgRating: 4.8 },
        { id: 3, title: 'Salam & Sapaan', date: '08 Okt 2024', icon: '👋', avgRating: 4.9 },
        { id: 4, title: 'Percakapan Sehari-hari', date: '05 Okt 2024', icon: '💬', avgRating: 4.7 },
        { id: 5, title: 'Ekspresi & Emosi', date: '02 Okt 2024', icon: '😊', avgRating: 4.8 }
    ];
    
    // ========== DATA REVIEW MURID ==========
    const reviewsData = {
        1: [ // Huruf A - Z (Alfabet)
            { id: 1, name: 'Rina S.', avatar: '👩', rating: 5, difficulty: 'sedang', comment: 'Materinya jelas dan mudah dipahami! Terima kasih', date: '2 hari lalu' },
            { id: 2, name: 'Budi A.', avatar: '👦', rating: 5, difficulty: 'mudah', comment: 'Gampang ditiru, contohnya membantu banget!', date: '3 hari lalu' },
            { id: 3, name: 'Lusi M.', avatar: '👩', rating: 4, difficulty: 'sulit', comment: 'Beberapa bagian perlu dijelaskan lagi ya guru', date: '5 hari lalu' },
            { id: 4, name: 'Ahmad Fauzi', avatar: '👦', rating: 5, difficulty: 'mudah', comment: 'Cepat hafal huruf isyarat, terima kasih bu!', date: '1 minggu lalu' }
        ],
        2: [ // Angka 1-10
            { id: 1, name: 'Siti Nurhaliza', avatar: '👩', rating: 5, difficulty: 'mudah', comment: 'Angkanya mudah diingat, praktiknya seru!', date: '1 hari lalu' },
            { id: 2, name: 'Dewi Lestari', avatar: '👩', rating: 4, difficulty: 'sedang', comment: 'Materi bagus, tambahin contoh angka belasan', date: '3 hari lalu' },
            { id: 3, name: 'Rizky Pratama', avatar: '👦', rating: 5, difficulty: 'mudah', comment: 'Suka banget sama cara ngajarnya', date: '4 hari lalu' }
        ],
        3: [ // Salam & Sapaan
            { id: 1, name: 'Aisyah Putri', avatar: '👩', rating: 5, difficulty: 'mudah', comment: 'Salam dan sapaan lengkap, praktis digunakan', date: '2 hari lalu' },
            { id: 2, name: 'Fajar R.', avatar: '👦', rating: 4, difficulty: 'sedang', comment: 'Mantap, tambahin video percakapan salam', date: '4 hari lalu' },
            { id: 3, name: 'Nadia A.', avatar: '👩', rating: 5, difficulty: 'mudah', comment: 'Gurunya asik, mudah diikuti', date: '1 minggu lalu' }
        ],
        4: [ // Percakapan Sehari-hari
            { id: 1, name: 'Bagas Putra', avatar: '👦', rating: 4, difficulty: 'sedang', comment: 'Percakapannya berguna untuk sehari-hari', date: '3 hari lalu' },
            { id: 2, name: 'Mega C.', avatar: '👩', rating: 5, difficulty: 'mudah', comment: 'Langsung bisa praktek dengan teman', date: '5 hari lalu' }
        ],
        5: [ // Ekspresi & Emosi
            { id: 1, name: 'Eko P.', avatar: '👦', rating: 5, difficulty: 'mudah', comment: 'Ekspresinya lucu dan mudah diingat', date: '2 hari lalu' },
            { id: 2, name: 'Lina M.', avatar: '👩', rating: 4, difficulty: 'sedang', comment: 'Bagus, tapi perlu lebih banyak contoh', date: '4 hari lalu' },
            { id: 3, name: 'Andi S.', avatar: '👦', rating: 5, difficulty: 'mudah', comment: 'Membantu banget buat komunikasi sehari-hari', date: '1 minggu lalu' }
        ]
    };
    
    let currentVideoId = 1;
    
    // DOM Elements
    const videoList = document.getElementById('videoList');
    const reviewList = document.getElementById('reviewList');
    const selectedVideoTitle = document.getElementById('selectedVideoTitle');
    const toast = document.getElementById('toastNotif');
    
    // Helper: Render Stars
    function renderStars(rating) {
        let stars = '';
        for (let i = 1; i <= 5; i++) {
            stars += i <= rating ? '★' : '☆';
        }
        return stars;
    }
    
    // Helper: Get Difficulty Class
    function getDifficultyClass(difficulty) {
        if (difficulty === 'mudah') return 'difficulty-mudah';
        if (difficulty === 'sedang') return 'difficulty-sedang';
        return 'difficulty-sulit';
    }
    
    // Helper: Show Toast
    function showToast(message, type = 'info') {
        if (!toast) return;
        let bgColor = '#1A1F36';
        if (type === 'success') bgColor = '#22C55E';
        if (type === 'error') bgColor = '#DC2626';
        if (type === 'warning') bgColor = '#D97706';
        toast.style.background = bgColor;
        toast.textContent = message;
        toast.classList.add('show');
        setTimeout(() => { toast.classList.remove('show'); }, 3000);
    }
    
    // ========== RENDER DAFTAR VIDEO ==========
    function renderVideoList() {
        if (!videoList) return;
        
        videoList.innerHTML = '';
        videoData.forEach(video => {
            const div = document.createElement('div');
            div.className = `video-item ${currentVideoId === video.id ? 'active' : ''}`;
            div.onclick = () => selectVideo(video.id);
            div.innerHTML = `
                <div class="video-left">
                    <div class="video-icon">${video.icon}</div>
                    <div class="video-info">
                        <div class="video-title">${video.title}</div>
                        <div class="video-date">${video.date}</div>
                    </div>
                </div>
                <div class="video-rating">⭐ ${video.avgRating}</div>
            `;
            videoList.appendChild(div);
        });
    }
    
    // ========== RENDER REVIEWS ==========
    function renderReviews(videoId) {
        if (!reviewList) return;
        
        const reviews = reviewsData[videoId] || [];
        
        if (reviews.length === 0) {
            reviewList.innerHTML = `
                <div class="empty-state">
                    <div class="empty-icon">📭</div>
                    <p>Belum ada ulasan untuk video ini</p>
                </div>
            `;
            return;
        }
        
        reviewList.innerHTML = '';
        reviews.forEach(review => {
            const div = document.createElement('div');
            div.className = 'review-item';
            div.onclick = () => showReviewDetail(review);
            div.innerHTML = `
                <div class="review-header">
                    <div class="reviewer-info">
                        <div class="reviewer-avatar">${review.avatar}</div>
                        <div>
                            <div class="reviewer-name">${review.name}</div>
                            <div class="review-date">${review.date}</div>
                        </div>
                    </div>
                    <div class="review-stars">${renderStars(review.rating)}</div>
                </div>
                <div>
                    <span class="review-difficulty ${getDifficultyClass(review.difficulty)}">📊 ${review.difficulty === 'mudah' ? 'Mudah' : review.difficulty === 'sedang' ? 'Sedang' : 'Sulit'}</span>
                </div>
                <div class="review-comment">"${review.comment}"</div>
            `;
            reviewList.appendChild(div);
        });
    }
    
    // ========== SELECT VIDEO ==========
    function selectVideo(videoId) {
        currentVideoId = videoId;
        const selectedVideo = videoData.find(v => v.id === videoId);
        
        if (selectedVideo) {
            selectedVideoTitle.innerHTML = `💬 Ulasan: ${selectedVideo.title}`;
        }
        
        // Update active class
        document.querySelectorAll('.video-item').forEach((item, index) => {
            if (index + 1 === videoId) {
                item.classList.add('active');
            } else {
                item.classList.remove('active');
            }
        });
        
        // Render reviews
        renderReviews(videoId);
        
        showToast(`Menampilkan ulasan untuk "${selectedVideo?.title}"`, 'info');
    }
    
    // ========== MODAL DETAIL REVIEW ==========
    const modal = document.getElementById('reviewModal');
    const modalBody = document.getElementById('modalBody');
    const modalClose = document.querySelector('.modal-close');
    
    function showReviewDetail(review) {
        if (!modal || !modalBody) return;
        
        modalBody.innerHTML = `
            <div style="text-align: center;">
                <div style="width: 70px; height: 70px; background: #2D3C6A; border-radius: 35px; display: flex; align-items: center; justify-content: center; margin: 0 auto 16px; font-size: 32px;">${review.avatar}</div>
                <h3 style="margin-bottom: 8px; color: #1A1F36;">${review.name}</h3>
                <div style="color: #FFB800; font-size: 20px; margin-bottom: 12px;">${renderStars(review.rating)}</div>
                <div style="margin-bottom: 16px;">
                    <span class="review-difficulty ${getDifficultyClass(review.difficulty)}" style="padding: 6px 16px;">📊 ${review.difficulty === 'mudah' ? 'Mudah' : review.difficulty === 'sedang' ? 'Sedang' : 'Sulit'}</span>
                </div>
                <div style="background: #F8FAFF; padding: 16px; border-radius: 16px; margin-bottom: 16px;">
                    <p style="color: #4A5A7A; font-style: italic;">"${review.comment}"</p>
                </div>
                <div style="color: #7A8BB7; font-size: 12px;">📅 ${review.date}</div>
            </div>
        `;
        
        modal.style.display = 'block';
        document.body.style.overflow = 'hidden';
    }
    
    function closeModal() {
        if (modal) {
            modal.style.display = 'none';
            document.body.style.overflow = 'auto';
        }
    }
    
    if (modalClose) modalClose.onclick = closeModal;
    window.onclick = function(e) {
        if (e.target === modal) closeModal();
    }
    
    // ========== INITIAL RENDER ==========
    renderVideoList();
    renderReviews(1); // Tampilkan review video pertama
    
    console.log('✅ Halaman Feedback & Rating siap!');
});