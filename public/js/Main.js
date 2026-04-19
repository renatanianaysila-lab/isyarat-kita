// Animasi untuk ABOUT-US-VISI-MISI
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
});

// Script untuk tombol Gabung
document.addEventListener("DOMContentLoaded", function () {
    const gabungBtn = document.getElementById("gabungBtn");

    if (gabungBtn) {
        gabungBtn.addEventListener("click", function () {
            window.location.href = "/register";
        });
    }
});