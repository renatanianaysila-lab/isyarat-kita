<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sign Up - IsyaratKita</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel="stylesheet" href="{{ asset('css/globals.css') }}">
  <link rel="stylesheet" href="{{ asset('css/register.css') }}">  
</head>
<body>
  <!-- HALAMAN SIGN UP -->
  <div class="SIGNUP">
    <!-- Background -->
    <img class="BACKGROUND" src="{{ asset('img/BACKGROUND.png') }}" alt="background">

    <!-- Navbar -->
    <nav class="navbar">
      <div class="logo-container">
        <img src="{{ asset('img/logo.png') }}" alt="IsyaratKita Logo" class="logo-img">
      </div>

      <div class="nav-links">
        <a class="nav-link" href="/#home">HOME</a>
        <a class="nav-link" href="/#tentang">TENTANG</a>
        <a class="nav-link" href="/#fitur">FITUR</a>
        <a class="nav-link" href="/#harga">HARGA</a>
        <a class="nav-link btn-masuk" href="/login">MASUK</a>
      </div>
    </nav>

<!-- Main Content Sign Up -->
<main class="main-content">
  
  <div class="signup-card">
    <h2 class="signup-title">SIGN UP</h2>
    
    <form class="signup-form" method="POST" action="/register">
      @csrf
      
      <!-- Name Row  -->
      <div class="name-row">
        <div class="input-group">
          <input class="form-input" type="text" name="nama_depan" placeholder="Nama Depan" required>
        </div>
        <div class="input-group">
          <input class="form-input" type="text" name="nama_belakang" placeholder="Nama Belakang" required>
        </div>
      </div>

      <!-- Username -->
      <div class="input-group">
        <input class="form-input" type="text" name="username" placeholder="Nama Pengguna" required>
      </div>

      <!-- Email -->
      <div class="input-group">
        <input class="form-input" type="email" name="email" placeholder="Email" required>
      </div>

      <!-- Password -->
      <div class="input-group">
        <input class="form-input" type="password" name="password" placeholder="Password" required>
      </div>

      <!-- Confirm Password -->
      <div class="input-group">
        <input class="form-input" type="password" name="password_confirmation" placeholder="Konfirmasi Password" required>
      </div>

      <button type="submit" class="submit-btn">SIGN UP</button>
    </form>
    
    <p class="login-text">
      Sudah punya akun? 
      <a href="/login" class="login-link">Log In</a>
    </p>
  </div>
</main> 