<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login - IsyaratKita</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel="stylesheet" href="{{ asset('css/globals.css') }}">
  <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
  <!-- HALAMAN LOGIN (HANYA 1) -->
  <div class="LOGIN">
    <!-- Background -->
    <img class="BACKGROUND" src="{{ asset('img/BACKGROUND.png') }}" alt="background">

    <!-- Navbar -->
    <nav class="navbar">
      <div class="logo-container">
        <div class="logo-circle">
          <span class="logo-text">IK</span>
        </div>
        <span class="brand-name">IsyaratKita</span>
      </div>

      <div class="nav-links">
        <a class="nav-link" href="/#home">HOME</a>
        <a class="nav-link" href="/#tentang">TENTANG</a>
        <a class="nav-link" href="/#fitur">FITUR</a>
        <a class="nav-link" href="/#harga">HARGA</a>
        <a class="nav-link btn-masuk" href="/login">MASUK</a>
      </div>
    </nav>

    <!-- Main Content Login -->
    <main class="main-content">
      <h1 class="welcome-title">Selamat Datang!</h1>
      
      <div class="login-card">
        <h2 class="login-title">LOG IN</h2>
        
        <form class="login-form" method="POST" action="/login">
          @csrf
          <div class="input-group">
            <input class="form-input" type="email" name="email" placeholder="Email" required>
          </div>
          <div class="input-group">
            <input class="form-input" type="password" name="password" placeholder="Password" required>
          </div>
          <button type="submit" class="submit-btn">LOG IN</button>
        </form>
        
        <p class="signup-text">
          Belum punya akun? 
          <a href="/register" class="signup-link">Sign Up</a>
        </p>
      </div>
    </main>
  </div>
</body>
</html>