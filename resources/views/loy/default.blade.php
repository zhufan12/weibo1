<!DOCTYPE html>
<html>
  <head>
    <title>Weibo App</title>
    <link rel="stylesheet" href="..{{ mix('css/app.css') }}">
  </head>
  @include('loy._header')
  <body>
    @yield('content')
     @include('loy._footer')
  </body>
</html>
