<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>ToFly - Login</title>

    <!-- Styles -->
    <link href="{{asset('resources/assets/css/core.min.css')}}" rel="stylesheet">
    <link href="{{asset('resources/assets/css/thesaas.min.css')}}" rel="stylesheet">
    <link href="{{asset('resources/assets/css/style.css')}}" rel="stylesheet">

    <!-- Favicons -->
    <link rel="icon" href="{{asset('resources/assets/img/tofly2.png')}}">
  </head>

  <body class="mh-fullscreen bg-img center-vh p-20" style="background-image: url({{asset('resources/assets/img/fondologin.jpg')}});">




    <div class="card card-shadowed p-50 w-400 mb-0" style="max-width: 100%">
      <h5 class="text-uppercase text-center">Login</h5>
      <br><br>

      <form method="POST" action="{{ route('login') }}">
      @csrf
        <div class="form-group">
          <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="email" autofocus placeholder="Username">
          @error('username')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <small id="emailHelp" class="form-text text-muted" style="font-size: 18px;">No compartas tu usuario con nadie.</small>
        </div>

        <div class="form-group">
          <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
          @error('password')
            <span style="color: red" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="form-group">
          <button class="btn btn-bold btn-block btn-primary" type="submit">{{ __('Ingresar') }}</button>
        </div>
        
      </form>
      <form action="{{ route('register') }}">
        <div class="form-group">
            <button class="btn btn-bold btn-block btn-primary" type="submit">{{ __('Registrar') }}</button>
            </div>
      </form>
      

    </div>

    <!-- Scripts -->
    <script src="assets/js/core.min.js"></script>
    <script src="assets/js/thesaas.min.js"></script>
    <script src="assets/js/script.js"></script>

  </body>
</html>
