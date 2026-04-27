<div class="feedback-container">
  <!-- Header -->
  <div class="feedback-header">
    <h1>⭐ Feedback & Rating</h1>
    <p>Lihat ulasan dan rating dari murid-muridmu untuk setiap materi pembelajaran</p>
  </div>

  <!-- Statistik Ringkasan -->
  <div class="rating-stats-row">
    <div class="rating-stat-card">
      <div class="rating-stat-icon">⭐</div>
      <div class="rating-stat-content">
        <div class="rating-stat-value">4.85</div>
        <div class="rating-stat-label">Rata-rata Rating</div>
      </div>
    </div>
    <div class="rating-stat-card">
      <div class="rating-stat-icon">💬</div>
      <div class="rating-stat-content">
        <div class="rating-stat-value">156</div>
        <div class="rating-stat-label">Total Ulasan</div>
      </div>
    </div>
    <div class="rating-stat-card">
      <div class="rating-stat-icon">👍</div>
      <div class="rating-stat-content">
        <div class="rating-stat-value">89%</div>
        <div class="rating-stat-label">Kepuasan Murid</div>
      </div>
    </div>
  </div>

  <!-- Main Grid -->
  <div class="feedback-main-grid">
    <!-- Daftar Video -->
    <div class="video-list-card">
      <div class="card-header">
        <h2>📹 Daftar Video</h2>
        <span class="badge-info">Klik untuk lihat review</span>
      </div>
      <div class="video-list" id="videoList">
        <!-- Data akan diisi JavaScript -->
      </div>
    </div>

    <!-- Review Murid -->
    <div class="review-card">
      <div class="card-header">
        <h2 id="selectedVideoTitle">💬 Ulasan Murid</h2>
        <span class="badge-review">Review Terbaru</span>
      </div>
      <div id="selectedVideoInfo" class="selected-video-info"></div>
      <div class="review-list" id="reviewList">
        <div class="empty-state">
          <div class="empty-icon">👈</div>
          <p>Klik salah satu video di samping<br>untuk melihat ulasan murid</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal Lihat Detail Review -->
<div id="reviewModal" class="modal-feedback">
  <div class="modal-feedback-content">
    <div class="modal-feedback-header">
      <h3>📝 Detail Ulasan</h3>
      <span class="modal-close">&times;</span>
    </div>
    <div class="modal-feedback-body" id="modalBody">
      <!-- Isi modal akan diisi JavaScript -->
    </div>
  </div>
</div>

<!-- Toast Notification -->
<div id="toastNotif" class="toast-notification"></div>

@push('scripts')
<script src="{{ asset('js/sections/feedback-rating-guru.js') }}"></script>
@endpush