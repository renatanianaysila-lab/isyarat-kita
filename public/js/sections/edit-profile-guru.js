if (document.getElementById('editName')) {
    
    // Data profil default
    let profileData = {
        name: 'Renata Nian Naysila',
        email: 'renata@isyaratkita.com',
        phone: '+62 812-3456-7890',
        birthDate: '1995-05-15',
        linkedin: 'https://linkedin.com/in/renata-naysila',
        instagram: '@renata_bisindo',
        description: 'Saya adalah pendidik yang berdedikasi untuk membantu siswa belajar bahasa isyarat dengan cara yang menyenangkan dan mudah dipahami.',
        photo: null,
        stats: {
            murid: 1234,
            video: 32,
            kuis: 28,
            rating: 4.8
        }
    };

    // Toast function
    function showToast(message, isError = false) {
        let toast = document.getElementById('toastNotification');
        if (!toast) return;
        toast.textContent = message;
        toast.className = 'guru-edit-toast' + (isError ? ' error' : '');
        toast.classList.add('show');
        setTimeout(() => toast.classList.remove('show'), 3000);
    }

    // Format date (YYYY-MM-DD to DD Month YYYY)
    function formatDate(dateString) {
        if (!dateString) return '';
        const months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
        const [year, month, day] = dateString.split('-');
        return `${parseInt(day)} ${months[parseInt(month) - 1]} ${year}`;
    }

    // Load data dari localStorage ke form
    function loadDataToForm() {
        const saved = localStorage.getItem('guru_profile_data');
        if (saved) {
            const data = JSON.parse(saved);
            profileData = { ...profileData, ...data };
        }
        
        const nameEl = document.getElementById('editName');
        if (nameEl) nameEl.value = profileData.name || '';
        
        const descEl = document.getElementById('editDescription');
        if (descEl) descEl.value = profileData.description || '';
        
        const emailEl = document.getElementById('editEmail');
        if (emailEl) emailEl.value = profileData.email || '';
        
        const phoneEl = document.getElementById('editPhone');
        if (phoneEl) phoneEl.value = profileData.phone || '';
        
        const birthEl = document.getElementById('editBirthDate');
        if (birthEl) birthEl.value = profileData.birthDate || '';
        
        const linkedinEl = document.getElementById('editLinkedin');
        if (linkedinEl) linkedinEl.value = profileData.linkedin || '';
        
        const igEl = document.getElementById('editInstagram');
        if (igEl) igEl.value = profileData.instagram || '';
        
        const photoEl = document.getElementById('editProfilePhoto');
        if (photoEl && profileData.photo) {
            photoEl.src = profileData.photo;
        }
    }

    // Save data dari form ke localStorage
    function saveProfileData() {
        const birthDate = document.getElementById('editBirthDate').value;
        const formattedDate = formatDate(birthDate);
        
        const updatedData = {
            name: document.getElementById('editName').value,
            description: document.getElementById('editDescription').value,
            email: document.getElementById('editEmail').value,
            phone: document.getElementById('editPhone').value,
            birthDate: birthDate,
            birthDateFormatted: formattedDate,
            linkedin: document.getElementById('editLinkedin').value,
            instagram: document.getElementById('editInstagram').value,
            photo: profileData.photo,
            stats: profileData.stats
        };
        
        // Validasi
        if (!updatedData.name) {
            showToast('Nama lengkap harus diisi!', true);
            return false;
        }
        
        if (!updatedData.email) {
            showToast('Email harus diisi!', true);
            return false;
        }
        
        if (!updatedData.email.includes('@')) {
            showToast('Email tidak valid!', true);
            return false;
        }
        
        // Simpan ke localStorage
        localStorage.setItem('guru_profile_data', JSON.stringify(updatedData));
        profileData = updatedData;
        
        return true;
    }

    // Upload foto
    function setupPhotoUpload() {
        const photoInput = document.getElementById('photoFileInput');
        const profilePhoto = document.getElementById('editProfilePhoto');
        const uploadBtn = document.getElementById('uploadPhotoBtn');
        
        if (!uploadBtn || !photoInput) return;
        
        uploadBtn.addEventListener('click', () => photoInput.click());
        
        photoInput.addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (!file) return;
            
            const validTypes = ['image/jpeg', 'image/png', 'image/jpg'];
            if (!validTypes.includes(file.type)) {
                showToast('Format harus JPG atau PNG!', true);
                return;
            }
            
            if (file.size > 2 * 1024 * 1024) {
                showToast('Ukuran maksimal 2MB!', true);
                return;
            }
            
            const reader = new FileReader();
            reader.onload = function(e) {
                const url = e.target.result;
                profilePhoto.src = url;
                profileData.photo = url;
                showToast('Foto berhasil diupload');
            };
            reader.readAsDataURL(file);
        });
    }

    // Submit form
    function setupFormSubmit() {
        const form = document.getElementById('editProfileForm');
        if (!form) return;
        
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            if (saveProfileData()) {
                showToast('✅ Profil berhasil disimpan!');
                // Redirect ke halaman profil setelah 1.5 detik
                setTimeout(() => {
                    window.location.href = '/dashboard-guru?menu=profile';
                }, 1500);
            }
        });
    }

    // Initialize
    loadDataToForm();
    setupPhotoUpload();
    setupFormSubmit();
    
    console.log('✨ Halaman Edit Profil Guru - Siap');
    console.log('💾 Data akan disimpan di localStorage browser');
}