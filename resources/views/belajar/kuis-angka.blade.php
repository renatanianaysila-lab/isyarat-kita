<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IsyaratKita - Kuis Angka 1-10</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <link rel="stylesheet" href="/css/belajar/kuis-angka.css">

    <style>
        .option-btn { transition: all 0.2s ease; cursor: pointer; }
        .option-btn.correct { background-color: #2e7d32 !important; color: white !important; border-color: #1b5e20 !important; }
        .option-btn.wrong { background-color: #c62828 !important; color: white !important; border-color: #b71c1c !important; }
        .image-placeholder { height: 240px; background: #f8fafc; border: 2px dashed #cbd5e1; border-radius: 12px; display: flex; align-items: center; justify-content: center; overflow: hidden; position: relative; margin-bottom: 20px; }
        #quizImage { max-width: 100%; max-height: 100%; object-fit: contain; }
        .num-btn { width: 35px; height: 35px; margin: 5px; border: 1px solid #cbd5e1; background: white; border-radius: 5px; cursor: pointer; }
        .num-btn.active { background: #1e5abc; color: white; border-color: #1e5abc; font-weight: bold; }
        .num-btn.answered { border-color: #1e5abc; color: #1e5abc; }
        .result-container { text-align: center; padding: 30px 10px; }
        .result-score { font-size: 4rem; font-weight: 800; color: #1e5abc; margin: 20px 0; }
        .btn-restart { background: #1e5abc; color: white; padding: 10px 20px; border: none; border-radius: 8px; cursor: pointer; font-size: 1rem; font-weight: 600; }
    </style>
</head>
<body>
    <div class="quiz-container">
        <a href="?menu=kuis" class="back-button">
            <i class="fas fa-arrow-left"></i> Kembali ke Kuis
        </a>

        <div class="quiz-header">
            <div class="logo">
                <img src="/img/img/LOGO.png" alt="IsyaratKita Logo" class="logo-img" style="width: 120px; height: auto;">
            </div>
            <p class="quiz-subtitle">Uji pemahaman angka 1-10 dalam bahasa isyarat BISINDO</p>
        </div>

        <div class="quiz-card" id="quizCard">
            <div id="quizActiveArea">
                <div class="progress-indicator">
                    <span class="progress-text">Soal <strong id="currentSoal">1</strong> dari <strong id="totalSoal">5</strong></span>
                    <span class="score-badge" id="answeredCount">0 Terjawab</span>
                </div>

                <div class="image-placeholder" id="imagePlaceholder">
                    <img id="quizImage" src="" alt="Isyarat Angka">
                </div>

                <div class="question">
                    <h3 id="pertanyaan">Gestur tangan di atas menunjukkan angka berapa?</h3>
                </div>

                <div class="options-grid" id="optionsGrid" style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 12px; margin-bottom: 20px;">
                    <button class="option-btn" onclick="checkAnswer(0)"></button>
                    <button class="option-btn" onclick="checkAnswer(1)"></button>
                    <button class="option-btn" onclick="checkAnswer(2)"></button>
                    <button class="option-btn" onclick="checkAnswer(3)"></button>
                </div>

                <div class="navigation-buttons" style="display: flex; justify-content: space-between; margin-bottom: 20px;">
                    <button class="nav-btn" id="prevBtn" onclick="navigateQuestion(-1)" style="padding: 10px 15px; cursor: pointer;">
                        <i class="fas fa-chevron-left"></i> Sebelumnya
                    </button>
                    <button class="nav-btn" id="nextBtn" onclick="navigateQuestion(1)" style="padding: 10px 15px; cursor: pointer;">
                        Selanjutnya <i class="fas fa-chevron-right"></i>
                    </button>
                </div>

                <div class="soal-numbers" id="soalNumbers" style="display: flex; justify-content: center; flex-wrap: wrap; margin-top: 15px;"></div>
            </div>
            
            <div id="quizResultArea" style="display: none;" class="result-container">
                <i class="fas fa-trophy" style="font-size: 4rem; color: #F9C80E;"></i>
                <h2>Kuis Angka Selesai!</h2>
                <p>Hebat! Berikut adalah skor pemahaman angka kamu:</p>
                <div class="result-score" id="quizScore">0</div>
                <p style="margin-bottom: 25px; color: #64748b;" id="resultSummary">Kamu menjawab benar 0 dari 5 soal.</p>
                <button class="btn-restart" onclick="restartQuiz()">Ulangi Kuis</button>
            </div>
        </div>

        <div class="quiz-footer">
            <i class="fas fa-hands-asl-interpreting"></i> IsyaratKita - Belajar Bahasa Isyarat dengan Mudah
        </div>
    </div>

    <script>
        const quizData = [
            { image: "/img/img/angka1_kuis.jpg", options: ["2", "5", "1", "3"], correct: 2 },
            { image: "/img/img/angka3_kuis.jpg", options: ["4", "3", "6", "8"], correct: 1 },
            { image: "/img/img/angka5_kuis.jpg", options: ["5", "7", "2", "9"], correct: 0 },
            { image: "/img/img/angka6_kuis.jpg", options: ["10", "4", "6", "1"], correct: 2 },
            { image: "/img/img/angka8_kuis.jpg", options: ["7", "6", "5", "8"], correct: 3 }
        ];

        let currentIndex = 0;
        let userAnswers = new Array(quizData.length).fill(null);

        function initQuiz() {
            document.getElementById('totalSoal').innerText = quizData.length;
            renderNumbers();
            showQuestion();
        }

        function showQuestion() {
            const currentData = quizData[currentIndex];
            document.getElementById('currentSoal').innerText = currentIndex + 1;
            document.getElementById('quizImage').src = currentData.image;
            
            const buttons = document.querySelectorAll('#optionsGrid .option-btn');
            buttons.forEach((btn, index) => {
                btn.innerText = currentData.options[index];
                btn.className = "option-btn";
                btn.disabled = false;
                if (userAnswers[currentIndex] !== null) {
                    btn.disabled = true;
                    if (index === currentData.correct) btn.classList.add('correct');
                    if (userAnswers[currentIndex] === index && index !== currentData.correct) btn.classList.add('wrong');
                }
            });

            document.getElementById('prevBtn').disabled = currentIndex === 0;
            if (currentIndex === quizData.length - 1) {
                document.getElementById('nextBtn').innerHTML = 'Selesai Kuis <i class="fas fa-flag-checkered"></i>';
            } else {
                document.getElementById('nextBtn').innerHTML = 'Selanjutnya <i class="fas fa-chevron-right"></i>';
            }
            updateNumberTrack();
        }

        function checkAnswer(selectedIndex) {
            if (userAnswers[currentIndex] !== null) return;
            userAnswers[currentIndex] = selectedIndex;
            const currentData = quizData[currentIndex];
            const buttons = document.querySelectorAll('#optionsGrid .option-btn');
            buttons.forEach((btn, index) => {
                btn.disabled = true;
                if (index === currentData.correct) btn.classList.add('correct');
                if (index === selectedIndex && selectedIndex !== currentData.correct) btn.classList.add('wrong');
            });
            const totalAnswered = userAnswers.filter(ans => ans !== null).length;
            document.getElementById('answeredCount').innerText = `${totalAnswered} Terjawab`;
            updateNumberTrack();
        }

        function navigateQuestion(direction) {
            if (direction === 1 && currentIndex === quizData.length - 1) { showResults(); return; }
            currentIndex += direction;
            showQuestion();
        }

        function renderNumbers() {
            const container = document.getElementById('soalNumbers');
            container.innerHTML = '';
            quizData.forEach((_, index) => {
                const btn = document.createElement('button');
                btn.className = 'num-btn';
                btn.innerText = index + 1;
                btn.onclick = () => { currentIndex = index; showQuestion(); };
                container.appendChild(btn);
            });
        }

        function updateNumberTrack() {
            const numButtons = document.querySelectorAll('#soalNumbers .num-btn');
            numButtons.forEach((btn, index) => {
                btn.className = 'num-btn';
                if (index === currentIndex) btn.classList.add('active');
                else if (userAnswers[index] !== null) btn.classList.add('answered');
            });
        }

        function showResults() {
            let correctCount = 0;
            quizData.forEach((data, index) => { if (userAnswers[index] === data.correct) correctCount++; });
            const finalScore = Math.round((correctCount / quizData.length) * 100);
            document.getElementById('quizActiveArea').style.display = 'none';
            document.getElementById('quizResultArea').style.display = 'block';
            document.getElementById('quizScore').innerText = finalScore;
            document.getElementById('resultSummary').innerText = `Kamu menjawab benar ${correctCount} dari ${quizData.length} soal.`;
        }

        function restartQuiz() {
            currentIndex = 0;
            userAnswers = new Array(quizData.length).fill(null);
            document.getElementById('answeredCount').innerText = "0 Terjawab";
            document.getElementById('quizActiveArea').style.display = 'block';
            document.getElementById('quizResultArea').style.display = 'none';
            initQuiz();
        }

        document.addEventListener("DOMContentLoaded", initQuiz);
    </script>
</body>
</html>