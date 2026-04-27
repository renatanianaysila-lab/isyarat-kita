@push('styles')
<link rel="stylesheet" href="{{ asset('css/sections/feedback-rating-guru.css') }}">
@endpush

<div class="feedback-container">
    
    {{-- HEADER --}}
    <div class="feedback-header">
        <h1>⭐ Feedback & Rating</h1>
        <p>Lihat ulasan dan rating dari murid untuk setiap materi bahasa isyarat yang Anda buat</p>
    </div>

    {{-- STATISTIK --}}
    <div class="stats-row">
        <div class="stat-card">
            <div class="stat-icon">📹</div>
            <div class="stat-info">
                <div class="stat-value" id="totalVideos">0</div>
                <div class="stat-label">Total Materi</div>
            </div>
        </div>
        <div class="stat-card">
            <div class="stat-icon">💬</div>
            <div class="stat-info">
                <div class="stat-value" id="totalReviews">0</div>
                <div class="stat-label">Total Review</div>
            </div>
        </div>
        <div class="stat-card">
            <div class="stat-icon">⭐</div>
            <div class="stat-info">
                <div class="stat-value" id="avgRating">0</div>
                <div class="stat-label">Rata-rata Rating</div>
            </div>
        </div>
        <div class="stat-card">
            <div class="stat-icon">👥</div>
            <div class="stat-info">
                <div class="stat-value" id="totalStudents">0</div>
                <div class="stat-label">Total Murid</div>
            </div>
        </div>
    </div>

    {{-- MAIN CONTENT --}}
    <div class="feedback-grid">
        
        {{-- LEFT: DAFTAR MATERI --}}
        <div class="video-list-card">
            <div class="card-header">
                <h2>📚 My Uploaded Videos</h2>
                <span class="video-count" id="videoCount">0 Materi</span>
            </div>
            <div class="video-list" id="videoList">
                <!-- Daftar materi akan diisi JS -->
            </div>
        </div>

        {{-- RIGHT: REVIEWS --}}
        <div class="reviews-card">
            <div class="card-header">
                <h2>📝 Reviews for: <span id="selectedVideoTitle">- Pilih Materi -</span></h2>
                <span class="review-count" id="reviewCount">0 Reviews</span>
            </div>
            
            {{-- Filter --}}
            <div class="filter-wrapper">
                <input type="text" id="searchReview" class="search-input" placeholder="🔍 Cari nama atau ulasan...">
                <select id="filterDifficulty" class="filter-select">
                    <option value="all">Semua Kesulitan</option>
                    <option value="mudah">👍 Mudah</option>
                    <option value="sedang">⚡ Sedang</option>
                    <option value="sulit">💪 Sulit</option>
                </select>
                <select id="filterRating" class="filter-select">
                    <option value="all">Semua Rating</option>
                    <option value="5">⭐⭐⭐⭐⭐ 5 Bintang</option>
                    <option value="4">⭐⭐⭐⭐ 4 Bintang</option>
                    <option value="3">⭐⭐⭐ 3 Bintang</option>
                </select>
            </div>

            <div class="reviews-list" id="reviewsList">
                <!-- Reviews akan diisi JS -->
            </div>
        </div>

    </div>
</div>

{{-- MODAL DETAIL REVIEW --}}
<div id="reviewModal" class="modal-review">
    <div class="modal-content">
        <div class="modal-header">
            <h3>📋 Detail Review</h3>
            <span class="modal-close">&times;</span>
        </div>
        <div class="modal-body" id="modalBody"></div>
    </div>
</div>

<div id="toastNotification" class="toast-notification"></div>

@push('scripts')
<script src="{{ asset('js/sections/feedback-rating-guru.js') }}"></script>
@endpush