<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Daftar</title>
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
    <form class="kotak isi" action="/daftar/proses" method="post">
      <h1>Daftar</h1>
      @csrf
      <input type="text" name="user" placeholder="Username"><br>
      <input type="password" name="pass" placeholder="Password"><br>
      <input type="submit" value="Daftar"><br>
      <a href="/middletest" class="linkitam">Login</a>
    </form>
    <script type="text/javascript" src="{{url("/bootstrap/dist/js/jquery.min.js")}}"></script>
    <script type="text/javascript" src="{{url("/bootstrap/dist/js/bootstrap.min.js")}}"></script>
  </body>
</html>
