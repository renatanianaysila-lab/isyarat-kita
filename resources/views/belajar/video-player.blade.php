<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Materi IsyaratKita· Pemutar Video Pembelajaran</title>
  <!-- Font & Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Inter', system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', sans-serif;
    }

    body {
      background-color: #f5f9ff;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      padding: 24px;
    }

    /* main container – white base */
    .video-container {
      max-width: 1440px;
      width: 100%;
      background-color: #ffffff;
      border-radius: 32px;
      box-shadow: 0 25px 50px -12px rgba(10, 46, 90, 0.25);
      overflow: hidden;
      padding: 32px;
    }

    /* back button */
    .back-bar {
      display: flex;
      align-items: center;
      gap: 16px;
      margin-bottom: 24px;
    }

    .back-button {
      display: flex;
      align-items: center;
      gap: 8px;
      background-color: #f0f5ff;
      color: #0A2E5A;
      padding: 10px 20px;
      border-radius: 40px;
      text-decoration: none;
      font-weight: 600;
      font-size: 1rem;
      border: 1px solid #d9e6f2;
      transition: all 0.2s;
    }

    .back-button:hover {
      background-color: #e1ebfa;
      border-color: #F9C80E;
    }

    .back-button i {
      color: #F9C80E;
    }

    .video-title-small {
      color: #0A2E5A;
      font-weight: 500;
      font-size: 1.1rem;
    }

    /* main grid */
    .content-grid {
      display: grid;
      grid-template-columns: 1fr 360px;
      gap: 28px;
      margin-bottom: 28px;
    }

    /* VIDEO PLAYER */
    .video-area {
      background-color: #0b1c2f;
      border-radius: 24px;
      overflow: hidden;
      box-shadow: 0 20px 30px -10px rgba(10, 46, 90, 0.3);
    }

    .video-player {
      width: 100%;
      aspect-ratio: 16 / 9;
      background: #0f263c;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      position: relative;
    }

    .video-placeholder {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 8px;
      font-size: 1.4rem;
      opacity: 0.8;
    }
    
    .video-placeholder i {
      font-size: 4rem;
      color: #F9C80E;
      filter: drop-shadow(0 4px 6px black);
    }

    /* video controls */
    .video-controls {
      background: linear-gradient(0deg, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0.3) 80%);
      padding: 12px 20px;
      display: flex;
      align-items: center;
      gap: 16px;
      flex-wrap: wrap;
      color: white;
    }

    .control-left {
      display: flex;
      align-items: center;
      gap: 16px;
      flex: 2;
    }

    .play-btn {
      background: #F9C80E;
      border: none;
      width: 44px;
      height: 44px;
      border-radius: 30px;
      color: #0A2E5A;
      font-size: 1.3rem;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      box-shadow: 0 4px 8px rgba(0,0,0,0.3);
      transition: all 0.2s;
    }

    .play-btn:hover {
      transform: scale(1.05);
      background-color: #e6b800;
    }

    .progress-bar {
      flex: 1;
      height: 8px;
      background: rgba(255,255,255,0.3);
      border-radius: 20px;
      position: relative;
      cursor: pointer;
    }
    
    .progress-fill {
      width: 42%;
      height: 8px;
      background: #F9C80E;
      border-radius: 20px;
    }

    .control-right {
      display: flex;
      align-items: center;
      gap: 18px;
    }
    
    .control-right i, .subtitle-badge {
      font-size: 1.3rem;
      color: white;
      opacity: 0.9;
      transition: 0.2s;
      cursor: pointer;
    }
    
    .control-right i:hover {
      opacity: 1;
      color: #F9C80E;
    }
    
    .subtitle-badge {
      background: #0A2E5A;
      padding: 6px 12px;
      border-radius: 30px;
      font-size: 0.9rem;
      font-weight: 600;
      border: 1px solid #F9C80E;
    }
    
    .subtitle-badge i {
      margin-right: 6px;
      font-size: 1rem;
    }
    
    .volume-control {
      display: flex;
      align-items: center;
      gap: 8px;
    }
    
    .volume-slider {
      width: 60px;
      height: 5px;
      background: rgba(255,255,255,0.4);
      border-radius: 10px;
      cursor: pointer;
    }
    
    .volume-slider-fill {
      width: 70%;
      height: 5px;
      background: #F9C80E;
      border-radius: 10px;
    }

    /* SIDEBAR */
    .sidebar {
      background-color: #ffffff;
      border-radius: 24px;
      padding: 20px 18px;
      box-shadow: 0 18px 30px -12px rgba(10, 46, 90, 0.12);
      border: 1px solid #e6f0fa;
    }

    .sidebar-title {
      font-size: 1.4rem;
      font-weight: 700;
      color: #0A2E5A;
      margin-bottom: 8px;
      display: flex;
      align-items: center;
      gap: 10px;
    }
    
    .sidebar-title i {
      color: #F9C80E;
      font-size: 1.5rem;
    }

    .progress-overview {
      background: #f5faff;
      border-radius: 20px;
      padding: 18px 16px;
      margin-bottom: 24px;
      border: 1px solid #d9e8ff;
    }
    
    .progress-label {
      display: flex;
      justify-content: space-between;
      font-weight: 600;
      color: #0A2E5A;
      margin-bottom: 8px;
    }
    
    .progress-track-bg {
      background: #d9e6f5;
      height: 12px;
      border-radius: 30px;
    }
    
    .progress-track-fill {
      width: 68%;
      height: 12px;
      background: #F9C80E;
      border-radius: 30px;
    }

    .lesson-list {
      list-style: none;
      margin-top: 12px;
    }
    
    .lesson-item {
      display: flex;
      align-items: center;
      gap: 16px;
      padding: 14px 12px;
      border-radius: 20px;
      background: #ffffff;
      transition: all 0.2s;
      border: 1px solid transparent;
      cursor: pointer;
      margin-bottom: 6px;
    }
    
    .lesson-item:hover {
      background: #f8fcff;
      border-color: #F9C80E;
    }
    
    .lesson-item.active {
      background: #f0f7ff;
      border-color: #0A2E5A;
      box-shadow: 0 6px 12px rgba(10,46,90,0.08);
    }
    
    .lesson-thumb {
      width: 48px;
      height: 48px;
      background: #0A2E5A;
      border-radius: 16px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-size: 1.4rem;
    }
    
    .lesson-thumb.selesai {
      background: #10b981;
    }
    
    .lesson-info h4 {
      font-size: 1.1rem;
      font-weight: 700;
      color: #4a90e2;
    }
    
    .lesson-info p {
      font-size: 0.9rem;
      color: #5f7d9c;
      display: flex;
      align-items: center;
      gap: 6px;
      margin-top: 4px;
    }
    
    .checked {
      color: #F9C80E;
    }

    /* BOTTOM PANEL */
    .bottom-panel {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 28px;
      margin-top: 28px;
    }

    .lesson-description {
      background: #ffffff;
      border-radius: 24px;
      padding: 28px;
      box-shadow: 0 15px 25px -10px rgba(10, 46, 90, 0.08);
      border: 1px solid #e6f0fa;
    }
    
    .lesson-description h2 {
      font-size: 1.8rem;
      font-weight: 700;
      color: #4a90e2;
      margin-bottom: 12px;
    }
    
    .badge-blue {
      background: #e1ebfa;
      color: #0A2E5A;
      font-weight: 600;
      padding: 6px 16px;
      border-radius: 60px;
      display: inline-block;
      font-size: 0.95rem;
      margin-bottom: 16px;
    }
    
    .badge-blue i {
      color: #F9C80E;
      margin-right: 6px;
    }
    
    .obj-list {
      margin-top: 18px;
      list-style: none;
    }
    
    .obj-list li {
      display: flex;
      align-items: center;
      gap: 12px;
      font-size: 1.15rem;
      margin-bottom: 14px;
      color: #4a90e2;
    }
    
    .obj-list i {
      color: #F9C80E;
      font-size: 1.3rem;
      width: 28px;
    }

    .discussion {
      background: #ffffff;
      border-radius: 24px;
      padding: 28px;
      box-shadow: 0 15px 25px -10px rgba(10, 46, 90, 0.08);
      border: 1px solid #e6f0fa;
    }
    
    .discussion h3 {
      font-size: 1.6rem;
      color: #4a90e2;
      font-weight: 700;
      margin-bottom: 18px;
      display: flex;
      align-items: center;
      gap: 10px;
    }
    
    .discussion h3 i {
      color: #F9C80E;
    }
    
    .comment-box {
      display: flex;
      gap: 16px;
      margin-bottom: 24px;
    }
    
    .comment-avatar {
      min-width: 52px;
      height: 52px;
      background: #4a90e2;
      border-radius: 20px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-size: 1.5rem;
    }
    
    .comment-avatar.mentor {
      background: #F9C80E;
      color: #0A2E5A;
    }
    
    .comment-input {
      width: 100%;
      border: 2px solid #d9e8ff;
      border-radius: 20px;
      padding: 16px 20px;
      font-size: 1rem;
      resize: vertical;
      background: white;
      transition: 0.2s;
    }
    
    .comment-input:focus {
      outline: none;
      border-color: #F9C80E;
      box-shadow: 0 0 0 3px rgba(249,200,14,0.15);
    }
    
    .send-btn {
      background: #4a90e2;
      color: white;
      border: none;
      padding: 0 28px;
      border-radius: 40px;
      font-weight: 700;
      font-size: 1rem;
      display: flex;
      align-items: center;
      gap: 8px;
      cursor: pointer;
      height: 52px;
      transition: all 0.2s;
    }
    
    .send-btn:hover {
      background: #4a90e2;
    }
    
    .comment-item {
      display: flex;
      gap: 14px;
      margin-bottom: 18px;
    }
    
    .comment-item p {
      background: #f5faff;
      padding: 14px 18px;
      border-radius: 20px;
      border-top-left-radius: 6px;
      font-size: 1rem;
      color: #4a90e2;
      flex: 1;
    }

    hr {
      border: none;
      border-top: 1px solid #e6f0fa;
      margin: 20px 0;
    }

    /* responsive */
    @media (max-width: 1000px) {
      .content-grid {
        grid-template-columns: 1fr;
      }
      .bottom-panel {
        grid-template-columns: 1fr;
      }
    }
  </style>
</head>
<body>
<div class="video-container">

  <!-- back button -->
  <div class="back-bar">
    <a href="javascript:history.back()" class="back-button">
      <i class="fas fa-arrow-left"></i> Kembali ke Materi
    </a>
    <span class="video-title-small">
      <i class="fas fa-play-circle" style="color: #F9C80E;"></i> 
      Sedang menonton: Ekspresi wajah dasar
    </span>
  </div>

  <!-- main grid -->
  <div class="content-grid">
    <!-- LEFT: video player -->
    <div class="video-area">
      <div class="video-player">
        <div class="video-placeholder">
          <i class="fas fa-play-circle"></i>
          <span>Tampilan video Materi</span>
        </div>
      </div>
      
      <!-- video controls -->
      <div class="video-controls">
        <div class="control-left">
          <button class="play-btn" id="playPauseBtn">
            <i class="fas fa-play"></i>
          </button>
          <div class="progress-bar" id="progressBar">
            <div class="progress-fill" id="progressFill" style="width: 42%;"></div>
          </div>
          <span style="font-size:0.9rem; font-weight:500;">12:42 / 28:16</span>
        </div>
        
        <div class="control-right">
          <div class="subtitle-badge">
            <i class="fas fa-closed-captioning"></i> CC
          </div>
          <i class="fas fa-clock" title="Kecepatan putar"></i>
          <div class="volume-control">
            <i class="fas fa-volume-up"></i>
            <div class="volume-slider">
              <div class="volume-slider-fill"></div>
            </div>
          </div>
          <i class="fas fa-expand" title="Fullscreen"></i>
        </div>
      </div>
    </div>

    <!-- RIGHT: sidebar -->
    <div class="sidebar">
      <div class="sidebar-title">
        <i class="fas fa-list-check"></i> Daftar pelajaran
      </div>
      
      <div class="progress-overview">
        <div class="progress-label">
          <span>Progress kelas</span> 
          <span>68%</span>
        </div>
        <div class="progress-track-bg">
          <div class="progress-track-fill" style="width: 68%;"></div>
        </div>
        <p style="margin-top: 12px; color:#0A2E5A; font-weight:500;">
          <i class="fas fa-circle-check" style="color:#F9C80E;"></i> 
          8 dari 12 video selesai
        </p>
      </div>

      <ul class="lesson-list" id="lessonList">
        <li class="lesson-item" data-id="1" onclick="changeVideo(1, this)">
          <div class="lesson-thumb selesai"><i class="fas fa-check"></i></div>
          <div class="lesson-info">
            <h4>1. Abjad A-Z</h4>
            <p><i class="fas fa-circle-check checked"></i> Selesai · 14 menit</p>
          </div>
        </li>
        <li class="lesson-item active" data-id="2" onclick="changeVideo(2, this)">
          <div class="lesson-thumb"><i class="fas fa-play"></i></div>
          <div class="lesson-info">
            <h4>2. Angka 1-100</h4>
            <p><i class="fas fa-spinner" style="color:#F9C80E;"></i> 60% · 22 menit</p>
          </div>
        </li>
        <li class="lesson-item" data-id="3" onclick="changeVideo(3, this)">
          <div class="lesson-thumb"><i class="fas fa-lock"></i></div>
          <div class="lesson-info">
            <h4>3. Salam & Sapaan</h4>
            <p><i class="fas fa-lock" style="color:#94a3b8;"></i> Terkunci</p>
          </div>
        </li>
        <li class="lesson-item" data-id="4" onclick="changeVideo(4, this)">
          <div class="lesson-thumb"><i class="fas fa-lock"></i></div>
          <div class="lesson-info">
            <h4>4. percakapan Sehari-hari</h4>
            <p><i class="fas fa-lock" style="color:#94a3b8;"></i> Terkunci</p>
          </div>
        </li>
      </ul>
      
      <hr>
      <p style="font-weight:600; color:#0A2E5A;">
        <i class="fas fa-clock" style="color:#F9C80E;"></i> 
        Berikutnya: ekspresi wajah
      </p>
    </div>
  </div>

  <!-- bottom panel -->
  <div class="bottom-panel">
    <!-- deskripsi -->
    <div class="lesson-description" id="lessonDescription">
      <h2 id="videoTitle">Ekspresi wajah & salam</h2>
      <span class="badge-blue" id="videoMeta">
        <i class="far fa-clock"></i> pertemuan 2 · 22 menit
      </span>
      <p id="videoDesc" style="font-size:1.2rem; margin: 16px 0 12px; color: #0A2E5A;">
        Belajar membaca ekspresi alami dan gestur tangan untuk percakapan dasar.
      </p>
      <ul class="obj-list" id="objectivesList">
        <li><i class="fas fa-check-circle"></i> Menguasai 6 ekspresi wajah penting</li>
        <li><i class="fas fa-check-circle"></i> Gerakan salam (pagi, siang, malam)</li>
        <li><i class="fas fa-check-circle"></i> Praktik dengan video interaktif</li>
        <li><i class="fas fa-check-circle"></i> Memperhatikan posisi alis & mulut</li>
      </ul>
    </div>
    
    <!-- diskusi -->
    <div class="discussion">
      <h3><i class="fas fa-comments"></i> Diskusi & catatan</h3>
      
      <div class="comment-box">
        <div class="comment-avatar"><i class="fas fa-user"></i></div>
        <textarea class="comment-input" placeholder="Tulis pertanyaan atau catatan..." rows="2"></textarea>
        <button class="send-btn"><i class="fas fa-paper-plane"></i> Kirim</button>
      </div>
      
      <div class="comment-thread">
        <div class="comment-item">
          <div class="comment-avatar guru">R</div>
          <p><strong>Rina (siswa):</strong> “Untuk ekspresi terkejut, alis harus naik semua ya?”</p>
        </div>
        <div class="comment-item">
          <div class="comment-avatar">M</div>
          <p><strong>Guru:</strong> “Betul, dan bibir sedikit terbuka. nanti ada contoh slowmo.”</p>
        </div>
      </div>
    </div>
  </div>

  <!-- footer -->
  <div style="margin-top: 24px; text-align: center; font-size: 0.95rem; color:#5f7d9c; border-top: 1px solid #e6f0fa; padding-top: 20px;">
    <span><i class="fas fa-hands-asl-interpreting" style="color:#F9C80E;"></i> IsyaratKita</span>
  </div>
</div>

<script>
// Data video untuk konten dinamis
const videoContents = {
  1: {
    title: 'Abjad A-Z',
    meta: 'pertemuan 1 · 14 menit',
    desc: 'Belajar huruf abjad A-Z.',
    objectives: [
      'Mengenal 26 huruf abjad',
      'Praktik huruf vokal A-I-U-E-O',
    ]
  },
  2: {
    title: 'Angka 1-100',
    meta: 'pertemuan 2 · 22 menit',
    desc: 'Belajar mengenali angka 1-100.',
    objectives: [
    ]
  },
  3: {
    title: 'Salam & Sapaan',
    meta: 'pertemuan 3 · 18 menit',
    desc: '',
    objectives: [

    ]
  },
  4: {
    title: 'Percakapan sehari-hari',
    meta: 'pertemuan 4 · 25 menit',
    desc: '',
    objectives: [

    ]
  }
};

// Fungsi ganti video
function changeVideo(videoId, element) {
  // Cegah kalau video terkunci (ID 3 dan 4)
  if (videoId === 3 || videoId === 4) {
    alert('Video ini masih terkunci. Selesaikan video sebelumnya terlebih dahulu.');
    return;
  }

  document.querySelectorAll('.lesson-item').forEach(item => {
    item.classList.remove('active');
  });
  
  // Tambah class active ke item yang diklik
  if (element) {
    element.classList.add('active');
  }
  
  // Update judul di back bar
  const titles = {
    1: 'Abjad A-Z',
    2: 'Angka 1-100',
    3: 'Salam & Sapaan',
    4: 'Percakapan sehari-hari'
  };
  
  document.querySelector('.video-title-small').innerHTML = 
    `<i class="fas fa-play-circle" style="color: #F9C80E;"></i> Sedang menonton: ${titles[videoId]}`;
  
  // Update konten deskripsi
  const content = videoContents[videoId];
  if (content) {
    document.getElementById('videoTitle').textContent = content.title;
    document.getElementById('videoMeta').innerHTML = `<i class="far fa-clock"></i> ${content.meta}`;
    document.getElementById('videoDesc').textContent = content.desc;
    
    const objList = document.getElementById('objectivesList');
    objList.innerHTML = content.objectives.map(obj => 
      `<li><i class="fas fa-check-circle"></i> ${obj}</li>`
    ).join('');
  }
  
  // Update progress fill di video (simulasi)
  const progress = videoId === 1 ? 100 : (videoId === 2 ? 60 : 0);
  document.getElementById('progressFill').style.width = progress + '%';
}

// Play/Pause toggle
document.getElementById('playPauseBtn').addEventListener('click', function() {
  const icon = this.querySelector('i');
  if (icon.classList.contains('fa-play')) {
    icon.classList.remove('fa-play');
    icon.classList.add('fa-pause');
  } else {
    icon.classList.remove('fa-pause');
    icon.classList.add('fa-play');
  }
});

// Progress bar click
document.getElementById('progressBar').addEventListener('click', function(e) {
  const rect = this.getBoundingClientRect();
  const x = e.clientX - rect.left;
  const width = rect.width;
  const percent = Math.min(100, Math.max(0, (x / width) * 100));
  document.getElementById('progressFill').style.width = percent + '%';
  
  // Update time display (simulasi)
  const totalSeconds = 28 * 60 + 16; // 28:16
  const currentSeconds = Math.floor((percent / 100) * totalSeconds);
  const minutes = Math.floor(currentSeconds / 60);
  const seconds = currentSeconds % 60;
  const timeStr = `${minutes}:${seconds.toString().padStart(2, '0')} / 28:16`;
  document.querySelector('.time-display').textContent = timeStr;
});

// Inisialisasi
document.addEventListener('DOMContentLoaded', function() {
  // Set time display element
  const timeSpan = document.querySelector('.control-left span');
  timeSpan.classList.add('time-display');
});
</script>
</body>
</html>