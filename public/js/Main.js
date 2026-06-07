document.addEventListener('DOMContentLoaded', function() {
    
    // ========== ANIMASI ABOUT ==========
    const aboutSection = document.querySelector('.ABOUT-US-VISI-MISI');
    if (aboutSection) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animated');
                } else {
                    entry.target.classList.remove('animated');
                }
            });
        }, { threshold: 0.3 });
        observer.observe(aboutSection);
    }
    
    // ========== ANIMASI FITUR ==========
    const fiturSection = document.querySelector('.FITUR-HARGA-PAKET');
    if (fiturSection) {
        const fiturObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animated');
                } else {
                    entry.target.classList.remove('animated');
                }
            });
        }, { threshold: 0.3 });
        fiturObserver.observe(fiturSection);
    }
    
    // ========== ANIMASI HARGA ==========
    const hargaSection = document.querySelector('.PAKET-PAKET');
    if (hargaSection) {
        const hargaObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animated');
                } else {
                    entry.target.classList.remove('animated');
                }
            });
        }, { threshold: 0.3 });
        hargaObserver.observe(hargaSection);
    }
    
    // ========== SMOOTH SCROLL ==========
    const tentangSection = document.getElementById('tentang');
    const kenaliBtn = document.querySelector('.KENALI');
    const tentangNavLink = document.querySelector('a[href="#tentang"]');
    
    function scrollToAbout(e) {
        e.preventDefault();
        if (tentangSection) {
            tentangSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    }
    
    if (kenaliBtn) kenaliBtn.addEventListener("click", scrollToAbout);
    if (tentangNavLink) tentangNavLink.addEventListener("click", scrollToAbout);
    
    // ========== TOMBOL GABUNG ==========
    const gabungBtn = document.getElementById("gabungBtn");
    if (gabungBtn) {
        gabungBtn.addEventListener("click", function () {
            window.location.href = "/register";
        });
    }
});