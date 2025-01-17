<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>MASUK</title>
    <link rel="stylesheet" href="{{url("./assets/test.css")}}">
    <link rel="stylesheet" href="{{url("./bootstrap/dist/css/bootstrap.min.css")}}">
  </head>
  <body>
    <nav class="head">
      <h1>Latihan Laravel</h1>
      <ol>
        <h4 class="navigasi">Navigation</h4>
        <li><a href="/">Beranda</a></li>
        <li><a href="/dbTutor">Tutorial DB</a></li>
        <li><a href="/akun">Test Input</a></li>
        <li><a href="/middletest">Login</a></li>
      </ol>
    </nav>
    <form action="/akun/masuk" method="post" class="kotak isi">
      <h1>FORM INPUT</h1>
      @csrf
      <input type="text" name="nama" placeholder="Nama" required> <br>
      <input type="number" name="umur" placeholder="Umur" required> <br>
      <input type="email" name="email" placeholder="E-Mail" required> <br>
      <input type="submit" value="Konfirmasi">
    </form>
    <script type="text/javascript" src="{{url("/bootstrap/dist/js/jquery.min.js")}}"></script>
    <script type="text/javascript" src="{{url("/bootstrap/dist/js/bootstrap.min.js")}}"></script>
  </body>
</html>
