<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tutorial Database</title>
    <link rel="stylesheet" href="{{url("./assets/test.css")}}">
  </head>
  <body>
    <form action="/akun/masuk" method="post" class="kotak">
      @csrf
      <input type="text" name="nama" placeholder="Nama" required> <br>
      <input type="number" name="nim" placeholder="NIM" required> <br>
      <input type="submit" value="Konfirmasi">
    </form>
  </body>
</html>
