<div class="history-page">
    <div class="history-header">
        <a href="?menu=dashboard" class="history-link-back">
            <div class="history-back">←</div>
        </a>
        <h2 class="history-title">Riwayat Belajar</h2>
    </div>

    @php
        $historyTab = request('tab', 'video');
    @endphp

    <div class="history-tabs">
        <a href="?menu=history&tab=video" class="history-tab {{ $historyTab == 'video' ? 'active' : '' }}">Video</a>
        <a href="?menu=history&tab=kuis" class="history-tab {{ $historyTab == 'kuis' ? 'active' : '' }}">Kuis</a>
        <a href="?menu=history&tab=pembelian" class="history-tab {{ $historyTab == 'pembelian' ? 'active' : '' }}">Pembelian</a>
    </div>

    {{-- TAB VIDEO --}}
    @if($historyTab == 'video')
        <div class="history-list">
            <div class="history-card">
                <div class="history-left">
                    <div class="history-thumb"></div>
                    <div class="history-info">
                        <h4>Angka 1-10</h4>
                        <p>15 Desember 2025 • 07:10</p>
                        <span class="history-badge badge-blue">▶ Sedang Ditonton</span>
                    </div>
                </div>
                <div class="history-duration">⏱ 12 menit</div>
            </div>

            <div class="history-card">
                <div class="history-left">
                    <div class="history-thumb"></div>
                    <div class="history-info">
                        <h4>Huruf A-Z</h4>
                        <p>14 Desember 2025 • 05:45</p>
                        <span class="history-badge badge-green">✓ Selesai</span>
                    </div>
                </div>
                <div class="history-duration">⏱ 18 menit</div>
            </div>

            <div class="history-card">
                <div class="history-left">
                    <div class="history-thumb"></div>
                    <div class="history-info">
                        <h4>Percakapan Dasar</h4>
                        <p>12 Desember 2025 • 11:15</p>
                        <span class="history-badge badge-green">✓ Selesai</span>
                    </div>
                </div>
                <div class="history-duration">⏱ 25 menit</div>
            </div>

            <div class="history-card">
                <div class="history-left">
                    <div class="history-thumb"></div>
                    <div class="history-info">
                        <h4>Ekspresi Dasar</h4>
                        <p>11 Desember 2024 • 14:50</p>
                        <span class="history-badge badge-yellow">⏸ Terhenti</span>
                    </div>
                </div>
                <div class="history-duration">⏱ 20 menit</div>
            </div>
        </div>
    @endif

    {{-- TAB KUIS --}}
    @if($historyTab == 'kuis')
        <div class="history-list">
            <div class="history-card">
                <div class="history-left">
                    <div class="history-quiz-icon">☰</div>
                    <div class="history-info">
                        <h4>Angka 1-10</h4>
                        <p>15 Desember 2025</p>
                        <span class="history-badge badge-green">● Lulus</span>
                    </div>
                </div>
            </div>

            <div class="history-card">
                <div class="history-left">
                    <div class="history-quiz-icon">☰</div>
                    <div class="history-info">
                        <h4>Abjad A-Z</h4>
                        <p>15 Desember 2025</p>
                        <span class="history-badge badge-green">● Lulus</span>
                    </div>
                </div>
            </div>

            <div class="history-card">
                <div class="history-left">
                    <div class="history-quiz-icon">☰</div>
                    <div class="history-info">
                        <h4>Percakapan dasar</h4>
                        <p>15 Desember 2025</p>
                        <span class="history-badge badge-red">● Terhenti</span>
                    </div>
                </div>
            </div>
        </div>
    @endif

    {{-- TAB PEMBELIAN --}}
    @if($historyTab == 'pembelian')
        <div class="history-list">
            <div class="history-card">
                <div class="history-left">
                    <div class="history-thumb"></div>
                    <div class="history-info">
                        <h4>Paket Premium</h4>
                        <p>10 Desember 2024 • 09:20</p>
                        <span class="history-badge badge-green">✓ Berhasil Dibeli</span>
                    </div>
                </div>
                <div class="history-duration">Rp30.000</div>
            </div>

            <div class="history-card">
                <div class="history-left">
                    <div class="history-thumb"></div>
                    <div class="history-info">
                        <h4>Paket Premium</h4>
                        <p>05 November 2025 • 15:00</p>
                        <span class="history-badge badge-green">✓ Berhasil Dibeli</span>
                    </div>
                </div>
                <div class="history-duration">Rp30.000</div>
            </div>
        </div>
    @endif
</div>