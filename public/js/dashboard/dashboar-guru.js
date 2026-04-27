/**
 * DASHBOARD GURU - JavaScript
 * Menangani interaksi di halaman dashboard guru
 */

document.addEventListener('DOMContentLoaded', function() {
    // Tombol "Tambah Materi"
    const tambahMateriBtn = document.querySelector('.btn-large');
    if (tambahMateriBtn) {
        tambahMateriBtn.addEventListener('click', function() {
            alert('Fitur tambah materi akan segera hadir!');
        });
    }

    // Tombol notifikasi
    const notifBtn = document.querySelector('.icon-btn:first-child');
    if (notifBtn) {
        notifBtn.addEventListener('click', function() {
            alert('Tidak ada notifikasi baru');
        });
    }

    // Tombol bantuan
    const helpBtn = document.querySelectorAll('.icon-btn')[1];
    if (helpBtn) {
        helpBtn.addEventListener('click', function() {
            alert('Hubungi support: support@isyaratkita.com');
        });
    }

    // Profil mini
    const profileMini = document.querySelector('.profile-mini');
    if (profileMini) {
        profileMini.addEventListener('click', function() {
            window.location.href = '/dashboard-guru?menu=profil';
        });
    }

    // Logout confirmation
    const logoutBtn = document.querySelector('.menu-item.danger');
    if (logoutBtn) {
        logoutBtn.addEventListener('click', function(e) {
            if (!confirm('Apakah Anda yakin ingin keluar?')) {
                e.preventDefault();
            }
        });
    }
});