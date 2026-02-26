<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login - IsyaratKita</title>

  <!-- Reset (boleh dipakai) -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <!-- CSS dari folder public/css -->
  <link rel="stylesheet" href="{{ asset('css/globals.css') }}">
  <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>

  <div class="LOGIN">

    <!-- gambar dari public/img -->
    <img class="BACKGROUND" src="{{ asset('img/BACKGROUND.png') }}" alt="background">

    <div class="rectangle"></div>

    <div class="group">
      <div class="ellipse"></div>
      <div class="text-wrapper">IK</div>
    </div>

    <div class="brand">IsyaratKita</div>

    <!-- Menu (buat link biar bisa balik ke section di home) -->
    <a class="menu home" href="/#home">HOME</a>
    <a class="menu tentang" href="/#tentang">TENTANG</a>
    <a class="menu fitur" href="/#fitur">FITUR</a>
    <a class="menu harga" href="/#harga">HARGA</a>

    <div class="rectangle-2"></div>
    <a class="menu masuk" href="/login">MASUK</a>

    <div class="title">Selamat Datang!</div>

    <div class="rectangle-3"></div>
    <div class="login-title">LOG IN</div>
    <a class="signup" href="/register">Sign Up</a>

    <!-- Form login beneran -->
    <form class="form-login" method="POST" action="/login">
      @csrf

      <div class="group-2">
        <input class="input" type="email" name="email" placeholder="Email" required>
      </div>

      <div class="group-3">
        <input class="input" type="password" name="password" placeholder="Password" required>
      </div>

      <button type="submit" class="btn-login">LOG IN</button>
    </form>

  </div>

</body>
</html>

<form action="/login" method="POST">
    @csrf

    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>

    <button type="submit" class="btn-primary">LOG IN</button>
</form>