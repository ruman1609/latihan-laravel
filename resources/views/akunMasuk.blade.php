<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Masuk!</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
  </head>
  <body>
    <?php
      echo("<h1>Masuk</h1><p>Nama anda $nama</p><p>Umur $umur tahun</p><p>E-Mail anda $email</p>");
    ?>
    <form action="/akun/masuk/point" method="post" placeholder="Point">
      @csrf
      <input type="number" name="point">
      <input type="submit" value="Gas!!">
    </form>
  </body>
</html>
