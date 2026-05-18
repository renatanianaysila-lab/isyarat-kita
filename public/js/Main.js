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
    
    // ========== ANIMASI UNTUK PAGE 4 - HARGA ==========
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

import { api } from './services/api-service.js';
import { runAllDemos } from './demo-api.js';

async function loadAPIExamples() {
    console.log('🚀 Loading REST API Examples...');
    
    const usersResult = await api.getUsers();
    if (usersResult.success) {
        console.log('✅ API Users Loaded:', usersResult.data.length, 'users');
        console.log('📋 First user:', usersResult.data[0]?.name);
    }
    
    const postsResult = await api.getPosts();
    if (postsResult.success) {
        console.log('✅ API Posts Loaded:', postsResult.data.length, 'posts');
    }
}

async function submitToAPI(data) {
    const result = await api.createPost({
        title: data.title || 'Feedback dari Murid',
        body: data.body || 'Materi bagus dan mudah dipahami',
        userId: 1
    });
    
    if (result.success) {
        console.log('✅ Feedback sent to API:', result.data);
        return true;
    }
    return false;
}

window.loadAPIExamples = loadAPIExamples;
window.submitToAPI = submitToAPI;
window.runAllDemos = runAllDemos;

document.addEventListener('DOMContentLoaded', function() {
    console.log('✨ API Service Ready');
    console.log('💡 Type: loadAPIExamples() to test API');
    console.log('💡 Type: runAllDemos() to run all examples');
});

loadAPIExamples();