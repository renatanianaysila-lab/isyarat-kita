<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Kuis - IsyaratKita</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard-kuis.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body>
    <div class="app">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="brand">
                <div class="brand-logo">IK</div>
                <div>
                    <h1>IsyaratKita</h1>
                    <p>Dashboard Murid</p>
                </div>
            </div>

            <nav class="menu">
                <a href="#" class="menu-item">
                    <span class="menu-icon">⌂</span>
                    <span>Dashboard</span>
                </a>

                <a href="#" class="menu-item">
                    <span class="menu-icon">👤</span>
                    <span>Profil</span>
                </a>

                <a href="#" class="menu-item">
                    <span class="menu-icon">📄</span>
                    <span>Materi Saya</span>
                </a>

                <a href="#" class="menu-item active">
                    <span class="menu-icon">📝</span>
                    <span>Kuis</span>
                </a>

                <a href="#" class="menu-item">
                    <span class="menu-icon">🕘</span>
                    <span>History</span>
                </a>

                <a href="#" class="menu-item">
                    <span class="menu-icon">★</span>
                    <span>Feedback</span>
                </a>

                <a href="#" class="menu-item">
                    <span class="menu-icon">📦</span>
                    <span>Katalog Paket</span>
                </a>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            <section class="welcome-banner">
                <div>
                    <h2>Selamat Datang di Kuis IsyaratKita! 👋</h2>
                    <p>Uji pemahaman Anda terhadap bahasa isyarat melalui kuis interaktif kami</p>
                </div>

                <div class="stats">
                    <div class="stat-box">
                        <span>Total Kuis</span>
                        <strong>4</strong>
                    </div>
                    <div class="stat-box">
                        <span>Diselesaikan</span>
                        <strong>2</strong>
                    </div>
                </div>
            </section>

            <section class="quiz-grid-wrapper">
                <div class="quiz-grid">
                    <!-- Card 1 -->
                    <div class="quiz-card">
                        <div class="quiz-card-top">
                            <div class="quiz-icon red">🧮</div>
                            <span class="quiz-count red-text">10 Kuis</span>
                        </div>

                        <h3>Angka 1-10</h3>
                        <p class="quiz-desc">
                            Pelajari dan uji kemampuan Anda dalam mengenali bahasa isyarat untuk angka dasar 1 hingga 10
                        </p>

                        <div class="progress-header">
                            <span>Progres</span>
                            <span>3/10</span>
                        </div>
                        <div class="progress-bar">
                            <div class="progress-fill red-fill" style="width: 30%;"></div>
                        </div>

                        <div class="quiz-footer">
                            <span class="duration">◉ ~15 menit</span>
                            <button class="btn red-btn">Lanjutkan</button>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="quiz-card">
                        <div class="quiz-card-top">
                            <div class="quiz-icon blue">A</div>
                            <span class="quiz-count blue-text">26 Kuis</span>
                        </div>

                        <h3>Huruf A-Z</h3>
                        <p class="quiz-desc">
                            Kuasai alfabet bahasa isyarat dari A hingga Z dengan video demonstrasi yang mudah dipahami
                        </p>

                        <div class="progress-header">
                            <span>Progres</span>
                            <span>5/26</span>
                        </div>
                        <div class="progress-bar">
                            <div class="progress-fill blue-fill" style="width: 19%;"></div>
                        </div>

                        <div class="quiz-footer">
                            <span class="duration">◉ ~40 menit</span>
                            <button class="btn blue-btn">Lanjutkan</button>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="quiz-card">
                        <div class="quiz-card-top">
                            <div class="quiz-icon green">👥</div>
                            <span class="quiz-count green-text">15 Kuis</span>
                        </div>

                        <h3>Percakapan Dasar</h3>
                        <p class="quiz-desc">
                            Praktikkan komunikasi sehari-hari dengan salam, perkenalan, dan percakapan sederhana
                        </p>

                        <div class="progress-header">
                            <span>Progres</span>
                            <span>0/15</span>
                        </div>
                        <div class="progress-bar">
                            <div class="progress-fill green-fill" style="width: 0%;"></div>
                        </div>

                        <div class="quiz-footer">
                            <span class="duration">◉ ~25 menit</span>
                            <button class="btn green-btn">Mulai</button>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="quiz-card">
                        <div class="quiz-card-top">
                            <div class="quiz-icon yellow">🙂</div>
                            <span class="quiz-count yellow-text">12 Kuis</span>
                        </div>

                        <h3>Ekspresi Dasar</h3>
                        <p class="quiz-desc">
                            Pelajari ungkapan penting seperti terima kasih, maaf, tolong, ya, dan tidak dalam bahasa isyarat
                        </p>

                        <div class="progress-header">
                            <span>Progres</span>
                            <span>0/12</span>
                        </div>
                        <div class="progress-bar">
                            <div class="progress-fill yellow-fill" style="width: 0%;"></div>
                        </div>

                        <div class="quiz-footer">
                            <span class="duration">◉ ~20 menit</span>
                            <button class="btn yellow-btn">Mulai</button>
                        </div>
                    </div>
                </div>
            </section>

            <section class="activity-section">
                <h3>Aktivitas Terakhir</h3>

                <div class="activity-list">
                    <div class="activity-item">
                        <div class="activity-left">
                            <div class="activity-icon red">🧮</div>
                            <div>
                                <h4>Menyelesaikan Kuis Angka 3</h4>
                                <p>Skor: 90% • 2 jam yang lalu</p>
                            </div>
                        </div>
                        <div class="check">✔</div>
                    </div>

                    <div class="activity-item">
                        <div class="activity-left">
                            <div class="activity-icon blue">A</div>
                            <div>
                                <h4>Menyelesaikan Kuis Huruf E</h4>
                                <p>Skor: 85% • 1 hari yang lalu</p>
                            </div>
                        </div>
                        <div class="check">✔</div>
                    </div>
                </div>
            </section>
        </main>
    </div>
</body>
</html>