document.addEventListener('DOMContentLoaded', function() {
    const aboutSection = document.querySelector('.ABOUT-US-VISI-MISI');
    
    if (aboutSection) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animated');
                }
            });
        }, { threshold: 0.2 });
        
        observer.observe(aboutSection);
    }
});