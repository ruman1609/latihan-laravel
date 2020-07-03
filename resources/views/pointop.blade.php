<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>
      @if($nilai >50)
        Mantul
      @elseif($nilai >80)
        Perpek
      @else
        Cupu
      @endif
    </title>
  </head>
  <body>
    @for($i = 1; $i <= $nilai; $i++)
      <p>Value is {{ $i }}</p>
    @endfor
  </body>
</html>
