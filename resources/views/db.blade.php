@if(session()->has("msg"))
<?php echo("<script>alert(\"".session()->get("msg")."\")</script>"); ?>
@endif
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tutorial Database</title>
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
    <div class="kotak isi">
      <h1>Form Mahasiswa</h1>
      <form action="/dbTutor/kirim" method="post">
        @csrf
        <input type="text" name="nama" placeholder="Nama" required> <br>
        <input type="number" name="nim" placeholder="NIM" required> <br>
        <input type="submit" value="Konfirmasi">
      </form>
      <a href="/dbTutor/liat" class="linkitam">Lihat Data</a>
      @if(count($errors)>0)
      <ul class="error">
        @foreach($errors->all() as $e)
        <li>{{$e}}</li><br>
        @endforeach
      </ul>
      @endif
      @if(session()->has("dbError"))
      <h5 style="color: red">{{session()->get("dbError")}}</h1>
      @endif
    </div>
    <script type="text/javascript" src="{{url("/bootstrap/dist/js/jquery.min.js")}}"></script>
    <script type="text/javascript" src="{{url("/bootstrap/dist/js/bootstrap.min.js")}}"></script>
  </body>
</html>
