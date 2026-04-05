<!DOCTYPE html>
<html lang="id">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta charset="utf-8" />
  <title>IsyaratKita</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap"
    rel="stylesheet"
  >

  <link rel="stylesheet" href="css/globals.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  @include('navigation-bar')

  <!-- PAGE 1 - HOME -->
  <div class="HOME-PAGE" id="home">
    <img class="BACKGROUND" src="{{ asset('img/BACKGROUND.png') }}" alt="background">
    
    <div class="text-wrapper-7">IsyaratKita</div>

    <p class="DESKIPSI-SINGKAT">
      IsyaratKita adalah platform edukasi berbasis website yang menyediakan pembelajaran bahasa isyarat secara
      sistematis, interaktif, dan mudah diakses oleh berbagai kalangan.
    </p>

    <div class="button-group">
      <div class="KENALI">
        <div class="KENALI-2"></div>
        <div class="text-wrapper-8">Kenali IsyaratKita</div>
      </div>

      <div class="DAFTAR">
        <div class="BG-DAFTAR"></div>
        <div class="text-wrapper-9">Daftar!</div>
      </div>
    </div>
  </div>

  <!-- PAGE 2 - ABOUT -->
  <div class="ABOUT-US-VISI-MISI" id="tentang">
    <div class="about-container">
      
      <!-- 2 KOLOM: KIRI (TENTANG) + KANAN (VISI & MISI) -->
      <div class="about-two-columns">
        
        <!-- KOLOM KIRI - TENTANG -->
        <div class="about-left">
          <div class="about-card">
            <div class="about-card-bg"></div>
            <h2 class="about-title">Tentang IsyaratKita</h2>
            <p class="about-description">
              IsyaratKita adalah platform edukasi berbasis website yang menyediakan pembelajaran bahasa isyarat secara
              sistematis dan interaktif. Platform ini mendukung komunikasi inklusif melalui materi bertahap serta kuis untuk
              membantu evaluasi pemahaman pengguna.
            </p>
          </div>
        </div>

        <!-- KOLOM KANAN - VISI & MISI -->
        <div class="about-right">
          
          <!-- VISI -->
          <div class="visi-card">
            <h3 class="visi-title">Visi</h3>
            <p class="visi-text">
              Menjadi platform pembelajaran bahasa isyarat terdepan yang mendorong terciptanya komunikasi inklusif dan 
              kesetaraan bagi penyandang tunarungu dan masyarakat luas.
            </p>
          </div>

          <!-- MISI -->
          <div class="misi-card">
            <h3 class="misi-title">Misi</h3>
            <ul class="misi-list">
              <li>Menyediakan materi bahasa isyarat yang terstruktur dan interaktif</li>
              <li>Mendukung kesetaraan komunikasi bagi penyandang tunarungu dan masyarakat luas</li>
              <li>Menghadirkan sistem pembelajaran berbasis video dan kuis yang interaktif</li>
              <li>Menyediakan layanan pembelajaran online yang fleksibel dan terjangkau</li>
            </ul>
          </div>
          
        </div>
      </div>
      
    </div>
  </div>

  <!-- PAGE 3 - FITUR -->
<div class="FITUR-HARGA-PAKET" id="fitur">
  <div class="fitur-header">
    <h2 class="fitur-title">IsyaratKita Menyediakan :</h2>
  </div>
  
  <div class="fitur-container">
    <div class="fitur-card">
      <img src="{{ asset('img/video.png') }}" alt="Video">
      <div class="kelas-video">Kelas Video Interaktif</div>
      <p>Materi bahasa isyarat dari tingkat dasar hingga lanjutan, disajikan melalui video interaktif yang mudah dipahami.</p>
    </div>

    <div class="fitur-card">
      <img src="{{ asset('img/quiz.png') }}" alt="Quiz">
      <div class="kuis-evaluasi">Kuis & Evaluasi Pemahaman</div>
      <p>Latihan dan kuis interaktif untuk menguji pemahaman serta memantau progres belajar secara sistematis.</p>
    </div>

    <div class="fitur-card">
      <img src="{{ asset('img/social-justice.png') }}" alt="Community">
      <div class="komunitas-dukungan">Komunitas & Dukungan Belajar</div>
      <p>Ruang diskusi untuk berbagi pengalaman dan membangun komunikasi inklusif bersama sesama pembelajar dan pengajar.</p>
    </div>
  </div>
</div>

  <!-- PAGE 4 - HARGA -->
  <div class="PAKET-PAKET" id="harga">
    <div class="group">
      <div class="paket-harga">Paket & Harga</div>
    </div>

    <div class="paket-container">
      <div class="paket-card">
        <div class="paket-title">PAKET GRATIS</div>
        <div class="paket-price">RP0</div>
        <div class="paket-list">
          Akses video pembelajaran dasar Bahasa Isyarat<br />
          Materi alfabet (A–Z) dan angka<br />
          Pengenalan kata & gerakan sehari-hari<br />
          Akses gratis 2 bulan
        </div>
      </div>

      <div class="paket-card">
        <div class="paket-title">PAKET PREMIUM</div>
        <div class="paket-price">RP30.000</div>
        <div class="paket-list">
          Semua benefit Paket Gratis<br />
          Akses video lanjutan & percakapan lengkap<br />
          Materi kalimat, ekspresi, dan konteks nyata<br />
          Latihan interaktif & kuis<br />
          Akses komunitas / mentor<br />
          Update materi eksklusif Premium<br />
          Akses selama 6 bulan
        </div>
      </div>
    </div>
  </div>

  <!-- PAGE 5 - LAST -->
  <div class="lastt" id="last">
    <img class="BACKGROUND" src="{{ asset('img/BACKGROUND.png') }}" alt="background">

    <div class="siap-mulai-belajar-bahasa-isyarat">
      Siap Mulai Belajar Bahasa Isyarat?
    </div>

    <div class="bergabunglah-bersama-kami-dan-mulai-pahami-bahasa-isyarat-dengan-cara-yang-mudah-inklusif-dan-ramah-untuk-semua">
      Bergabunglah bersama kami dan mulai pahami Bahasa Isyarat dengan cara yang mudah, inklusif, dan ramah untuk semua.
    </div>

    <div class="rectangle-9">
      <div class="gabung-sekarang">Gabung Sekarang</div>
    </div>
  </div>
  
</body>
</html>