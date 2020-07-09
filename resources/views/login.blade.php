@if(session()->has("daftar"))
<?php echo("<script type=\"text/javascript\">alert(\"".session()->get("daftar")."\")</script>") ?>
@endif
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
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
      <h1>Login</h1>
      <form action="/middletest/proses" method="post">
        @csrf
        <input type="text" name="user" placeholder="Username"><br>
        <input type="password" name="pass" placeholder="Password"> <br>
        <input type="submit" value="Masuk">
      </form>
      <a href="/daftar" class="linkitam">Daftar</a>
      @if(session()->has("err"))
        <div class="alert alert-danger" style="margin: 15px 5px 0 5px;">
          <strong>{{session()->get("err")}}</strong>
        </div>
      @endif
    </div>
    <script type="text/javascript" src="{{url("/bootstrap/dist/js/jquery.min.js")}}"></script>
    <script type="text/javascript" src="{{url("/bootstrap/dist/js/bootstrap.min.js")}}"></script>
  </body>
</html>
