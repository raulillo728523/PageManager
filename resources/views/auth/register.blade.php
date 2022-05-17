<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>ToFly - Registro</title>

    <!-- Styles -->
    <link href="{{asset('resources/assets/css/core.min.css')}}" rel="stylesheet">
    <link href="{{asset('resources/assets/css/thesaas.min.css')}}" rel="stylesheet">
    <link href="{{asset('resources/assets/css/style.css')}}" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png">
    <link rel="icon" href="{{asset('resources/assets/img/tofly2.png')}}">
  </head>

  <body class="mh-fullscreen bg-img center-vh p-20" style="background-image: url({{asset('resources/assets/img/bg-girl.jpg')}});">

    <div class="card card-shadowed p-50 w-400 mb-0" style="max-width: 100%">
      <h5 class="text-uppercase text-center">Registro</h5>
      <br><br>

      <form class="form-type-material">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Username">
        </div>

        <div class="form-group">
          <input type="text" class="form-control" placeholder="Email address">
        </div>

        <div class="form-group">
          <input type="password" class="form-control" placeholder="Password">
        </div>

        <div class="form-group">
          <input type="password" class="form-control" placeholder="Password (confirm)">
        </div>

        <br>
        <button class="btn btn-bold btn-block btn-primary" type="submit">Register</button>
      </form>
    </div>

    <!-- Scripts -->
    <script src="{{asset('resources/assets/js/core.min.js')}}"></script>
    <script src="{{asset('resources/assets/js/thesaas.min.js')}}"></script>
    <script src="{{asset('resources/assets/js/script.js')}}"></script>

  </body>
</html>
