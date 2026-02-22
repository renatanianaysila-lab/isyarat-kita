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

  <div class="SIGN-UP">

    <img class="BACKGROUND" src="{{ asset('img/BACKGROUND.png') }}" alt="background" />

    <div class="rectangle"></div>

    <div class="group">
      <div class="ellipse"></div>
      <div class="text-wrapper">IK</div>
    </div>

    <div class="div">IsyaratKita</div>

    <!-- Menu (jadi link biar bisa klik) -->
    <a class="text-wrapper-2" href="/#home">HOME</a>
    <a class="text-wrapper-3" href="/#tentang">TENTANG</a>
    <a class="text-wrapper-4" href="/#fitur">FITUR</a>
    <a class="text-wrapper-5" href="/#harga">HARGA</a>

    <div class="rectangle-2"></div>
    <a class="text-wrapper-6" href="/login">MASUK</a>

    <div class="rectangle-3"></div>
    <div class="text-wrapper-7">SIGN UP</div>

    <!-- FORM REGISTER -->
    <form method="POST" action="/register" class="form-register">
      @csrf

      <div class="group-2">
        <div class="rectangle-4"></div>
        <input class="input input-name" type="text" name="name" placeholder="Nama Pengguna" required>
      </div>

      <div class="group-3">
        <div class="rectangle-4"></div>
        <input class="input input-email" type="email" name="email" placeholder="Email" required>
      </div>

      <div class="group-4">
        <div class="rectangle-4"></div>
        <input class="input input-pass" type="password" name="password" placeholder="Password" required>
      </div>

      <div class="group-5">
        <div class="rectangle-4"></div>
        <input class="input input-pass2" type="password" name="password_confirmation" placeholder="Konfirmasi Password" required>
      </div>

      <div class="group-6">
        <button type="submit" class="btn-signup">
          SIGN UP
        </button>
      </div>
    </form>

    <a class="text-wrapper-13" href="/login">Sudah punya akun?</a>

  </div>

</body>
</html>