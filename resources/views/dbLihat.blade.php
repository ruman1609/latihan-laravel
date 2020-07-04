<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Lihat Database</title>
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
    <table class="untuk">
      <tr>
        <th>NIM</th>
        <th>NAMA</th>
      </tr>
      @foreach($data as $item)
      <tr>
        <td>{{ $item->nim }}</td>
        <td>{{ $item->nama }}</td>
      </tr>
      @endforeach
    </table>
  </body>
</html>
