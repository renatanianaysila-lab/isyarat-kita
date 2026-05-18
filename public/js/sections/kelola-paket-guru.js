document.addEventListener('DOMContentLoaded', function() {
    
    // ========== FILTER STATUS ==========
    const filterSelect = document.querySelector('.paket-select-box select');
    const tableFootDiv = document.querySelector('.paket-table-foot div:first-child');
    
    function filterTable() {
        if (!filterSelect) return;
        
        const selectedStatus = filterSelect.value;
        const allRows = document.querySelectorAll('.paket-table tbody tr');
        let visibleCount = 0;
        
        allRows.forEach(row => {
            const statusSpan = row.querySelector('.paket-badge');
            if (!statusSpan) return;
            
            const statusText = statusSpan.textContent.trim();
            let show = true;
            
            if (selectedStatus === 'Aktif') {
                show = (statusText === 'Aktif');
            } else if (selectedStatus === 'Non Aktif') {
                show = (statusText === 'Tidak Aktif');
            }
            
            if (show) {
                row.style.display = '';
                visibleCount++;
            } else {
                row.style.display = 'none';
            }
        });
        
        if (tableFootDiv) {
            tableFootDiv.innerHTML = `Menampilkan ${visibleCount} dari ${allRows.length} pengguna`;
        }
    }
    
    if (filterSelect) {
        filterSelect.addEventListener('change', filterTable);
    }
    
    // ========== FUNGSI UNTUK MENDAPATKAN DATA DARI BARIS ==========
    function getRowData(row) {
        // Ambil nama dari .paket-name
        const nameEl = row.querySelector('.paket-name');
        const name = nameEl ? nameEl.textContent : '';
        
        // Ambil email dari .paket-class
        const emailEl = row.querySelector('.paket-class');
        const email = emailEl ? emailEl.textContent : '';
        
        // Ambil video dari cell ke-2 (index 1)
        const videoCell = row.cells[1];
        const video = videoCell ? videoCell.textContent : '';
        
        // Ambil kuis dari cell ke-3 (index 2)
        const quizCell = row.cells[2];
        const quiz = quizCell ? quizCell.textContent : '';
        
        // Ambil harga dari cell ke-4 (index 3)
        const hargaCell = row.cells[3];
        const harga = hargaCell ? hargaCell.textContent : '';
        
        // Ambil status
        const statusSpan = row.querySelector('.paket-badge');
        const status = statusSpan ? statusSpan.textContent.trim() : '';
        
        return { name, email, video, quiz, harga, status, nameEl, emailEl, videoCell, quizCell, hargaCell, statusSpan };
    }
    
    // ========== FUNGSI LIAT (VIEW) ==========
    function viewUser(row) {
        const data = getRowData(row);
        alert(`👤 DATA PENGGUNA\n\n📛 Nama: ${data.name}\n📧 Email: ${data.email}\n🎬 Video: ${data.video}\n📝 Kuis: ${data.quiz}\n💰 Harga: ${data.harga}\n📊 Status: ${data.status}`);
    }
    
    // ========== FUNGSI EDIT ==========
    function editUser(row) {
        const data = getRowData(row);
        
        const newName = prompt('Edit Nama:', data.name);
        if (newName && newName.trim() && data.nameEl) {
            data.nameEl.textContent = newName.trim();
        }
        
        const newEmail = prompt('Edit Email:', data.email);
        if (newEmail && newEmail.trim() && data.emailEl) {
            data.emailEl.textContent = newEmail.trim();
        }
        
        const newVideo = prompt('Edit Jumlah Video:', data.video);
        if (newVideo && !isNaN(newVideo) && data.videoCell) {
            data.videoCell.textContent = newVideo;
        }
        
        const newQuiz = prompt('Edit Jumlah Kuis:', data.quiz);
        if (newQuiz && !isNaN(newQuiz) && data.quizCell) {
            data.quizCell.textContent = newQuiz;
        }
        
        const newHarga = prompt('Edit Harga (contoh: 30000):', data.harga.replace('Rp', '').replace(/\./g, '').trim());
        if (newHarga && !isNaN(newHarga) && data.hargaCell) {
            data.hargaCell.textContent = `Rp${parseInt(newHarga).toLocaleString('id-ID')}`;
        }
        
        const newStatus = confirm('Ubah status? (OK = Aktif, Cancel = Tidak Aktif)');
        if (data.statusSpan) {
            if (newStatus) {
                data.statusSpan.textContent = 'Aktif';
                data.statusSpan.className = 'paket-badge active';
                data.statusSpan.style.cssText = '';
            } else {
                data.statusSpan.textContent = 'Tidak Aktif';
                data.statusSpan.className = 'paket-badge';
                data.statusSpan.style.cssText = 'background:#FFF3E0;color:#B45B0A;';
            }
        }
        
        alert(`✅ Data "${newName || data.name}" berhasil diperbarui!`);
        filterTable();
    }
    
    // ========== FUNGSI HAPUS ==========
    function deleteUser(row) {
        const name = row.querySelector('.paket-name').textContent;
        if (confirm(`Apakah Anda yakin ingin menghapus pengguna "${name}"?`)) {
            row.remove();
            const newTotal = document.querySelectorAll('.paket-table tbody tr').length;
            const visible = document.querySelectorAll('.paket-table tbody tr:not([style*="display: none"])').length;
            if (tableFootDiv) {
                tableFootDiv.innerHTML = `Menampilkan ${visible} dari ${newTotal} pengguna`;
            }
            alert(`✅ Pengguna "${name}" berhasil dihapus!`);
        }
    }
    
    // ========== PASANG EVENT KE SEMUA TOMBOL ==========
    function attachEvents() {
        const allRows = document.querySelectorAll('.paket-table tbody tr');
        
        allRows.forEach(row => {
            const buttons = row.querySelectorAll('.paket-action-btn');
            
            if (buttons[0]) {
                buttons[0].onclick = function(e) {
                    e.preventDefault();
                    viewUser(row);
                };
            }
            if (buttons[1]) {
                buttons[1].onclick = function(e) {
                    e.preventDefault();
                    editUser(row);
                };
            }
            if (buttons[2]) {
                buttons[2].onclick = function(e) {
                    e.preventDefault();
                    deleteUser(row);
                };
            }
        });
    }
    
    // ========== TAMBAH PENGGUNA BARU ==========
    const tambahBtn = document.querySelector('.paket-btn');
    if (tambahBtn) {
        tambahBtn.onclick = function() {
            const name = prompt('Masukkan Nama Lengkap:');
            if (!name || !name.trim()) return;
            
            const email = prompt('Masukkan Email:');
            if (!email || !email.trim()) return;
            
            const video = prompt('Masukkan Jumlah Video:', '0');
            const quiz = prompt('Masukkan Jumlah Kuis:', '0');
            const statusConfirm = confirm('Status Aktif? (OK = Aktif, Cancel = Tidak Aktif)');
            const status = statusConfirm ? 'Aktif' : 'Tidak Aktif';
            
            const tbody = document.querySelector('.paket-table tbody');
            if (!tbody) return;
            
            const randomThumb = ['👦', '👩', '👨', '👧'][Math.floor(Math.random() * 4)];
            const randomBg = ['#CFE8FF', '#FFD7E7', '#DDE7FF', '#DBEAFE', '#FBCFE8'][Math.floor(Math.random() * 5)];
            const randomColor = ['#1D4ED8', '#DB2777', '#4338CA', '#2563EB', '#BE185D'][Math.floor(Math.random() * 5)];
            
            const newRow = document.createElement('tr');
            newRow.innerHTML = `
                <tr>
                    <td>
                        <div class="paket-info">
                            <div class="paket-thumb" style="background:${randomBg};color:${randomColor};">${randomThumb}</div>
                            <div>
                                <div class="paket-name">${escapeHtml(name.trim())}</div>
                                <div class="paket-class">${escapeHtml(email.trim())}</div>
                            </div>
                        </div>
                     </div></td>
                    <td>${video || 0}</div></td>
                    <td>${quiz || 0}</div></td>
                    <td>Rp30.000</div></td>
                    <td><span class="paket-badge ${status === 'Aktif' ? 'active' : ''}" style="${status !== 'Aktif' ? 'background:#FFF3E0;color:#B45B0A;' : ''}">${status}</span></div></td>
                    <td>
                        <div class="paket-actions">
                            <button class="paket-action-btn">👁</button>
                            <button class="paket-action-btn">✏</button>
                            <button class="paket-action-btn">🗑</button>
                        </div>
                     </div></td>
                </tr>
            `;
            
            tbody.appendChild(newRow);
            attachEvents();
            filterTable();
            
            alert(`✅ Pengguna "${name}" berhasil ditambahkan!`);
        };
    }
    
    function escapeHtml(str) {
        if (!str) return '';
        return str.replace(/[&<>]/g, function(m) {
            if (m === '&') return '&amp;';
            if (m === '<') return '&lt;';
            if (m === '>') return '&gt;';
            return m;
        });
    }
    
    // ========== INITIAL ATTACH DAN FILTER ==========
    attachEvents();
    filterTable();
    
    console.log('✅ Fitur interaktif siap digunakan!');
    
});

import { api } from './services/api-service.js';

async function syncPaketToAPI() {
    const rows = document.querySelectorAll('.paket-table tbody tr');
    const paketData = [];
    
    rows.forEach(row => {
        const nameEl = row.querySelector('.paket-name');
        const emailEl = row.querySelector('.paket-class');
        const statusSpan = row.querySelector('.paket-badge');
        
        if (nameEl && emailEl) {
            paketData.push({
                name: nameEl.textContent,
                email: emailEl.textContent,
                status: statusSpan?.textContent.trim() || 'Aktif'
            });
        }
    });
    
    const result = await api.createPost({
        title: 'Paket Data Sync',
        body: JSON.stringify(paketData),
        userId: 1
    });
    
    if (result.success) {
        console.log('✅ Paket data synced to API:', paketData.length, 'items');
    }
}

async function loadPaketFromAPI() {
    const result = await api.getPosts();
    if (result.success) {
        console.log('📦 Paket data from API:', result.data.length);
        return result.data;
    }
    return [];
}

window.syncPaketToAPI = syncPaketToAPI;
window.loadPaketFromAPI = loadPaketFromAPI;