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

  <body class="mh-fullscreen bg-img center-vh p-20" style="background-image: url({{asset('resources/assets/img/fondologin.jpg')}});">

    <div class="card card-shadowed p-50 mb-0" style="max-width: 100%">
      <h5 class="text-uppercase text-center">Registro</h5>
      <ul class="nav mb-3 align-items-center d-flex flex-row justify-content-center alig-items-center" id="pills-tab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-user" role="tab" aria-controls="pills-home" aria-selected="true">Visitante</a>
        </li>
        <li class="nav-item" style="margin-left: 38px;" >
          <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-client" role="tab" aria-controls="pills-profile" aria-selected="false">Empresa</a>
        </li>
      </ul>
      <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-user" role="tabpanel" aria-labelledby="pills-home-tab">
          <form method="POST" action="{{ route('agregarusuario') }}">
          @csrf

            <div class="form-group">
              <input type="text" id="username" name="username" class="form-control" placeholder="Username">
            </div>

            <div class="form-group">
              <input type="text" id="name" name="name" class="form-control" placeholder="Nombre completo">
            </div>

            <div class="form-group">
              <input type="text" id="email" name="email" class="form-control" placeholder="Email address">
            </div>

            <div class="form-group">
              <input type="password" id="password" name="password" class="form-control" placeholder="Password">
            </div>

            <div class="form-group">
              <input type="password" class="form-control" placeholder="Password (confirm)">
            </div>

            <br>
            <button class="btn btn-bold btn-block btn-primary" type="submit">Registrar</button>
          </form>
        </div>
        <div class="tab-pane fade" id="pills-client" role="tabpanel" aria-labelledby="pills-profile-tab">
          <form method="POST" action="{{ route('agregarcliente') }}">
            @csrf

              <div class="form-group">
                <input type="text" id="name" name="name" class="form-control" placeholder="Nombre de la Empresa"></input>
              </div>

              <div class="form-group row d-flex flex-row justify-content-center alig-items-center">
                <input type="text" id="username" name="username" class="form-control" style="width: 233px;" placeholder="Usuario">
                &nbsp;
                &nbsp;
                <input type="text" id="email" name="email" class="form-control" style="width: 233px;" placeholder="Email">
                &nbsp;
                &nbsp;
                <input type="text" id="city" name="city" class="form-control" style="width: 209px;" placeholder="Ciudad">
              </div>

              <div class="form-group row d-flex flex-row justify-content-center alig-items-center">
                <input type="text"  id="address" name="address" class="form-control" style="width: 479px;" placeholder="Direccion">
                &nbsp;
                &nbsp;
                <input type="text"  id="telephone" name="telephone" class="form-control" style="width: 210px;" placeholder="Numero Telefonico">
              </div>

              <div class="form-group">
                <textarea type="text" id="description" name="description" style="height: 120px; width: 700px;" class="form-control" placeholder="Descripcion de la empresa"></textarea>
              </div>

              <div class="form-group row d-flex flex-row justify-content-center alig-items-center">
                <input type="text" id="service1" name="service1" class="form-control" style="width: 225px;" placeholder="Servicio 1">
                &nbsp;
                &nbsp;
                <input type="text"  id="service2" name="service2" class="form-control" style="width: 226px;" placeholder="Servicio 2">
                &nbsp;
                &nbsp;
                <input type="text"  id="service3" name="service3" class="form-control" style="width: 225px;" placeholder="Servicio 3">
              </div>

              <div class="form-group row d-flex flex-row justify-content-center alig-items-center">
                <input type="text"  id="service4" name="service4" class="form-control" style="width: 225px;" placeholder="Servicio 4">
                &nbsp;
                &nbsp;
                <input type="text"  id="service5" name="service5" class="form-control" style="width: 226px;" placeholder="Servicio 5">
                &nbsp;
                &nbsp;
                <input type="text"  id="service6" name="service6" class="form-control" style="width: 225px;" placeholder="Servicio 6">
              </div>

              <div class="form-group">
                <textarea type="text" id="history" name="history"style="height: 120px; width: 700px;" class="form-control" placeholder="Historia de la empresa"></textarea>
              </div>

              <div class="input-group mb-3">
                <select class="custom-select" style="width: 500px;" id="inputGroupSelect02">
                  <option selected>Elegir...</option>
                  <option value="1">Hoteleria</option>
                  <option value="2">Restaurantes</option>
                  <option value="3">Consensionaria</option>
                </select>
                <div class="input-group-append">
                  <label class="input-group-text" for="inputGroupSelect02">Tipo de empresa</label>
                </div>
              </div>

              <div class="form-group">
                <label for="exampleFormControlFile1">Subir logo (.png ó .jpg)
                </label>
                <input type="file" id="image" name="image" class="form-control-file" id="exampleFormControlFile1">
              </div>

              <div class="form-group row d-flex flex-row justify-content-center alig-items-center">
                <input type="password"  id="password" name="password" class="form-control" style="width: 223px;" placeholder="Contraseña">
                &nbsp;
                <input type="password"  class="form-control" style="width: 223px;" placeholder="Confirmar contraseña">
              </div>

              <br>
              <div class="form-group row d-flex flex-row justify-content-center alig-items-center">
                <button class="btn btn-bold btn-block btn-primary row d-flex flex-row justify-content-center alig-items-center" style="width: 200px;" type="submit">Registrar</button>
              </div>
              <!-- <button class="btn btn-bold btn-block btn-primary row d-flex flex-row justify-content-center alig-items-center" style="width: 200px;" type="submit">Registrar</button> -->
             </form>
          </div>
        </div>
      
    <!-- Scripts -->
    <script src="{{asset('resources/assets/js/core.min.js')}}"></script>
    <script src="{{asset('resources/assets/js/thesaas.min.js')}}"></script>
    <script src="{{asset('resources/assets/js/script.js')}}"></script>
    
  </body>
</html>
