<!DOCTYPE html>
<html>
  <head>
    <title>Weibo App</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  </head>

  <body>
    @include('loy._header')

    <div class="container">
      <div class="offset-md-1 col-md-10">
        @include('shared._messages')
        @yield('content')
        @include('loy._footer')
      </div>
    </div>

    <script src="{{asset('/js/app.js')}}"></script>
  </body>
</html>
