// DOM Elements
const modal = document.getElementById('uploadModal');
const tambahMateriBtn = document.getElementById('tambahMateriBtn');
const modalClose = document.querySelector('.modal-close');
const cancelModalBtn = document.getElementById('cancelModalBtn');
const uploadForm = document.getElementById('uploadForm');
const fileUploadArea = document.getElementById('fileUploadArea');
const fileVideo = document.getElementById('fileVideo');
const fileNameDisplay = document.getElementById('fileNameDisplay');
const toast = document.getElementById('toastNotification');

// Variabel untuk menyimpan file yang dipilih
let selectedFile = null;

// Open Modal
if (tambahMateriBtn) {
    tambahMateriBtn.addEventListener('click', function() {
        modal.style.display = 'block';
        document.body.style.overflow = 'hidden';
    });
}

// Close Modal functions
function closeModal() {
    modal.style.display = 'none';
    document.body.style.overflow = 'auto';
    uploadForm.reset();
    selectedFile = null;
    fileNameDisplay.style.display = 'none';
    fileNameDisplay.textContent = '';
    if (fileUploadArea) {
        fileUploadArea.style.borderColor = '#CBD5E1';
        fileUploadArea.style.background = '#FAFBFE';
    }
}

if (modalClose) modalClose.addEventListener('click', closeModal);
if (cancelModalBtn) cancelModalBtn.addEventListener('click', closeModal);

// Close modal when clicking outside
window.addEventListener('click', function(e) {
    if (e.target === modal) {
        closeModal();
    }
});

// File upload area click handler
if (fileUploadArea) {
    fileUploadArea.addEventListener('click', function() {
        fileVideo.click();
    });
}

// Drag and drop functionality
if (fileUploadArea) {
    fileUploadArea.addEventListener('dragover', function(e) {
        e.preventDefault();
        this.style.borderColor = '#2D3C6A';
        this.style.background = '#F0F3FE';
    });

    fileUploadArea.addEventListener('dragleave', function(e) {
        e.preventDefault();
        this.style.borderColor = '#CBD5E1';
        this.style.background = '#FAFBFE';
    });

    fileUploadArea.addEventListener('drop', function(e) {
        e.preventDefault();
        this.style.borderColor = '#CBD5E1';
        this.style.background = '#FAFBFE';
        
        const files = e.dataTransfer.files;
        if (files.length > 0) {
            handleFileSelection(files[0]);
        }
    });
}

// File input change handler
if (fileVideo) {
    fileVideo.addEventListener('change', function(e) {
        if (this.files.length > 0) {
            handleFileSelection(this.files[0]);
        }
    });
}

// Handle file selection
function handleFileSelection(file) {
    const allowedTypes = ['video/mp4', 'video/quicktime', 'video/x-msvideo', 'video/mov', 'video/avi'];
    const maxSize = 500 * 1024 * 1024;
    
    if (!allowedTypes.includes(file.type) && !file.name.match(/\.(mp4|mov|avi|mkv|webm)$/i)) {
        showToast('❌ Format file tidak didukung. Gunakan MP4, MOV, atau AVI.', 'error');
        return;
    }
    
    if (file.size > maxSize) {
        showToast('❌ Ukuran file terlalu besar. Maksimal 500MB.', 'error');
        return;
    }
    
    selectedFile = file;
    const fileSize = formatFileSize(file.size);
    fileNameDisplay.textContent = `📹 ${file.name} (${fileSize})`;
    fileNameDisplay.style.display = 'block';
    fileNameDisplay.style.color = '#0A7B4B';
    
    showToast(`✅ File "${file.name}" siap diupload`, 'success');
}

function formatFileSize(bytes) {
    if (bytes === 0) return '0 Bytes';
    const k = 1024;
    const sizes = ['Bytes', 'KB', 'MB', 'GB'];
    const i = Math.floor(Math.log(bytes) / Math.log(k));
    return parseFloat((bytes / Math.pow(k, i)).toFixed(2)) + ' ' + sizes[i];
}

// Submit form - DUMMY UPLOAD
if (uploadForm) {
    uploadForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        const judul = document.getElementById('judulVideo').value;
        const deskripsi = document.getElementById('deskripsi').value;
        
        if (!judul) {
            showToast('⚠️ Masukkan judul video!', 'warning');
            return;
        }
        
        if (!selectedFile) {
            showToast('⚠️ Pilih file video terlebih dahulu!', 'warning');
            return;
        }
        
        showToast(`📤 Mengupload "${judul}"...`, 'info');
        
        setTimeout(() => {
            let message = `✅ Berhasil! Video "${judul}" telah diupload`;
            if (deskripsi) {
                message += ` dengan deskripsi: "${deskripsi.substring(0, 50)}${deskripsi.length > 50 ? '...' : ''}"`;
            }
            message += ` (File: ${selectedFile.name})`;
            showToast(message, 'success');
            closeModal();
        }, 1500);
    });
}

// Show Toast Notification
function showToast(message, type = 'info') {
    if (!toast) return;
    
    let bgColor = '#1A1F36';
    if (type === 'success') bgColor = '#0A7B4B';
    if (type === 'error') bgColor = '#DC2626';
    if (type === 'warning') bgColor = '#D97706';
    
    toast.style.background = bgColor;
    toast.textContent = message;
    toast.classList.add('show');
    
    setTimeout(() => {
        toast.classList.remove('show');
    }, 3000);
}

// Tombol Lihat Semua Aktivitas
const lihatAktivitasBtn = document.getElementById('lihatSemuaAktivitasBtn');
if (lihatAktivitasBtn) {
    lihatAktivitasBtn.addEventListener('click', function(e) {
        e.preventDefault();
        showToast('📋 Menampilkan semua aktivitas murid', 'info');
    });
}

// Tombol Lihat Semua Video
const lihatVideoBtn = document.getElementById('lihatSemuaVideoBtn');
if (lihatVideoBtn) {
    lihatVideoBtn.addEventListener('click', function(e) {
        e.preventDefault();
        showToast('🎬 Menampilkan semua video pembelajaran', 'info');
    });
}

// Tombol Lihat Semua Rating
const lihatRatingBtn = document.getElementById('lihatSemuaRatingBtn');
if (lihatRatingBtn) {
    lihatRatingBtn.addEventListener('click', function(e) {
        e.preventDefault();
        showToast('⭐ Menampilkan semua ulasan murid', 'info');
    });
}

// Inisialisasi
document.addEventListener('DOMContentLoaded', function() {
    console.log('IsyaratKita Dashboard siap!');
});