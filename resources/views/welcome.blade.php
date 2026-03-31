<!DOCTYPE html>
<html lang="id">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta charset="utf-8" />
  <title>IsyaratKita</title>

  <!-- GOOGLE FONT: POPPINS -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap"
    rel="stylesheet"
  >

  <!-- CSS -->
  <link rel="stylesheet" href="css/globals.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <!-- NAVBAR GLOBAL -->
  @include('navigation-bar')

  <!-- PAGE 1 - HOME -->
  <div class="HOME-PAGE" id="home">
    <div class="hero-bg"></div>

    <div class="text-wrapper-7">IsyaratKita</div>

    <p class="DESKIPSI-SINGKAT">
      IsyaratKita adalah platform edukasi berbasis website yang menyediakan pembelajaran bahasa isyarat secara
      sistematis, interaktif, dan mudah diakses oleh berbagai kalangan.
    </p>

    <div class="KENALI">
      <div class="KENALI-2"></div>
      <div class="text-wrapper-8">Kenali IsyaratKita</div>
    </div>

    <div class="DAFTAR">
      <div class="BG-DAFTAR"></div>
      <div class="text-wrapper-9">Daftar!</div>
    </div>
  </div>

  <!-- PAGE 2 - ABOUT -->
  <div class="ABOUT-US-VISI-MISI" id="tentang">
    <div class="ABT-US">
      <div class="BG-ABT-US"></div>
      <div class="text-wrapper-7">Tentang IsyaratKita</div>
      <p class="DESKIPSI-SINGKAT">
        IsyaratKita adalah platform edukasi berbasis website yang menyediakan pembelajaran bahasa isyarat secara
        sistematis dan interaktif. Platform ini mendukung komunikasi inklusif melalui materi bertahap serta kuis untuk
        membantu evaluasi pemahaman pengguna.
      </p>
    </div>

    <div class="VISI">
      <div class="text-wrapper-8">Visi</div>
      <p class="menjadi-platform">
        Menjadi platform pembelajaran bahasa isyarat terdepan<br />
        yang mendorong terciptanya komunikasi inklusif dan
        kesetaraan bagi penyandang tunarungu dan masyarakat luas
      </p>
    </div>

    <div class="MISI">
      <div class="text-wrapper-9">Misi</div>
      <p class="menyediakan-materi">
        Menyediakan materi bahasa isyarat yang terstruktur dan interaktif<br />
        Mendukung kesetaraan komukasi bagi penyandang tunarungu dan masyarakat luas<br />
        Menghadirkan sistem pembelajaran berbasis video dan kuis yang interaktif<br />
        Menyediakan layanan pembelajaran online yang fleksibel dan terjangkau
      </p>
    </div>

    <div class="text-wrapper-10">IsyaratKita Menyediakan :</div>
  </div>

  <!-- PAGE 3 - FITUR -->
  <div class="FITUR-HARGA-PAKET" id="fitur">
    <div class="rectangle"></div>
    <div class="kelas-video">Kelas Video Interaktif</div>

    <div class="div"></div>
    <div class="kuis-evaluasi">Kuis & Evaluasi Pemahaman</div>

    <div class="rectangle-2"></div>
    <div class="komunitas-dukungan">Komunitas & Dukungan Belajar</div>

    <p class="p">
      Materi bahasa isyarat dari tingkat dasar hingga lanjutan, disajikan melalui video interaktif yang mudah dipahami.
    </p>

    <p class="text-wrapper-8">
      Latihan dan kuis interaktif untuk menguji pemahaman serta memantau progres belajar secara sistematis.
    </p>

    <p class="text-wrapper-9">
      Ruang diskusi untuk berbagi pengalaman dan membangun komunikasi inklusif bersama sesama pembelajar dan pengajar.
    </p>

    <img src="{{ asset('img/video.png') }}" class="video-icon" alt="Video">
    <img src="{{ asset('img/quiz.png') }}" class="quiz-icon" alt="Quiz">
    <img src="{{ asset('img/social-justice.png') }}" class="community-icon" alt="Community">
  </div>

  <!-- PAGE 4 - HARGA -->
  <div class="PAKET-PAKET" id="harga">
    <div class="group">
      <div class="rectangle"></div>
      <div class="paket-harga">Paket & Harga</div>
    </div>

    <div class="rectangle-3"></div>
    <div class="rectangle-4"></div>

    <div class="text-wrapper-8">PAKET GRATIS</div>
    <div class="text-wrapper-9">PAKET PREMIUM</div>

    <div class="text-wrapper-10">RP0</div>
    <div class="text-wrapper-11">RP30.000</div>

    <p class="akses-video">
      Akses video pembelajaran dasar Bahasa Isyarat<br />
      Materi alfabet (A–Z) dan angka<br />
      Pengenalan kata & gerakan sehari-hari<br />
      Akses gratis 2 bulan
    </p>

    <p class="semua-benefit-paket">
      Semua benefit Paket Gratis<br />
      Akses video lanjutan & percakapan lengkap<br />
      Materi kalimat, ekspresi, dan konteks nyata<br />
      Latihan interaktif & kuis<br />
      Akses komunitas / mentor<br />
      Update materi eksklusif Premium<br />
      Akses selama 6 bulan
    </p>
  </div>

  <!-- PAGE 5 - LAST -->
  <div class="lastt" id="last">
    <div class="hero-bg"></div>

    <div class="siap-mulai-belajar-bahasa-isyarat">
      Siap Mulai Belajar Bahasa Isyarat?
    </div>

    <div class="bergabunglah-bersama-kami-dan-mulai-pahami-bahasa-isyarat-dengan-cara-yang-mudah-inklusif-dan-ramah-untuk-semua">
      Bergabunglah bersama kami dan mulai pahami Bahasa Isyarat dengan cara yang
      mudah, inklusif, dan ramah untuk semua.
    </div>

    <div class="rectangle-9"></div>
    <div class="gabung-sekarang">Gabung Sekarang</div>
  </div>

</body>
</html>