<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IsyaratKita - Kuis Abjad A-Z</title>
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/belajar/kuis-abjad.css') }}">
</head>
<body>
    <div class="quiz-container">
        <!-- Tombol Kembali -->
        <a href="javascript:history.back()" class="back-button">
            <i class="fas fa-arrow-left"></i> Kembali ke Kuis
        </a>

        <!-- Header -->
        <div class="quiz-header">
            <div class="logo">
                <img src="{{ asset('img/logo.png') }}" alt="IsyaratKita Logo" class="logo-img">
            </div>
            <p class="quiz-subtitle">Uji pemahaman abjad A-Z dalam bahasa isyarat</p>
        </div>

        <!-- Main Card -->
        <div class="quiz-card" id="quizCard">
            <div class="progress-indicator">
                <span class="progress-text">Soal <strong id="currentSoal">1</strong> dari <strong id="totalSoal">10</strong></span>
                <span class="score-badge" id="answeredCount">0 Terjawab</span>
            </div>

            <!-- Gambar Placeholder -->
            <div class="image-placeholder" id="imagePlaceholder">
                <span>Gambar gestur tangan untuk huruf akan ditampilkan di sini</span>
            </div>

            <!-- Pertanyaan -->
            <div class="question">
                <h3 id="pertanyaan">Huruf apakah itu?</h3>
            </div>

            <!-- Pilihan Jawaban -->
            <div class="options-grid" id="optionsGrid">
                <button class="option-btn" data-option="A">A</button>
                <button class="option-btn" data-option="B">B</button>
                <button class="option-btn" data-option="C">C</button>
                <button class="option-btn" data-option="D">D</button>
            </div>

            <!-- Navigasi Next/Previous -->
            <div class="navigation-buttons">
                <button class="nav-btn" id="prevBtn" disabled>
                    <i class="fas fa-chevron-left"></i> Sebelumnya
                </button>
                <button class="nav-btn" id="nextBtn">Selanjutnya <i class="fas fa-chevron-right"></i></button>
            </div>

            <!-- Nomor Soal -->
            <div class="soal-numbers" id="soalNumbers"></div>
        </div>

        <div class="quiz-footer">
            <i class="fas fa-hands-asl-interpreting"></i> IsyaratKita - Belajar Bahasa Isyarat dengan Mudah
        </div>
    </div>

    <!-- JS -->
    <script src="{{ asset('js/belajar/kuis-abjad.js') }}"></script>
</body>
</html>