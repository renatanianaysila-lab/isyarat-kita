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

  <!-- NAVBAR DI ATAS -->
  @include('navigation-bar')

  <!-- HALAMAN LOGIN -->
  <div class="LOGIN">
    <!-- Background -->
    <img class="BACKGROUND" src="{{ asset('img/BACKGROUND.png') }}" alt="background">

    <!-- Main Content Login -->
    <main class="main-content">
      <h1 class="welcome-title">Selamat Datang Kembali!</h1>
      
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