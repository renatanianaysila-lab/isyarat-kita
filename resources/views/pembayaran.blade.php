<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IsyaratKita - Pembayaran</title>
    
    <!-- CSS Pembayaran -->
    <link rel="stylesheet" href="{{ asset('css/pembayaran.css') }}">
</head>
<body>
    <div class="payment-container">
        <!-- Tombol Kembali -->
        <a href="{{ url('/paket') }}" class="back-button">
            <span class="back-icon">←</span> Kembali ke Paket
        </a>

        <!-- Card Pembayaran -->
        <div class="payment-card">
            <!-- Step Indicator -->
            <div class="step-indicator">
                <div class="step-line"></div>
                <div class="step-item active">
                    <div class="step-circle">1</div>
                    <span>Detail Pesanan</span>
                </div>
                <div class="step-item active">
                    <div class="step-circle">2</div>
                    <span>Metode Pembayaran</span>
                </div>
                <div class="step-item">
                    <div class="step-circle">3</div>
                    <span>Konfirmasi</span>
                </div>
            </div>

            <!-- Logo Kecil -->
            <div class="payment-header">
                <img src="{{ asset('img/LOGO.png') }}" alt="IsyaratKita" class="payment-logo">
                <h1 class="section-title">Metode Pembayaran</h1>
            </div>
            
            <!-- Metode Pembayaran -->
            <div class="method-grid">
                <div class="method-option" id="method-qris" onclick="pilihMetode('qris')">
                    <div class="method-icon">📱</div>
                    <div class="method-label">QRIS</div>
                <div class="method-desc">Scan QRIS langsung</div>
            </div>
    
            <div class="method-option" id="method-va" onclick="pilihMetode('va')">
                <div class="method-icon">🏦</div>
                <div class="method-label">Virtual Account</div>
                <div class="method-desc">BCA, Mandiri, BRI, BNI</div>
            </div>
        </div>

            <!-- Ringkasan Pesanan -->
            <div class="ringkasan-box">
                <h2 class="ringkasan-title">Ringkasan Pesanan</h2>
                
                <div class="order-detail">
                    <span>Paket:</span>
                    <span class="order-value" id="packageName">
                        {{ request('paket') == 'premium' ? 'Paket Premium' : 'Paket Premium' }}
                    </span>
                </div>
                
                <div class="order-detail">
                    <span>Durasi:</span>
                    <span class="order-value">1 Bulan</span>
                </div>

                <div class="order-detail">
                    <span>Akses:</span>
                    <span class="order-value">Video Unlimited + Materi Eksklusif</span>
                </div>

                <div class="order-detail">
                    <span>Konsultasi:</span>
                    <span class="order-value">Konsultasi Singkat</span>
                </div>
                
                <div class="order-detail total">
                    <span>Total Tagihan:</span>
                    <span class="total-value" id="totalPrice">
                        Rp {{ number_format(request('harga', 30000), 0, ',', '.') }}
                    </span>
                </div>
            </div>

            <!-- Informasi Tambahan -->
            <div class="info-section">
                <div class="info-item">
                    <span class="info-icon">✓</span>
                    <span>Akses langsung setelah pembayaran</span>
                </div>
                <div class="info-item">
                    <span class="info-icon">✓</span>
                    <span>Bukti pembayaran dikirim ke email</span>
                </div>
                <div class="info-item">
                    <span class="info-icon">✓</span>
                    <span>Batas pembayaran 24 jam</span>
                </div>
            </div>

            <!-- Tombol Konfirmasi -->
            <form action="{{ route('proses.pembayaran') }}" method="POST" id="paymentForm">
                @csrf
                <input type="hidden" name="paket" value="{{ request('paket', 'premium') }}">
                <input type="hidden" name="harga" value="{{ request('harga', 30000) }}">
                <button type="button" class="btn btn-primary btn-large" onclick="prosesPembayaran()">
                    Konfirmasi & Bayar
                </button>
            </form>

            <!-- Keamanan -->
            <p class="secure-note">🔒 Pembayaran aman dan terenkripsi</p>
        </div>
    </div>

    <!-- Modal Sukses -->
    <div id="successModal" class="modal">
        <div class="modal-content">
            <div class="modal-icon">✅</div>
            <h3>Pembayaran Berhasil!</h3>
            <p>Selamat! Paket Premium Anda telah aktif.</p>
            <p class="modal-detail">Silahkan cek email untuk detail akses.</p>
            <a href="{{ url('/paket') }}" class="btn btn-primary modal-btn">Kembali ke Beranda</a>
        </div>
    </div>

    <!-- Modal Konfirmasi -->
    <div id="confirmModal" class="modal">
        <div class="modal-content" style="max-width: 350px;">
            <div class="modal-icon">🔔</div>
            <h3>Konfirmasi Pembayaran</h3>
            <p>Anda akan melakukan pembayaran untuk:</p>
            <p style="font-weight: 600; color: #1a2b3c; margin: 10px 0;" id="confirmPackage">Paket Premium</p>
            <p style="font-size: 20px; font-weight: 700; color: #4a90e2; margin-bottom: 20px;" id="confirmPrice">Rp 30.000</p>
            <div style="display: flex; gap: 10px;">
                <button class="btn" style="flex: 1; background: #e1e8ed; color: #5e6f7d;" onclick="tutupConfirmModal()">Batal</button>
                <button class="btn btn-primary" style="flex: 1;" onclick="lanjutkanPembayaran()">Lanjutkan</button>
            </div>
        </div>
    </div>

    <script>
        // Data dari Laravel
        const paket = "{{ request('paket', 'premium') }}";
        const harga = "{{ request('harga', 30000) }}";
        
        // Format harga
        function formatRupiah(angka) {
            return 'Rp ' + angka.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
        }

        window.onload = function() {
            // Update tampilan berdasarkan paket
            if (paket === 'premium') {
                document.getElementById('packageName').textContent = 'Paket Premium';
                document.getElementById('totalPrice').textContent = formatRupiah(harga);
            }
        }

        // Fungsi untuk memproses pembayaran
        function prosesPembayaran() {
            // Tampilkan modal konfirmasi dulu
            document.getElementById('confirmPackage').textContent = 
                paket === 'premium' ? 'Paket Premium' : 'Paket Premium';
            document.getElementById('confirmPrice').textContent = formatRupiah(harga);
            document.getElementById('confirmModal').style.display = 'flex';
        }

        function lanjutkanPembayaran() {
            // Tutup modal konfirmasi
            document.getElementById('confirmModal').style.display = 'none';
            
            // Tampilkan modal sukses (simulasi)
            document.getElementById('successModal').style.display = 'flex';
            
            // Redirect setelah 3 detik
            setTimeout(function() {
                window.location.href = "{{ url('/paket') }}";
            }, 3000);

        }

        function tutupConfirmModal() {
            document.getElementById('confirmModal').style.display = 'none';
        }

        // Tutup modal jika klik di luar
        window.onclick = function(event) {
            const successModal = document.getElementById('successModal');
            const confirmModal = document.getElementById('confirmModal');
            
            if (event.target == successModal) {
                successModal.style.display = 'none';
            }
            if (event.target == confirmModal) {
                confirmModal.style.display = 'none';
            }
        }
    </script>
</body>
</html>