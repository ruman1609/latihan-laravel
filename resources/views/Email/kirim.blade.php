@if(session()->has("msg"))
  <script type="text/javascript">
    alert("{{session()->get("msg")}}");
  </script>
@endif
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Test Kirim E-Mail</title>
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
    <form class="kotak email" action="/kirim/proses" method="post">
      <h3>Kirim Pesan</h3>
      @csrf
      <input type="email" name="email" placeholder="Email yang dituju" required><br>
      <input type="text" name="judul" placeholder="Judul Pesan" required><br>
      <textarea name="isi" rows="6" cols="50" placeholder="Isi Pesan" style="resize:none" required></textarea><br>
      <input type="submit" value="Kirim">
    </form>
    <script type="text/javascript" src="{{url("/bootstrap/dist/js/jquery.min.js")}}"></script>
    <script type="text/javascript" src="{{url("/bootstrap/dist/js/bootstrap.min.js")}}"></script>
  </body>
</html>
