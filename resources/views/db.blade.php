<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tutorial Database</title>
    <link rel="stylesheet" href="{{url("./assets/test.css")}}">
  </head>
  <body>
    <nav>
      <h1>Latihan Laravel</h1>
      <ol>
        <h4 class="navigasi">Navigation</h4>
        <li><a href="/">Beranda</a></li>
        <li><a href="/dbTutor">Tutorial DB</a></li>
        <li><a href="/akun">Test Input</a></li>
      </ol>
    </nav>
    <div class="kotak">
      <form action="/dbTutor/kirim" method="post">
        @csrf
        @if(count($errors)>0)
        <ul class="error">
          @foreach($errors->all() as $e)
            <li>{{$e}}</li>
          @endforeach
        </ul>
        @endif
        <input type="text" name="nama" placeholder="Nama" required> <br>
        <input type="number" name="nim" placeholder="NIM" required> <br>
        <input type="submit" value="Konfirmasi">
      </form>
      <a href="/dbTutor/liat" class="linkitam">Lihat Data</a>
    </div>
  </body>
</html>
