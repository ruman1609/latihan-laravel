<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>MASUK</title>
    <link rel="stylesheet" href="{{url("./assets/test.css")}}">
  </head>
  <body>
    <div class="box">
      <h1>FORM INPUT</h1>
    </div>
    <form action="/akun/masuk" method="post" class="kotak">
      @csrf
      <input type="text" name="nama" placeholder="Nama" required> <br>
      <input type="number" name="umur" placeholder="Umur" required> <br>
      <input type="email" name="email" placeholder="E-Mail" required> <br>
      <input type="submit" value="Konfirmasi">
    </form>
  </body>
</html>
