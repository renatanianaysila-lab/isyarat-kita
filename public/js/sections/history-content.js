
document.addEventListener('DOMContentLoaded', function() {
    
    // ===== ANIMASI CARD =====
    const cards = document.querySelectorAll('.history-card');
    
    cards.forEach(card => {
        card.addEventListener('click', function(e) {
            const link = this.getAttribute('href');
            if (link && link !== '#') {
                console.log('Navigasi ke:', link);
            }
        });
        
        card.addEventListener('touchstart', function() {
            this.style.transform = 'scale(0.98)';
        });
        
        card.addEventListener('touchend', function() {
            this.style.transform = '';
        });
    });
    
    // ===== ANIMASI BACK BUTTON =====
    const backButton = document.querySelector('.history-back');
    if (backButton) {
        backButton.addEventListener('click', function() {
            // Animasi klik
            this.style.transform = 'scale(0.9)';
            setTimeout(() => {
                this.style.transform = '';
            }, 150);
        });
    }
    console.log('History page loaded successfully');
});