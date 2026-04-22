<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materi IsyaratKita · Pemutar Video Pembelajaran</title>
    
    <!-- Font & Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/belajar/video-player.css') }}">
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

<!-- JS -->
<script src="{{ asset('js/belajar/video-player.js') }}"></script>
</body>
</html>