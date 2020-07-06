<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body>
    <form action="/middletest/proses" method="post">
      @csrf
      <input type="text" name="user" placeholder="user">
      <input type="submit" value="Masuk">
    </form>
  </body>
</html>
