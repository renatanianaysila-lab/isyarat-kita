/**
 * History Page JavaScript
 * Menangani interaksi pada halaman riwayat belajar
 */

document.addEventListener('DOMContentLoaded', function() {
    
    // ===== ANIMASI CARD =====
    const cards = document.querySelectorAll('.history-card');
    
    cards.forEach(card => {
        // Efek klik pada card (sudah otomatis karena <a>)
        card.addEventListener('click', function(e) {
            // Jika card adalah link, biarkan default behavior
            const link = this.getAttribute('href');
            if (link && link !== '#') {
                // Tidak perlu preventDefault, biarkan navigasi berjalan
                console.log('Navigasi ke:', link);
            }
        });
        
        // Efek tambahan saat card disentuh (mobile)
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