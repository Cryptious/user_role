<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <title></title>

<!-- Bootstrap core CSS -->
    <link href = {{ asset("bootstrap/css/bootstrap.min.css") }} rel="stylesheet" />
    <style>
      .is-complete {
        text-decoration: line-through;
      }
    </style>
  </head>
  <body>
    <div class="container">
      @yield('content')
    </div>

<!-- jQuery first, then Bootstrap JS. -->
<script src={{ asset("bootstrap/js/jquery-3.4.1.min.js") }}></script>
<script src={{ asset("bootstrap/js/bootstrap.min.js") }}></script>
  </body>
</html>
