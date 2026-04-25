/**
 * SIDEBAR GURU - JavaScript
 * Menangani active menu dan interaksi sidebar
 */

document.addEventListener('DOMContentLoaded', function() {
    const currentUrl = window.location.href;
    const menuItems = document.querySelectorAll('.menu-item');

    // Fungsi untuk set active menu berdasarkan URL
    function setActiveMenu() {
        menuItems.forEach(item => {
            const href = item.getAttribute('href');
            if (href && href !== '#' && currentUrl.includes(href)) {
                item.classList.add('active');
            } else if (href === '#' && item.dataset.menu === getCurrentMenuFromUrl()) {
                item.classList.add('active');
            }
        });
    }

    // Ambil parameter menu dari URL
    function getCurrentMenuFromUrl() {
        const urlParams = new URLSearchParams(window.location.search);
        return urlParams.get('menu');
    }

    // Efek hover dan klik pada menu
    menuItems.forEach(item => {
        item.addEventListener('click', function(e) {
            // Hapus active dari semua menu
            menuItems.forEach(menu => menu.classList.remove('active'));
            // Tambah active ke menu yang diklik
            this.classList.add('active');
        });
    });

    // Inisialisasi active menu
    setActiveMenu();

    // Untuk menu yang masih href="#", beri alert
    const disabledMenus = document.querySelectorAll('.menu-item[href="#"]');
    disabledMenus.forEach(menu => {
        menu.addEventListener('click', function(e) {
            e.preventDefault();
            alert('Fitur ini sedang dalam pengembangan!');
        });
    });
});