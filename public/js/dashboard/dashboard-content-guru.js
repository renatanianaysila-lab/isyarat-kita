// ========================================
// DASHBOARD CONTENT GURU - JAVASCRIPT
// ========================================

// DOM Elements - Menggunakan selector modal yang baru
const modal = document.getElementById('uploadModal');
const tambahMateriBtn = document.getElementById('tambahMateriBtn');
const modalClose = document.querySelector('.modal-upload-close');
const cancelModalBtn = document.getElementById('cancelModalBtn');
const uploadForm = document.getElementById('uploadForm');
const fileUploadArea = document.querySelector('.file-upload-area-upload');
const fileVideo = document.getElementById('fileVideo');
const fileNameDisplay = document.getElementById('fileNameDisplay');
const toast = document.getElementById('toastNotification');

// Variabel untuk menyimpan file yang dipilih
let selectedFile = null;

// Open Modal
if (tambahMateriBtn) {
    tambahMateriBtn.addEventListener('click', function() {
        if (modal) {
            modal.style.display = 'block';
            document.body.style.overflow = 'hidden';
        }
    });
}

// Close Modal functions
function closeModal() {
    if (modal) {
        modal.style.display = 'none';
        document.body.style.overflow = 'auto';
    }
    if (uploadForm) uploadForm.reset();
    selectedFile = null;
    if (fileNameDisplay) {
        fileNameDisplay.style.display = 'none';
        fileNameDisplay.textContent = '';
    }
    if (fileUploadArea) {
        fileUploadArea.style.borderColor = '#CBD5E1';
        fileUploadArea.style.background = '#FAFBFE';
    }
}

if (modalClose) modalClose.addEventListener('click', closeModal);
if (cancelModalBtn) cancelModalBtn.addEventListener('click', closeModal);

// Close modal when clicking on overlay
const modalOverlay = document.querySelector('.modal-upload-overlay');
if (modalOverlay) {
    modalOverlay.addEventListener('click', closeModal);
}

// File upload area click handler
if (fileUploadArea) {
    fileUploadArea.addEventListener('click', function() {
        if (fileVideo) fileVideo.click();
    });
}

// Drag and drop functionality
if (fileUploadArea) {
    fileUploadArea.addEventListener('dragover', function(e) {
        e.preventDefault();
        this.style.borderColor = '#2563EB';
        this.style.background = '#EFF6FF';
    });

    fileUploadArea.addEventListener('dragleave', function(e) {
        e.preventDefault();
        this.style.borderColor = '#CBD5E1';
        this.style.background = '#F8FAFC';
    });

    fileUploadArea.addEventListener('drop', function(e) {
        e.preventDefault();
        this.style.borderColor = '#CBD5E1';
        this.style.background = '#F8FAFC';
        
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
    const maxSize = 500 * 1024 * 1024; // 500MB
    
    // Cek ekstensi file
    const allowedExtensions = ['mp4', 'mov', 'avi', 'mkv', 'webm'];
    const fileExtension = file.name.split('.').pop().toLowerCase();
    
    if (!allowedTypes.includes(file.type) && !allowedExtensions.includes(fileExtension)) {
        showToast('❌ Format file tidak didukung. Gunakan MP4, MOV, atau AVI.', 'error');
        return;
    }
    
    if (file.size > maxSize) {
        showToast('❌ Ukuran file terlalu besar. Maksimal 500MB.', 'error');
        return;
    }
    
    selectedFile = file;
    const fileSize = formatFileSize(file.size);
    if (fileNameDisplay) {
        fileNameDisplay.textContent = `📹 ${file.name} (${fileSize})`;
        fileNameDisplay.style.display = 'block';
        fileNameDisplay.style.color = '#0A7B4B';
    }
    
    showToast(`✅ File "${file.name}" siap diupload`, 'success');
}

// Format file size
function formatFileSize(bytes) {
    if (bytes === 0) return '0 Bytes';
    const k = 1024;
    const sizes = ['Bytes', 'KB', 'MB', 'GB'];
    const i = Math.floor(Math.log(bytes) / Math.log(k));
    return parseFloat((bytes / Math.pow(k, i)).toFixed(2)) + ' ' + sizes[i];
}

// Show Toast Notification
function showToast(message, type = 'info') {
    if (!toast) return;
    
    let bgColor = '#1E293B';
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

// Submit form - DUMMY UPLOAD
if (uploadForm) {
    uploadForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        const judul = document.getElementById('judulVideo');
        const deskripsi = document.getElementById('deskripsi');
        
        if (!judul || !judul.value.trim()) {
            showToast('⚠️ Masukkan judul video!', 'warning');
            return;
        }
        
        if (!selectedFile) {
            showToast('⚠️ Pilih file video terlebih dahulu!', 'warning');
            return;
        }
        
        showToast(`📤 Mengupload "${judul.value}"...`, 'info');
        
        // Simulasi upload (dummy)
        setTimeout(() => {
            let message = `✅ Berhasil! Video "${judul.value}" telah diupload`;
            if (deskripsi && deskripsi.value) {
                const descText = deskripsi.value.substring(0, 50);
                message += ` dengan deskripsi: "${descText}${deskripsi.value.length > 50 ? '...' : ''}"`;
            }
            message += ` (File: ${selectedFile.name})`;
            showToast(message, 'success');
            closeModal();
            
            // Reset selected file
            selectedFile = null;
            if (fileVideo) fileVideo.value = '';
        }, 1500);
    });
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
    console.log('✨ IsyaratKita Dashboard Guru siap!');
});