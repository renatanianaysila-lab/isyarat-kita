<!DOCTYPE html>
<html lang="id">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta charset="utf-8" />
  <title>IsyaratKita</title>

  <!-- GOOGLE FONT: POPPINS -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background: #fff;
      overflow-x: hidden;
    }

    /* Navbar */
    .navbar {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 20px 60px;
      background: white;
      z-index: 1000;
      box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    }

    .logo-wrapper {
      display: flex;
      align-items: center;
      gap: 10px;
      text-decoration: none;
    }

    .logo-img {
      width: 45px;
      height: 45px;
    }

    .logo-text {
      font-weight: 700;
      font-size: 1.4rem;
      color: #1e293b;
    }

    .nav-links {
      display: flex;
      align-items: center;
      gap: 40px;
    }

    .nav-links a {
      text-decoration: none;
      color: #1e293b;
      font-weight: 600;
      font-size: 1.1rem;
      transition: color 0.3s;
    }

    .nav-links a:hover {
      color: #4CAF50;
    }

    .btn-masuk {
      background: #4CAF50;
      color: white !important;
      padding: 10px 35px;
      border-radius: 30px;
      font-weight: 600 !important;
    }

    .btn-masuk:hover {
      background: #43a047;
      color: white !important;
    }

    /* Hero Section */
    .hero {
      min-height: 100vh;
      display: flex;
      align-items: center;
      background: linear-gradient(135deg, #f8fafc 0%, #e9f5e9 100%);
      padding: 100px 60px 80px;
      margin-top: 0;
    }

    .hero-container {
      max-width: 1200px;
      margin: 0 auto;
      width: 100%;
    }

    .hero-content {
      max-width: 700px;
    }

    .hero-title {
      font-size: 3.2rem;
      font-weight: 700;
      color: #1e293b;
      margin-bottom: 25px;
      line-height: 1.2;
    }

    .hero-description {
      font-size: 1.1rem;
      color: #475569;
      line-height: 1.8;
      margin-bottom: 40px;
      max-width: 600px;
    }

    .hero-buttons {
      display: flex;
      gap: 20px;
    }

    .btn-daftar {
      background: #4CAF50;
      color: white;
      padding: 14px 40px;
      border-radius: 40px;
      text-decoration: none;
      font-weight: 600;
      font-size: 1.1rem;
      border: none;
      cursor: pointer;
      display: inline-block;
    }

    .btn-kenali {
      background: transparent;
      color: #1e293b;
      padding: 14px 40px;
      border-radius: 40px;
      text-decoration: none;
      font-weight: 600;
      font-size: 1.1rem;
      border: 2px solid #4CAF50;
      cursor: pointer;
      display: inline-block;
    }

    .btn-kenali:hover {
      background: #4CAF50;
      color: white;
    }

    /* Section Umum */
    section {
      padding: 80px 60px;
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
    }

    .section-title {
      font-size: 2.2rem;
      font-weight: 700;
      color: #1e293b;
      margin-bottom: 30px;
    }

    /* About Section */
    .about-section {
      background: white;
    }

    .about-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 40px;
      margin-top: 40px;
    }

    .about-card {
      background: #f8fafc;
      padding: 40px;
      border-radius: 20px;
    }

    .about-card h3 {
      font-size: 1.5rem;
      margin-bottom: 20px;
      color: #1e293b;
    }

    .about-card p {
      color: #475569;
      line-height: 1.8;
      margin-bottom: 20px;
    }

    .misi-list {
      list-style: none;
    }

    .misi-list li {
      margin-bottom: 15px;
      padding-left: 25px;
      position: relative;
      color: #475569;
    }

    .misi-list li:before {
      content: "✓";
      color: #4CAF50;
      position: absolute;
      left: 0;
      font-weight: 700;
    }

    /* Fitur Section */
    .fitur-section {
      background: #f8fafc;
    }

    .fitur-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 30px;
      margin-top: 40px;
    }

    .fitur-card {
      background: white;
      padding: 40px 30px;
      border-radius: 20px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.05);
      text-align: center;
    }

    .fitur-icon {
      width: 70px;
      height: 70px;
      background: #e9f5e9;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 20px;
      font-size: 2rem;
      color: #4CAF50;
    }

    .fitur-card h3 {
      font-size: 1.3rem;
      margin-bottom: 15px;
    }

    .fitur-card p {
      color: #64748b;
      line-height: 1.6;
    }

    /* Paket Section */
    .paket-grid {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 30px;
      margin-top: 40px;
    }

    .paket-card {
      background: white;
      padding: 40px 30px;
      border-radius: 20px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.05);
      border: 1px solid #e9ecef;
      position: relative;
    }

    .paket-card.premium {
      border: 2px solid #4CAF50;
    }

    .paket-badge {
      position: absolute;
      top: -12px;
      left: 50%;
      transform: translateX(-50%);
      background: #4CAF50;
      color: white;
      padding: 4px 20px;
      border-radius: 30px;
      font-size: 0.8rem;
      font-weight: 600;
    }

    .paket-title {
      font-size: 1.8rem;
      font-weight: 700;
      text-align: center;
      margin-bottom: 20px;
    }

    .paket-price {
      font-size: 2rem;
      font-weight: 700;
      color: #4CAF50;
      text-align: center;
      margin-bottom: 20px;
    }

    .paket-list {
      list-style: none;
      margin: 25px 0;
    }

    .paket-list li {
      margin-bottom: 12px;
      padding-left: 25px;
      position: relative;
      color: #475569;
    }

    .paket-list li:before {
      content: "✓";
      color: #4CAF50;
      position: absolute;
      left: 0;
    }

    .btn-paket {
      display: block;
      text-align: center;
      padding: 12px;
      background: #4CAF50;
      color: white;
      text-decoration: none;
      border-radius: 30px;
      font-weight: 600;
      margin-top: 20px;
    }

    .btn-paket.outline {
      background: transparent;
      border: 2px solid #4CAF50;
      color: #1e293b;
    }

    /* CTA Section */
    .cta-section {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      color: white;
      text-align: center;
      padding: 80px 60px;
    }

    .cta-title {
      font-size: 2.5rem;
      font-weight: 700;
      margin-bottom: 20px;
    }

    .cta-description {
      font-size: 1.1rem;
      max-width: 600px;
      margin: 0 auto 30px;
      opacity: 0.9;
    }

    .btn-cta {
      background: white;
      color: #4CAF50;
      padding: 15px 40px;
      border-radius: 40px;
      text-decoration: none;
      font-weight: 700;
      font-size: 1.1rem;
      display: inline-block;
    }

    /* Footer */
    .footer {
      background: #1e293b;
      color: white;
      padding: 40px;
      text-align: center;
    }

    /* Responsive */
    @media (max-width: 768px) {
      .navbar {
        padding: 15px 20px;
        flex-direction: column;
        gap: 15px;
      }

      .nav-links {
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
      }

      section {
        padding: 60px 20px;
      }

      .hero {
        padding: 150px 20px 60px;
        text-align: center;
      }

      .hero-content {
        margin: 0 auto;
      }

      .hero-description {
        margin-left: auto;
        margin-right: auto;
      }

      .hero-buttons {
        justify-content: center;
      }

      .about-grid,
      .fitur-grid,
      .paket-grid {
        grid-template-columns: 1fr;
      }

      .hero-title {
        font-size: 2.5rem;
      }

      .section-title {
        font-size: 1.8rem;
      }
    }
  </style>
</head>
<body>

  <!-- NAVBAR -->
  <nav class="navbar">
    <a href="#home" class="logo-wrapper">
      <img src="img/LOGO.png" alt="IsyaratKita" class="logo-img">
      <span class="logo-text">IsyaratKita</span>
    </a>

    <div class="nav-links">
      <a href="#home">HOME</a>
      <a href="#tentang">TENTANG</a>
      <a href="#fitur">FITUR</a>
      <a href="#harga">HARGA</a>
      <a href="/login" class="btn-masuk">MASUK</a>
    </div>
  </nav>

  <!-- PAGE 1: HOME -->
  <section class="hero" id="home">
    <div class="hero-container">
      <div class="hero-content">
        <h1 class="hero-title">IsyaratKita</h1>
        <p class="hero-description">
          IsyaratKita adalah platform edukasi berbasis website yang menyediakan pembelajaran bahasa isyarat secara
          sistematis, interaktif, dan mudah diakses oleh berbagai kalangan.
        </p>
        <div class="hero-buttons">
          <a href="/register" class="btn-daftar">Daftar!</a>
          <a href="#tentang" class="btn-kenali">Kenali IsyaratKita</a>
        </div>
      </div>
    </div>
  </section>

  <!-- PAGE 2: TENTANG -->
  <section class="about-section" id="tentang">
    <div class="container">
      <h2 class="section-title">Tentang IsyaratKita</h2>
      <p style="color: #475569; max-width: 800px; margin-bottom: 40px;">
        IsyaratKita adalah platform edukasi berbasis website yang menyediakan pembelajaran bahasa isyarat secara
        sistematis dan interaktif. Platform ini mendukung komunikasi inklusif melalui materi bertahap serta kuis untuk
        membantu evaluasi pemahaman pengguna.
      </p>

      <div class="about-grid">
        <div class="about-card">
          <h3>Visi</h3>
          <p>
            Menjadi platform pembelajaran bahasa isyarat terdepan yang mendorong terciptanya komunikasi inklusif dan
            kesetaraan bagi penyandang tunarungu dan masyarakat luas.
          </p>
        </div>
        <div class="about-card">
          <h3>Misi</h3>
          <ul class="misi-list">
            <li>Menyediakan materi bahasa isyarat yang terstruktur dan interaktif</li>
            <li>Mendukung kesetaraan komunikasi bagi penyandang tunarungu dan masyarakat luas</li>
            <li>Menghadirkan sistem pembelajaran berbasis video dan kuis yang interaktif</li>
            <li>Menyediakan layanan pembelajaran online yang fleksibel dan terjangkau</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- PAGE 3: FITUR -->
  <section class="fitur-section" id="fitur">
    <div class="container">
      <h2 class="section-title">Fitur Unggulan</h2>
      
      <div class="fitur-grid">
        <div class="fitur-card">
          <div class="fitur-icon">🎥</div>
          <h3>Kelas Video Interaktif</h3>
          <p>Materi bahasa isyarat dari tingkat dasar hingga lanjutan, disajikan melalui video interaktif yang mudah dipahami.</p>
        </div>
        <div class="fitur-card">
          <div class="fitur-icon">📝</div>
          <h3>Kuis & Evaluasi</h3>
          <p>Latihan dan kuis interaktif untuk menguji pemahaman serta memantau progres belajar secara sistematis.</p>
        </div>
        <div class="fitur-card">
          <div class="fitur-icon">👥</div>
          <h3>Komunitas Belajar</h3>
          <p>Ruang diskusi untuk berbagi pengalaman dan membangun komunikasi inklusif bersama sesama pembelajar.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- PAGE 4: HARGA -->
  <section id="harga">
    <div class="container" style="padding: 80px 0;">
      <h2 class="section-title">Paket & Harga</h2>
      
      <div class="paket-grid">
        <!-- Paket Gratis -->
        <div class="paket-card">
          <h3 class="paket-title">PAKET GRATIS</h3>
          <div class="paket-price">Rp 0</div>
          <ul class="paket-list">
            <li>Akses video pembelajaran dasar Bahasa Isyarat</li>
            <li>Materi alfabet (A–Z) dan angka</li>
            <li>Pengenalan kata & gerakan sehari-hari</li>
            <li>Akses gratis 2 bulan</li>
          </ul>
          <a href="/register" class="btn-paket outline">Mulai Gratis</a>
        </div>

        <!-- Paket Premium -->
        <div class="paket-card premium">
          <div class="paket-badge">REKOMENDASI</div>
          <h3 class="paket-title">PAKET PREMIUM</h3>
          <div class="paket-price">Rp 30.000</div>
          <ul class="paket-list">
            <li>Semua benefit Paket Gratis</li>
            <li>Akses video lanjutan & percakapan lengkap</li>
            <li>Materi kalimat, ekspresi, dan konteks nyata</li>
            <li>Latihan interaktif & kuis</li>
            <li>Akses komunitas / mentor</li>
            <li>Update materi eksklusif Premium</li>
            <li>Akses selama 6 bulan</li>
          </ul>
          <a href="/register" class="btn-paket">Langganan Sekarang</a>
        </div>
      </div>
    </div>
  </section>

  <!-- PAGE 5: CTA -->
  <section class="cta-section" id="last">
    <div class="container">
      <h2 class="cta-title">Siap Mulai Belajar Bahasa Isyarat?</h2>
      <p class="cta-description">
        Bergabunglah bersama kami dan mulai pahami Bahasa Isyarat dengan cara yang mudah, inklusif, dan ramah untuk semua.
      </p>
      <a href="/register" class="btn-cta">Gabung Sekarang</a>
    </div>
  </section>

  <!-- FOOTER -->
  <footer class="footer">
    <div class="container">
      <p>© 2026 IsyaratKita. Semua hak dilindungi.</p>
    </div>
  </footer>

</body>
</html>