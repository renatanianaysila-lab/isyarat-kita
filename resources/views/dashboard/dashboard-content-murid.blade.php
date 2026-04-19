<div class="greet">
    <h1>Halo, <span class="name">[Nama Murid]</span> 👋</h1>
    <p>Yuk, lanjutkan belajar bahasa isyaratmu! ⭐</p>
</div>

<div class="grid-2">
    <!-- PROGRESS -->
    <section class="card progress-card-custom">
        <div class="card-head">
            <h2>Progress Belajar Hari Ini</h2>
            <span class="tanggal">{{ now()->format('d F Y') }}</span>
        </div>

        @php
            $videosCompleted = 12;
            $totalVideos = 20;
            $avgScore = 80;
            $watchTime = 525;
            $streak = 7;
            $points = 45;
            $progressPercentage = ($videosCompleted / $totalVideos) * 100;
        @endphp

        <div class="progress-main-row" style="display:flex; gap:25px; margin-bottom:20px;">
            <div class="progress-circle-container" style="flex-shrink:0;">
                <div class="progress-circle" style="position:relative; width:120px; height:120px;">
                    <svg width="120" height="120" viewBox="0 0 120 120">
                        <circle cx="60" cy="60" r="54" fill="none" stroke="#e9ecef" stroke-width="8"/>
                        <circle cx="60" cy="60" r="54" fill="none" stroke="#1e5abc" stroke-width="8"
                                stroke-linecap="round"
                                stroke-dasharray="339.292"
                                stroke-dashoffset="{{ 339.292 - (339.292 * $progressPercentage / 100) }}"
                                transform="rotate(-90 60 60)"/>
                    </svg>
                    <div class="progress-text" style="position:absolute; top:50%; left:50%; transform:translate(-50%, -50%); text-align:center;">
                        <span class="progress-number" style="display:block; font-size:28px; font-weight:bold; color:#1e293b;">{{ round($progressPercentage) }}%</span>
                        <span class="progress-label" style="font-size:12px; color:#64748b;">Selesai</span>
                    </div>
                </div>
            </div>

            <div style="flex:1; display:grid; grid-template-columns:repeat(2, 1fr); gap:15px;">
                <div>
                    <div style="font-size:0.85rem; color:#64748b; margin-bottom:5px;">Video Dipelajari</div>
                    <div style="font-size:1.5rem; font-weight:bold; color:#1e293b;">
                        {{ $videosCompleted }} <small style="font-size:0.9rem; color:#94a3b8;">/ {{ $totalVideos }}</small>
                    </div>
                    <div style="height:6px; background:#e9ecef; border-radius:10px; margin-top:8px; width:100%;">
                        <div style="height:100%; width:{{ $progressPercentage }}%; background:linear-gradient(90deg, #1e5abc, #2e5aa7); border-radius:10px;"></div>
                    </div>
                </div>

                <div>
                    <div style="font-size:0.85rem; color:#64748b; margin-bottom:5px;">Rata-rata Skor</div>
                    <div style="font-size:1.5rem; font-weight:bold; color:#1e293b;">{{ $avgScore }}</div>
                    <div style="color:#FFC107; font-size:0.9rem; margin-top:5px;">
                        @for($i=1; $i<=5; $i++)
                            @if($i <= round($avgScore/20))
                                ★
                            @else
                                ☆
                            @endif
                        @endfor
                        ({{ number_format($avgScore/20, 1) }})
                    </div>
                </div>

                <div>
                    <div style="font-size:0.85rem; color:#64748b; margin-bottom:5px;">Waktu Belajar</div>
                    <div style="font-size:1.5rem; font-weight:bold; color:#1e293b;">{{ floor($watchTime/60) }}j {{ $watchTime%60 }}m</div>
                    <div style="font-size:0.8rem; color:#94a3b8;">Total keseluruhan</div>
                </div>

                <div>
                    <div style="font-size:0.85rem; color:#64748b; margin-bottom:5px;">Poin Belajar</div>
                    <div style="font-size:1.5rem; font-weight:bold; color:#1e293b;">{{ $points }}</div>
                    <div style="font-size:0.8rem; color:#94a3b8;">🔥 {{ $streak }} hari streak</div>
                </div>
            </div>
        </div>

        <div class="graph" style="margin-top:20px; padding-top:20px; border-top:1px solid #e9ecef;">
            <div class="graph-title" style="font-size:0.9rem; color:#64748b; margin-bottom:12px;">Grafik Progress 7 Hari Terakhir</div>
            <div class="graph-box" style="height:100px; background:#f8fafc; border-radius:12px; display:flex; align-items:flex-end; padding:12px 8px; gap:8px;">
                <div style="height:40px; width:12%; background:#1e5abc; border-radius:6px 6px 0 0;"></div>
                <div style="height:65px; width:12%; background:#1e5abc; border-radius:6px 6px 0 0;"></div>
                <div style="height:30px; width:12%; background:#1e5abc; border-radius:6px 6px 0 0;"></div>
                <div style="height:70px; width:12%; background:#1e5abc; border-radius:6px 6px 0 0;"></div>
                <div style="height:55px; width:12%; background:#1e5abc; border-radius:6px 6px 0 0;"></div>
                <div style="height:45px; width:12%; background:#1e5abc; border-radius:6px 6px 0 0;"></div>
                <div style="height:80px; width:12%; background:#1e5abc; border-radius:6px 6px 0 0;"></div>
            </div>
            <div style="display:flex; justify-content:space-between; margin-top:8px; font-size:0.7rem; color:#94a3b8;">
                <span>Sen</span><span>Sel</span><span>Rab</span><span>Kam</span><span>Jum</span><span>Sab</span><span>Min</span>
            </div>
        </div>
    </section>

    <!-- PAKET DIMILIKI -->
    <section class="card">
        <div class="card-head">
            <h2>Paket yang Dimiliki</h2>
        </div>

        <div class="paket-grid">
            <div class="paket-card">
                <div class="paket-title">Paket Dasar</div>
                <div class="paket-sub">60 hari tersisa</div>
                <ul class="paket-list">
                    <li>Preview thumbnail</li>
                    <li>judul paket, deskripsi singkat paket</li>
                    <li><b>Aktif</b></li>
                </ul>
                <a href="?menu=materi" class="btn">Lanjut Belajar</a>
            </div>

            <div class="paket-card">
                <div class="paket-title">Paket Premium</div>
                <div class="paket-sub">240 hari tersisa</div>
                <ul class="paket-list">
                    <li>Preview thumbnail</li>
                    <li>judul paket, deskripsi singkat paket</li>
                    <li><b>Aktif</b></li>
                </ul>
                <a href="?menu=materi" class="btn">Lanjut Belajar</a>
            </div>
        </div>

        <div class="card-foot">
            <a class="link" href="?menu=katalog">Lihat Semua Paket ›</a>
        </div>
    </section>
</div>

<div class="section-head">
    <h3>Rekomendasi Materi untuk <span class="name">[Nama Murid]</span>:</h3>
    <a class="link" href="?menu=materi">Lihat Semua Materi</a>
</div>

<div class="grid-2 rekomendasi-materi">
    <section class="card materi-card">
        <div class="materi-tag">Materi Terakhir</div>
        <div class="materi-body">
            <div class="thumb"></div>
            <div class="materi-info">
                <div class="materi-title">Judul atau Deskripsi Materi</div>
                <div class="materi-time">⏱ 8 Menit</div>
            </div>
        </div>
        <a href="?menu=materi" class="btn full">Lanjutkan Belajar</a>
    </section>

    <section class="card materi-card">
        <div class="materi-tag">Materi Selanjutnya</div>
        <div class="materi-body">
            <div class="thumb"></div>
            <div class="materi-info">
                <div class="materi-title">Judul atau Deskripsi Materi</div>
                <div class="materi-time">⏱ 8 Menit</div>
            </div>
        </div>
        <a href="?menu=materi" class="btn full">Lanjutkan Belajar</a>
    </section>
</div>
