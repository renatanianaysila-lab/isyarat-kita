// Data profil (dummy storage)
let profileData = {
    fullName: '',
    linkedinUrl: '',
    emailAddress: '',
    birthDate: '',
    phoneNumber: '',
    otherSocialMedia: '',
    profilePhoto: null
};

// Data contoh
const sampleData = {
    fullName: 'Dr. Ahmad Fauzi, M.Pd',
    linkedinUrl: 'https://linkedin.com/in/ahmad-fauzi',
    emailAddress: 'ahmad.fauzi@isyaratkita.com',
    birthDate: '1985-05-15',
    phoneNumber: '+62 812-3456-7890',
    otherSocialMedia: 'https://instagram.com/ahmadfauzi.official'
};

// DOM Elements
const elements = {
    profilePhoto: document.getElementById('profilePhoto'),
    photoInput: document.getElementById('photoInput'),
    previewContainer: document.getElementById('previewContainer'),
    previewImage: document.getElementById('previewImage'),
    fullName: document.getElementById('fullName'),
    linkedinUrl: document.getElementById('linkedinUrl'),
    emailAddress: document.getElementById('emailAddress'),
    birthDate: document.getElementById('birthDate'),
    phoneNumber: document.getElementById('phoneNumber'),
    otherSocialMedia: document.getElementById('otherSocialMedia'),
    profileForm: document.getElementById('guruProfileForm'),
    notificationAlert: document.getElementById('notificationAlert')
};

// Initialize on page load
document.addEventListener('DOMContentLoaded', () => {
    loadFromLocalStorage();
    
    // Load sample data if no data exists
    if (!localStorage.getItem('guruProfile')) {
        loadSampleData();
    }
});

// Load sample data
function loadSampleData() {
    elements.fullName.value = sampleData.fullName;
    elements.linkedinUrl.value = sampleData.linkedinUrl;
    elements.emailAddress.value = sampleData.emailAddress;
    elements.birthDate.value = sampleData.birthDate;
    elements.phoneNumber.value = sampleData.phoneNumber;
    elements.otherSocialMedia.value = sampleData.otherSocialMedia;
    
    profileData = { ...sampleData, profilePhoto: null };
}

// Load from localStorage
function loadFromLocalStorage() {
    const savedData = localStorage.getItem('guruProfile');
    if (savedData) {
        profileData = JSON.parse(savedData);
        
        elements.fullName.value = profileData.fullName || '';
        elements.linkedinUrl.value = profileData.linkedinUrl || '';
        elements.emailAddress.value = profileData.emailAddress || '';
        elements.birthDate.value = profileData.birthDate || '';
        elements.phoneNumber.value = profileData.phoneNumber || '';
        elements.otherSocialMedia.value = profileData.otherSocialMedia || '';
        
        if (profileData.profilePhoto) {
            elements.profilePhoto.src = profileData.profilePhoto;
        }
    }
}

// Show notification
function showNotification(message, type = 'success') {
    elements.notificationAlert.className = `notification notification-${type}`;
    elements.notificationAlert.innerHTML = message;
    elements.notificationAlert.style.display = 'block';
    
    setTimeout(() => {
        elements.notificationAlert.style.display = 'none';
    }, 3000);
}

// Trigger file upload
function triggerFileUpload() {
    elements.photoInput.click();
}

// Handle photo upload
elements.photoInput.addEventListener('change', function(e) {
    const file = e.target.files[0];
    
    if (!file) return;
    
    // Validate file type
    const validTypes = ['image/jpeg', 'image/png', 'image/jpg'];
    if (!validTypes.includes(file.type)) {
        showNotification('Format file harus JPG atau PNG!', 'error');
        return;
    }
    
    // Validate file size (max 2MB)
    if (file.size > 2 * 1024 * 1024) {
        showNotification('Ukuran file maksimal 2MB!', 'error');
        return;
    }
    
    const reader = new FileReader();
    reader.onload = function(e) {
        const photoUrl = e.target.result;
        elements.profilePhoto.src = photoUrl;
        profileData.profilePhoto = photoUrl;
        
        // Show preview
        elements.previewImage.src = photoUrl;
        elements.previewContainer.style.display = 'block';
        
        // Save to localStorage
        saveToLocalStorage();
        
        showNotification('Foto berhasil diupload! Klik Simpan untuk menyimpan permanen', 'success');
        
        // Hide preview after 2 seconds
        setTimeout(() => {
            elements.previewContainer.style.display = 'none';
        }, 2000);
    };
    reader.readAsDataURL(file);
});

// Save to localStorage
function saveToLocalStorage() {
    localStorage.setItem('guruProfile', JSON.stringify(profileData));
}

// Validate form
function validateForm(data) {
    if (!data.fullName.trim()) {
        showNotification('Nama lengkap harus diisi!', 'error');
        return false;
    }
    
    if (!data.emailAddress.trim()) {
        showNotification('Email harus diisi!', 'error');
        return false;
    }
    
    if (!data.emailAddress.includes('@')) {
        showNotification('Email tidak valid!', 'error');
        return false;
    }
    
    if (data.linkedinUrl && !data.linkedinUrl.startsWith('https://')) {
        showNotification('LinkedIn URL harus dimulai dengan https://', 'error');
        return false;
    }
    
    return true;
}

// Handle form submit
elements.profileForm.addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Collect form data
    const formData = {
        fullName: elements.fullName.value,
        linkedinUrl: elements.linkedinUrl.value,
        emailAddress: elements.emailAddress.value,
        birthDate: elements.birthDate.value,
        phoneNumber: elements.phoneNumber.value,
        otherSocialMedia: elements.otherSocialMedia.value,
        profilePhoto: profileData.profilePhoto || elements.profilePhoto.src
    };
    
    // Validate
    if (!validateForm(formData)) {
        return;
    }
    
    // Update profileData
    profileData = formData;
    
    // Save to localStorage
    saveToLocalStorage();
    
    // Show success notification
    showNotification('✅ Profil berhasil disimpan! Data tersimpan di localStorage.', 'success');
    
    // Log for debugging
    console.log('Data Profil Tersimpan:', profileData);
    
    // Optional: Send to server
    // sendToServer(formData);
});

// Send to server (Laravel) - Uncomment when needed
function sendToServer(data) {
    const submitButton = document.querySelector('.save-button');
    submitButton.classList.add('loading');
    submitButton.textContent = '⏳ MENYIMPAN...';
    
    fetch('/guru/profile/update', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
        },
        body: JSON.stringify(data)
    })
    .then(response => response.json())
    .then(data => {
        console.log('Server response:', data);
        showNotification('Data berhasil disimpan ke server!', 'success');
        submitButton.classList.remove('loading');
        submitButton.textContent = '💾 SIMPAN PERUBAHAN';
    })
    .catch(error => {
        console.log('Mode dummy: data hanya disimpan di localStorage');
        submitButton.classList.remove('loading');
        submitButton.textContent = '💾 SIMPAN PERUBAHAN';
    });
}

// Reset form (optional helper function)
window.resetProfileForm = function() {
    if (confirm('Yakin ingin mereset semua data?')) {
        localStorage.removeItem('guruProfile');
        loadSampleData();
        elements.profilePhoto.src = '/images/default-avatar.png';
        profileData.profilePhoto = null;
        showNotification('Form telah direset!', 'success');
    }
};

// Console log
console.log('✨ Guru Profile - Mode Dummy Active ✨');
console.log('📦 Data akan tersimpan di localStorage browser');