// Animasi untuk ABOUT-US-VISI-MISI (bisa diulang)
document.addEventListener('DOMContentLoaded', function() {
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
    
    // ========== ANIMASI UNTUK PAGE 3 - FITUR ==========
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
    
    // ========== SMOOTH SCROLL KE PAGE 2 ==========
    const tentangSection = document.getElementById('tentang');
    
    const kenaliBtn = document.querySelector('.KENALI');
    const tentangNavLink = document.querySelector('a[href="#tentang"]');
    
    function scrollToAbout(e) {
        e.preventDefault();
        if (tentangSection) {
            tentangSection.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    }
    
    if (kenaliBtn) {
        kenaliBtn.addEventListener("click", scrollToAbout);
    }
    
    if (tentangNavLink) {
        tentangNavLink.addEventListener("click", scrollToAbout);
    }
    
    // ========== TOMBOL GABUNG KE REGISTER ==========
    const gabungBtn = document.getElementById("gabungBtn");
    if (gabungBtn) {
        gabungBtn.addEventListener("click", function () {
            window.location.href = "/register";
        });
    }
});