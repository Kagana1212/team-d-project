<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/destyle.css@3.0.2/destyle.min.css">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <title>Lara-Travel</title>

</head>
<body>
  @include('nav')
  @yield('content')
  @include('footer')
</body>
</html>