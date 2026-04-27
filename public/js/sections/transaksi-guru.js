document.addEventListener('DOMContentLoaded', function() {
    const pemasukanData = [
        { id: 1, nama: 'Andi Saputra', paket: 'Paket Dasar - Alfabet', nominal: 30000, tanggal: '12 Okt 2024', avatar: '👦', bgColor: '#CFE8FF' },
        { id: 2, nama: 'Siti Nurhaliza', paket: 'Paket Profesional', nominal: 30000, tanggal: '10 Okt 2024', avatar: '👩', bgColor: '#FFD7E7' },
        { id: 3, nama: 'Budi Santoso', paket: 'Paket Dasar - Angka', nominal: 30000, tanggal: '08 Okt 2024', avatar: '👦', bgColor: '#DDE7FF' },
        { id: 4, nama: 'Dewi Lestari', paket: 'Paket Profesional', nominal: 30000, tanggal: '05 Okt 2024', avatar: '👩', bgColor: '#E5E7EB' },
        { id: 5, nama: 'Rizky Pratama', paket: 'Paket Dasar - Salam', nominal: 30000, tanggal: '02 Okt 2024', avatar: '👦', bgColor: '#DBEAFE' },
        { id: 6, nama: 'Aisyah Putri', paket: 'Paket Ekspresi', nominal: 30000, tanggal: '28 Sep 2024', avatar: '👩', bgColor: '#FBCFE8' },
        { id: 7, nama: 'Fajar Romadhon', paket: 'Paket Percakapan', nominal: 30000, tanggal: '25 Sep 2024', avatar: '👦', bgColor: '#BFDBFE' },
        { id: 8, nama: 'Nadia Aulia', paket: 'Paket Dasar - Alfabet', nominal: 30000, tanggal: '20 Sep 2024', avatar: '👩', bgColor: '#DDD6FE' },
        { id: 9, nama: 'Rangga Wijaya', paket: 'Paket Dasar - Angka', nominal: 30000, tanggal: '18 Sep 2024', avatar: '👦', bgColor: '#CFE8FF' },
        { id: 10, nama: 'Putri Amelia', paket: 'Paket Profesional', nominal: 30000, tanggal: '15 Sep 2024', avatar: '👩', bgColor: '#FFD7E7' },
        { id: 11, nama: 'Dimas Prasetyo', paket: 'Paket Ekspresi', nominal: 30000, tanggal: '12 Sep 2024', avatar: '👦', bgColor: '#DDE7FF' },
        { id: 12, nama: 'Sarah Fitriani', paket: 'Paket Percakapan', nominal: 30000, tanggal: '10 Sep 2024', avatar: '👩', bgColor: '#E5E7EB' },
        { id: 13, nama: 'Bayu Saputra', paket: 'Paket Dasar - Alfabet', nominal: 30000, tanggal: '08 Sep 2024', avatar: '👦', bgColor: '#DBEAFE' },
        { id: 14, nama: 'Mega Cahyani', paket: 'Paket Profesional', nominal: 30000, tanggal: '05 Sep 2024', avatar: '👩', bgColor: '#FBCFE8' },
        { id: 15, nama: 'Eko Prasetyo', paket: 'Paket Dasar - Salam', nominal: 30000, tanggal: '02 Sep 2024', avatar: '👦', bgColor: '#BFDBFE' },
        { id: 16, nama: 'Lina Marlina', paket: 'Paket Ekspresi', nominal: 30000, tanggal: '30 Agu 2024', avatar: '👩', bgColor: '#DDD6FE' },
        { id: 17, nama: 'Agung Firmansyah', paket: 'Paket Percakapan', nominal: 30000, tanggal: '28 Agu 2024', avatar: '👦', bgColor: '#CFE8FF' },
        { id: 18, nama: 'Rina Anggraeni', paket: 'Paket Dasar - Angka', nominal: 30000, tanggal: '25 Agu 2024', avatar: '👩', bgColor: '#FFD7E7' },
        { id: 19, nama: 'Hendra Gunawan', paket: 'Paket Profesional', nominal: 30000, tanggal: '22 Agu 2024', avatar: '👦', bgColor: '#DDE7FF' },
        { id: 20, nama: 'Winda Lestari', paket: 'Paket Dasar - Alfabet', nominal: 30000, tanggal: '20 Agu 2024', avatar: '👩', bgColor: '#E5E7EB' },
        { id: 21, nama: 'Cahyo Nugroho', paket: 'Paket Ekspresi', nominal: 30000, tanggal: '18 Agu 2024', avatar: '👦', bgColor: '#DBEAFE' },
        { id: 22, nama: 'Dina Safitri', paket: 'Paket Percakapan', nominal: 30000, tanggal: '15 Agu 2024', avatar: '👩', bgColor: '#FBCFE8' },
        { id: 23, nama: 'Gilang Ramadhan', paket: 'Paket Dasar - Salam', nominal: 30000, tanggal: '12 Agu 2024', avatar: '👦', bgColor: '#BFDBFE' },
        { id: 24, nama: 'Tiara Puspita', paket: 'Paket Profesional', nominal: 30000, tanggal: '10 Agu 2024', avatar: '👩', bgColor: '#DDD6FE' },
        { id: 25, nama: 'Arif Rahman', paket: 'Paket Dasar - Angka', nominal: 30000, tanggal: '08 Agu 2024', avatar: '👦', bgColor: '#CFE8FF' }
    ];
    
    let currentSaldo = pemasukanData.reduce((sum, item) => sum + item.nominal, 0);
    
    // DOM Elements
    const pemasukanList = document.getElementById('pemasukanList');
    const saldoValue = document.getElementById('saldoValue');
    const tarikBtn = document.getElementById('tarikSaldoBtn');
    const modal = document.getElementById('tarikModal');
    const modalClose = document.querySelector('.modal-close');
    const cancelBtn = document.getElementById('cancelTarikBtn');
    const tarikForm = document.getElementById('tarikForm');
    const lihatSemuaBtn = document.getElementById('lihatSemuaBtn');
    const toast = document.getElementById('toastNotif');
    
    function renderPemasukan() {
        if (!pemasukanList) return;
        
        pemasukanList.innerHTML = '';

        const latestData = [...pemasukanData].slice(0, 8);
        
        latestData.forEach(item => {
            const div = document.createElement('div');
            div.className = 'pemasukan-item';
            div.innerHTML = `
                <div class="pemasukan-left">
                    <div class="pemasukan-avatar" style="background:${item.bgColor}; color:#2D3C6A;">${item.avatar}</div>
                    <div class="pemasukan-info">
                        <div class="pemasukan-nama">${item.nama}</div>
                        <div class="pemasukan-kelas">${item.paket}</div>
                    </div>
                </div>
                <div class="pemasukan-right">
                    <div class="pemasukan-nominal">Rp ${item.nominal.toLocaleString('id-ID')}</div>
                    <div class="pemasukan-tanggal">${item.tanggal}</div>
                </div>
            `;
            pemasukanList.appendChild(div);
        });
    }
    
    // ========== UPDATE SALDO ==========
    function updateSaldoDisplay() {
        if (saldoValue) {
            saldoValue.textContent = `Rp ${currentSaldo.toLocaleString('id-ID')}`;
        }
    }
    
    // ========== TOAST ==========
    function showToast(message, type = 'info') {
        if (!toast) return;
        
        let bgColor = '#1A1F36';
        if (type === 'success') bgColor = '#22C55E';
        if (type === 'error') bgColor = '#DC2626';
        if (type === 'warning') bgColor = '#D97706';
        
        toast.style.background = bgColor;
        toast.textContent = message;
        toast.classList.add('show');
        
        setTimeout(() => {
            toast.classList.remove('show');
        }, 3000);
    }
    
    // ========== MODAL ==========
    function openModal() {
        if (modal) {
            modal.style.display = 'block';
            document.body.style.overflow = 'hidden';
        }
    }
    
    function closeModal() {
        if (modal) {
            modal.style.display = 'none';
            document.body.style.overflow = 'auto';
            if (tarikForm) tarikForm.reset();
        }
    }
    
    if (tarikBtn) tarikBtn.onclick = openModal;
    if (modalClose) modalClose.onclick = closeModal;
    if (cancelBtn) cancelBtn.onclick = closeModal;
    
    window.onclick = function(e) {
        if (e.target === modal) closeModal();
    }
    
    // ========== PROSES PENARIKAN ==========
    if (tarikForm) {
        tarikForm.onsubmit = function(e) {
            e.preventDefault();
            
            let jumlah = document.getElementById('jumlahTarik').value;
            const nomorRekening = document.getElementById('nomorRekening').value;
            const atasNama = document.getElementById('atasNama').value;
            const namaBank = document.getElementById('namaBank').value;
            
            // Bersihkan input jumlah
            jumlah = jumlah.replace(/\./g, '').replace(/Rp/g, '').trim();
            const jumlahInt = parseInt(jumlah);
            
            // Validasi
            if (isNaN(jumlahInt) || jumlahInt < 500000) {
                showToast('⚠️ Minimal penarikan Rp 500.000', 'warning');
                return;
            }
            
            if (jumlahInt > currentSaldo) {
                showToast('⚠️ Saldo tidak mencukupi', 'warning');
                return;
            }
            
            if (!nomorRekening) {
                showToast('⚠️ Nomor rekening harus diisi', 'warning');
                return;
            }
            
            if (!atasNama) {
                showToast('⚠️ Nama pemilik rekening harus diisi', 'warning');
                return;
            }
            
            if (!namaBank) {
                showToast('⚠️ Nama bank harus diisi', 'warning');
                return;
            }
            
            // Proses penarikan - SALDO LANGSUNG MENJADI 0
            currentSaldo = 0;
            updateSaldoDisplay();
            
            showToast(`✅ Penarikan Rp ${jumlahInt.toLocaleString('id-ID')} berhasil! Saldo Anda sekarang Rp 0`, 'success');
            closeModal();
        };
    }
    
    // ========== LIHAT SEMUA TRANSAKSI ==========
    if (lihatSemuaBtn) {
        lihatSemuaBtn.onclick = function(e) {
            e.preventDefault();
            
            let allTransaksi = '📋 SEMUA TRANSAKSI\n\n';
            pemasukanData.forEach(item => {
                allTransaksi += `${item.nama} - ${item.paket}\n   Rp ${item.nominal.toLocaleString('id-ID')} (${item.tanggal})\n\n`;
            });
            allTransaksi += `================================\n`;
            allTransaksi += `Total Pemasukan: Rp ${pemasukanData.reduce((sum, item) => sum + item.nominal, 0).toLocaleString('id-ID')}\n`;
            allTransaksi += `Saldo Saat Ini: Rp ${currentSaldo.toLocaleString('id-ID')}`;
            
            alert(allTransaksi);
        };
    }
    
    // ========== INITIAL RENDER ==========
    renderPemasukan();
    updateSaldoDisplay();
    
    console.log('✅ Halaman Transaksi Guru siap! Total siswa: 25, Total saldo: Rp', currentSaldo.toLocaleString('id-ID'));
});