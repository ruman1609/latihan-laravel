@if(session()->has("msg"))
<?php echo("<script>alert(\"".session()->get("msg")."\")</script>"); ?>
@endif
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Lihat Database</title>
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
    <div class="kotak tampil">
      <form action="/dbTutor/liat/cari" method="get" class="search">
        Nama yang ingin dicari <br>
        <input type="text" name="nama">
        <input type="submit" value="Search">
      </form>
      @if($ada)
        <table class="untuk">
          <tr>
            <th>NIM</th>
            <th>NAMA</th>
            <th>AKSI</th>
          </tr>
          @foreach($data as $item)
          <tr>
            <td>{{ $item->nim }}</td>
            <td>{{ $item->nama }}</td>
            <td><a href="/dbTutor/edit/{{$item->nim}}" class="linkitam">edit</a> <!-- Tidak bisa kalau di action form -->
              <a href="/dbTutor/delete/{{$item->nim}}" class="linkitam">delete</a></td>
            <!-- Jadi cuman item->nim tu jadi penentu isi linknya -->
          </tr>
          @endforeach
        </table>
      @else
        <div class="alert alert-primary" role="alert" style="margin: 45px; text-align:center">
          Data tidak ada yang bisa ditampilkan
        </div>
      @endif
      {{ $data->links() }}
    </div>
    <script type="text/javascript" src="{{url("/bootstrap/dist/js/jquery.min.js")}}"></script>
    <script type="text/javascript" src="{{url("/bootstrap/dist/js/bootstrap.min.js")}}"></script>
  </body>
</html>
