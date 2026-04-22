// Data soal untuk angka 1-10
const questions = [
    { id: 1, image: "1", correct: "1", options: ["1", "2", "3", "4"] },
    { id: 2, image: "2", correct: "2", options: ["2", "3", "4", "5"] },
    { id: 3, image: "3", correct: "3", options: ["3", "4", "5", "6"] },
    { id: 4, image: "4", correct: "4", options: ["4", "5", "6", "7"] },
    { id: 5, image: "5", correct: "5", options: ["5", "6", "7", "8"] },
    { id: 6, image: "6", correct: "6", options: ["6", "7", "8", "9"] },
    { id: 7, image: "7", correct: "7", options: ["7", "8", "9", "10"] },
    { id: 8, image: "8", correct: "8", options: ["8", "9", "10", "1"] },
    { id: 9, image: "9", correct: "9", options: ["9", "10", "1", "2"] },
    { id: 10, image: "10", correct: "10", options: ["10", "1", "2", "3"] }
];

const totalSoal = questions.length;
let currentIndex = 0;
let userAnswers = Array(totalSoal).fill(null);

// DOM Elements
const currentSoalSpan = document.getElementById('currentSoal');
const totalSoalSpan = document.getElementById('totalSoal');
const answeredCountSpan = document.getElementById('answeredCount');
const imagePlaceholderDiv = document.getElementById('imagePlaceholder');
const pertanyaanH3 = document.getElementById('pertanyaan');
const optionsGrid = document.getElementById('optionsGrid');
const prevBtn = document.getElementById('prevBtn');
const nextBtn = document.getElementById('nextBtn');
const soalNumbersDiv = document.getElementById('soalNumbers');

function updateSoal() {
    const soal = questions[currentIndex];
    
    currentSoalSpan.textContent = currentIndex + 1;
    totalSoalSpan.textContent = totalSoal;
    
    if (currentIndex === totalSoal - 1) {
        nextBtn.innerHTML = 'Kirim <i class="fas fa-paper-plane"></i>';
    } else {
        nextBtn.innerHTML = 'Selanjutnya <i class="fas fa-chevron-right"></i>';
    }
    
    imagePlaceholderDiv.innerHTML = '<span>Gambar gestur tangan untuk angka akan ditampilkan di sini</span>';
    pertanyaanH3.textContent = "Angka berapakah itu?";
    
    const optionBtns = optionsGrid.querySelectorAll('.option-btn');
    optionBtns.forEach((btn, idx) => {
        const optionValue = soal.options[idx];
        btn.textContent = optionValue;
        btn.dataset.option = optionValue;
        btn.classList.remove('selected');
        
        if (userAnswers[currentIndex] === optionValue) {
            btn.classList.add('selected');
        }
    });
    
    prevBtn.disabled = (currentIndex === 0);
    updateSoalNumbers();
    
    const answeredCount = userAnswers.filter(a => a !== null).length;
    answeredCountSpan.textContent = `${answeredCount} Terjawab`;
    
    const quizCard = document.getElementById('quizCard');
    quizCard.style.animation = 'none';
    setTimeout(() => {
        quizCard.style.animation = 'fadeIn 0.3s ease';
    }, 10);
}

function updateSoalNumbers() {
    soalNumbersDiv.innerHTML = '';
    for (let i = 0; i < totalSoal; i++) {
        const btn = document.createElement('button');
        btn.textContent = i + 1;
        btn.classList.add('number-btn');
        if (i === currentIndex) {
            btn.classList.add('active');
        }
        if (userAnswers[i] !== null) {
            btn.classList.add('answered');
        }
        btn.addEventListener('click', () => {
            currentIndex = i;
            updateSoal();
        });
        soalNumbersDiv.appendChild(btn);
    }
}

function selectAnswer(selectedValue) {
    userAnswers[currentIndex] = selectedValue;
    
    const optionBtns = optionsGrid.querySelectorAll('.option-btn');
    optionBtns.forEach(btn => {
        btn.classList.remove('selected');
        if (btn.dataset.option === selectedValue) {
            btn.classList.add('selected');
        }
    });
    
    updateSoalNumbers();
    
    const answeredCount = userAnswers.filter(a => a !== null).length;
    answeredCountSpan.textContent = `${answeredCount} Terjawab`;
    
    const selectedBtn = Array.from(optionBtns).find(btn => btn.dataset.option === selectedValue);
    if (selectedBtn) {
        selectedBtn.style.transform = 'scale(0.95)';
        setTimeout(() => {
            selectedBtn.style.transform = '';
        }, 150);
    }
    
    const allAnswered = userAnswers.every(a => a !== null);
    
    if (currentIndex < totalSoal - 1) {
        setTimeout(() => {
            currentIndex++;
            updateSoal();
        }, 300);
    } else if (allAnswered && currentIndex === totalSoal - 1) {
        setTimeout(() => {
            showCompletionPopup();
        }, 300);
    }
}

function showCompletionPopup() {
    const answeredCount = userAnswers.filter(a => a !== null).length;
    alert(`🎉 Selamat! Anda telah menyelesaikan semua ${totalSoal} soal!\n\n📊 Jumlah soal terjawab: ${answeredCount}/${totalSoal}\n\n👍 Bagus! Terus tingkatkan kemampuan bahasa isyarat Anda.`);
}

function checkAndSubmit() {
    const allAnswered = userAnswers.every(a => a !== null);
    const unansweredCount = userAnswers.filter(a => a === null).length;
    
    if (allAnswered) {
        showCompletionPopup();
    } else {
        alert(`⚠️ Anda belum menyelesaikan semua soal!\n\nMasih ada ${unansweredCount} soal yang belum dijawab.\n\nSilakan selesaikan semua soal terlebih dahulu.`);
    }
}

optionsGrid.addEventListener('click', (e) => {
    const btn = e.target.closest('.option-btn');
    if (btn) {
        selectAnswer(btn.dataset.option);
    }
});

nextBtn.addEventListener('click', () => {
    if (currentIndex < totalSoal - 1) {
        currentIndex++;
        updateSoal();
    } else {
        checkAndSubmit();
    }
});

prevBtn.addEventListener('click', () => {
    if (currentIndex > 0) {
        currentIndex--;
        updateSoal();
    }
});

totalSoalSpan.textContent = totalSoal;
updateSoal();