
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>
    @yield('title')
  </title>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../../resources/plugins/fontawesome-free/css/all.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../../../resources/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../../resources/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../../resources/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

</head>
<body style="background: #edf1f7">


    <div style="justify-content: center; align-items: center; display: flex; padding: 60px; padding-top: 90px;">
        <div class="card mb-3" style="max-width: 70%;">
                <div class="row no-gutters">
                  <div class="col-md-12">
                    <div class="card-body" >
                        <div class="text-center">
                            <h3 ><strong>Inicia Sesión</strong></h3>
                        </div>
                        <br>
                        <small style="font-size: 16px;" class="card-text">Por favor, ingrese su usuario y contraseña para acceder al sistema.</small>
                        <hr>
                      <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                            <label for="username" style="font-size: 25px;">Usuario</label>
                            <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="email" autofocus>

                            @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <small id="emailHelp" class="form-text text-muted" style="font-size: 18px;">No compartas tu usuario con nadie.</small>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1" style="font-size: 25px;">Contraseña</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span style="color: red" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                {{-- <button type="submit"  style="background-color: #248c9c; color:white; float: right" class="btn">
                                    {{ __('Ingresar') }}
                                </button> --}}
                                <button type="submit" class="btn btn-secondary" style="float: right;">
                                    {{ __('Ingresar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    </div>
                  </div>
                </div>
            </div>
        </div>

    </body>
</html>