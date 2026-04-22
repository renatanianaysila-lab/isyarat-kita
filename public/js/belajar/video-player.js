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
        objectives: []
    },
    3: {
        title: 'Salam & Sapaan',
        meta: 'pertemuan 3 · 18 menit',
        desc: '',
        objectives: []
    },
    4: {
        title: 'Percakapan sehari-hari',
        meta: 'pertemuan 4 · 25 menit',
        desc: '',
        objectives: []
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
    const timeSpan = document.querySelector('.control-left span');
    if (timeSpan) {
        timeSpan.textContent = timeStr;
    }
});

// Inisialisasi
document.addEventListener('DOMContentLoaded', function() {
    // Set time display element
    const timeSpan = document.querySelector('.control-left span');
    if (timeSpan) {
        timeSpan.classList.add('time-display');
    }
});