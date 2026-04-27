if (document.getElementById('profileName')) {
    
    // Data profil (dummy)
    let guruProfile = {
        name: 'Renata Nian Naysila',
        email: 'renata@isyaratkita.com',
        phone: '+62 812-3456-7890',
        birthDate: '1995-05-15',
        birthDateFormatted: '15 Mei 1995',
        linkedin: 'linkedin.com/in/renata',
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

    // Load data dari localStorage
    function loadProfileData() {
        const saved = localStorage.getItem('guru_profile_data');
        if (saved) {
            const data = JSON.parse(saved);
            guruProfile = { ...guruProfile, ...data };
        }
        
        // Apply ke UI
        const nameEl = document.getElementById('profileName');
        if (nameEl) nameEl.textContent = guruProfile.name || 'Renata Nian Naysila';
        
        const descEl = document.getElementById('profileDescription');
        if (descEl) descEl.textContent = guruProfile.description || '';
        
        const emailEl = document.getElementById('profileEmail');
        if (emailEl) emailEl.textContent = guruProfile.email || '';
        
        const phoneEl = document.getElementById('profilePhone');
        if (phoneEl) phoneEl.textContent = guruProfile.phone || '';
        
        const birthEl = document.getElementById('profileBirthDate');
        if (birthEl) birthEl.textContent = guruProfile.birthDateFormatted || '';
        
        const linkedinEl = document.getElementById('profileLinkedin');
        if (linkedinEl) linkedinEl.textContent = guruProfile.linkedin || '';
        
        const igEl = document.getElementById('profileInstagram');
        if (igEl) igEl.textContent = guruProfile.instagram || '';
        
        // Stats
        const muridEl = document.getElementById('totalMurid');
        if (muridEl) muridEl.textContent = guruProfile.stats?.murid || 0;
        
        const videoEl = document.getElementById('totalVideo');
        if (videoEl) videoEl.textContent = guruProfile.stats?.video || 0;
        
        const kuisEl = document.getElementById('totalKuis');
        if (kuisEl) kuisEl.textContent = guruProfile.stats?.kuis || 0;
        
        const ratingEl = document.getElementById('totalRating');
        if (ratingEl) ratingEl.textContent = guruProfile.stats?.rating || 0;
        
        // Photo
        const photoEl = document.getElementById('profilePhotoView');
        if (photoEl && guruProfile.photo) {
            photoEl.src = guruProfile.photo;
        }
    }

    loadProfileData();
    console.log('✨ Halaman Profil Guru - Siap');
}