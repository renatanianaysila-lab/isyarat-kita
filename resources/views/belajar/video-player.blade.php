<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materi IsyaratKita · Pemutar Video Pembelajaran</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="/css/belajar/video-player.css">
</head>
<body>
<div class="video-container">

    @php
        $videoParam = request('video', 'abjad-az');
        
        if ($videoParam == 'abjad-az') {
            $youtubeId = 'Hx8IU6CfMIM';
            $currentTitle = '1. Abjad A-Z';
            $currentDesc = 'Belajar huruf abjad dalam bahasa isyarat BISINDO versi Yogyakarta.';
            $durationText = '14 menit';
        } elseif ($videoParam == 'angka-1-100' || $videoParam == 'angka-1-10') {
            $youtubeId = '5UN60jB4eKg';
            $currentTitle = '2. Angka 1-100';
            $currentDesc = 'Belajar simbol gerakan tangan untuk angka dasar dalam BISINDO.';
            $durationText = '22 menit';
        } elseif ($videoParam == 'salam-sapaan' || $videoParam == 'sapa') {
            $youtubeId = 'xnxydJPDD1M';
            $currentTitle = '3. Salam & Sapaan';
            $currentDesc = 'Menguasai kata sapaan sopan sehari-hari (pagi, siang, malam, terima kasih).';
            $durationText = '8 menit';
        } elseif ($videoParam == 'percakapan-dasar' || $videoParam == 'percakapan') {
            $youtubeId = 'NaafQwd0XEY';
            $currentTitle = '4. Percakapan Sehari-hari';
            $currentDesc = 'Praktik kalimat dan dialog interaktif sehari-hari menggunakan bahasa isyarat.';
            $durationText = '20 menit';
        } else {
            $youtubeId = 'Hx8IU6CfMIM';
            $currentTitle = '1. Abjad A-Z';
            $currentDesc = 'Belajar huruf abjad dalam bahasa isyarat BISINDO.';
            $durationText = '14 menit';
        }
    @endphp

    <div class="back-bar">
        <a href="?menu=materi" class="back-button">
            <i class="fas fa-arrow-left"></i> Kembali ke Materi
        </a>
        <span class="video-title-small">
            <i class="fas fa-play-circle" style="color: #F9C80E;"></i> 
            Sedang menonton: {{ $currentTitle }}
        </span>
    </div>

    <div class="content-grid">
        <div class="video-area">
            <div class="video-player" style="height: 480px; background: #000; border-radius: 12px; overflow: hidden;">
                <iframe width="100%" height="100%" 
                        src="https://www.youtube.com/embed/{{ $youtubeId }}?autoplay=1&rel=0" 
                        title="IsyaratKita Video Player" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        allowfullscreen>
                </iframe>
            </div>
            <div style="margin-top: 10px; font-size: 0.85rem; color: #5f7d9c; font-style: italic;">
                * Memutar media streaming YouTube BISINDO Original.
            </div>
        </div>

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
                <li class="lesson-item {{ $videoParam == 'abjad-az' ? 'active' : '' }}" onclick="window.location.href='?video=abjad-az'">
                    <div class="lesson-thumb selesai"><i class="fas fa-check"></i></div>
                    <div class="lesson-info">
                        <h4>1. Abjad A-Z</h4>
                        <p><i class="fas fa-circle-check checked"></i> Selesai · 14 menit</p>
                    </div>
                </li>
                <li class="lesson-item {{ $videoParam == 'angka-1-100' ? 'active' : '' }}" onclick="window.location.href='?video=angka-1-100'">
                    <div class="lesson-thumb"><i class="fas fa-play"></i></div>
                    <div class="lesson-info">
                        <h4>2. Angka 1-100</h4>
                        <p><i class="fas fa-spinner" style="color:#F9C80E;"></i> 60% · 22 menit</p>
                    </div>
                </li>
                <li class="lesson-item {{ $videoParam == 'salam-sapaan' ? 'active' : '' }}" onclick="window.location.href='?video=salam-sapaan'">
                    <div class="lesson-thumb"><i class="fas fa-play"></i></div>
                    <div class="lesson-info">
                        <h4>3. Salam & Sapaan</h4>
                        <p><i class="fas fa-circle-play" style="color:#1e5abc;"></i> Tersedia · 8 menit</p>
                    </div>
                </li>
                <li class="lesson-item {{ $videoParam == 'percakapan-dasar' ? 'active' : '' }}" onclick="window.location.href='?video=percakapan-dasar'">
                    <div class="lesson-thumb"><i class="fas fa-play"></i></div>
                    <div class="lesson-info">
                        <h4>4. Percakapan Sehari-hari</h4>
                        <p><i class="fas fa-circle-play" style="color:#1e5abc;"></i> Tersedia · 20 menit</p>
                    </div>
                </li>
            </ul>
            
            <hr>
            <p style="font-weight:600; color:#0A2E5A;">
                <i class="fas fa-clock" style="color:#F9C80E;"></i> 
                Modul: Kelas Menengah BISINDO
            </p>
        </div>
    </div>

    <div class="bottom-panel">
        <div class="lesson-description" id="lessonDescription">
            <h2 id="videoTitle">{{ $currentTitle }}</h2>
            <span class="badge-blue" id="videoMeta">
                <i class="far fa-clock"></i> Durasi Kelas · {{ $durationText }}
            </span>
            <p id="videoDesc" style="font-size:1.2rem; margin: 16px 0 12px; color: #0A2E5A;">
                {{ $currentDesc }}
            </p>
            <ul class="obj-list" id="objectivesList">
                <li><i class="fas fa-check-circle"></i> Menguasai gerakan isyarat tangan secara presisi</li>
                <li><i class="fas fa-check-circle"></i> Memperhatikan mimik wajah dan bentuk mulut</li>
                <li><i class="fas fa-check-circle"></i> Dilengkapi instruktur tunarungu profesional terpercaya</li>
            </ul>
        </div>
        
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
                    <p><strong>Rina (siswa):</strong> "Gerakan tangan harus dominan kanan atau kiri ya?"</p>
                </div>
                <div class="comment-item">
                    <div class="comment-avatar">G</div>
                    <p><strong>Guru:</strong> "Gunakan tangan yang paling nyaman buat kamu (tangan dominan). Yang penting konsisten."</p>
                </div>
            </div>
        </div>
    </div>

    <div style="margin-top: 24px; text-align: center; font-size: 0.95rem; color:#5f7d9c; border-top: 1px solid #e6f0fa; padding-top: 20px;">
        <span><i class="fas fa-hands-asl-interpreting" style="color:#F9C80E;"></i> IsyaratKita</span>
    </div>
</div>
</body>
</html>