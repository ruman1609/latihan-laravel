<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Test Foto</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
    <form action="{{route("testfoto.store")}}" method="post" enctype="multipart/form-data">
      <!-- Kalau mau befile mesti ada enctype="multipart/form-data" -->
      @csrf
      <input type="file" name="foto" id="foto" value="Pilih Gambar" accept="image/*"><br>
      <input type="submit" value="SIMPAN!">
    </form>
  </body>
</html>
