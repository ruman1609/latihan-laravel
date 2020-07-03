<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tutorial Database</title>
    <link rel="stylesheet" href="{{url("./assets/test.css")}}">
  </head>
  <body>
    <div class="box">
      <h1>INPUT DATA</h1>
    </div>
    <form action="/dbTutor/kirim" method="post" class="kotak">
      @csrf
      @if(count($errors)>0)
      <ol>
        @foreach($errors->all() as $e)
          <li>{{$e}}</li>
        @endforeach
      </ol>
      @endif
      <input type="text" name="nama" placeholder="Nama" required> <br>
      <input type="number" name="nim" placeholder="NIM" required> <br>
      <input type="submit" value="Konfirmasi">
    </form>
  </body>
</html>
