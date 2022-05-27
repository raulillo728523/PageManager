<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>Inicio</title>

    <!-- Styles -->
    <link href="{{asset('resources/assets/css/core.min.css')}}" rel="stylesheet">
    <link href="{{asset('resources/assets/css/thesaas.min.css')}}" rel="stylesheet">
    <link href="{{asset('resources/assets/css/style.css')}}" rel="stylesheet">

    <!-- Favicons -->
    <!-- <link rel="apple-touch-icon" href="{{asset('resources/assets/img/apple-touch-icon.png')}}"> -->
    <link rel="icon" href="{{asset('resources/assets/img/tofly.png')}}">
  </head>

  <body>


    <!-- Topbar -->
    <nav class="topbar topbar-inverse topbar-expand-md topbar-sticky">
      <div class="container">
        
        <div class="topbar-left">
          <button class="topbar-toggler">&#9776;</button>
          <a class="topbar-brand" href="#">
            <img class="logo-default" src="{{asset('resources/assets/img/tofly2.png')}}" alt="logo">
            <img class="logo-inverse" src="{{asset('resources/assets/img/tofly.png')}}" alt="logo">
          </a>
        </div>


        <div class="topbar-right">
          <ul class="topbar-nav nav">
            <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
            <li class="nav-item">
              <a class="nav-link" href="#">Categorias <i class="fa fa-caret-down"></i></a>
              <div class="nav-submenu">
                <a class="nav-link" href="#">Hoteleria</a>
                <a class="nav-link" href="#">Naturista</a>
              </div>
            </li>
            <li class="nav-item">
              
              <a class="nav-link">Bienvenido {{ Auth::user()->name }}</a>
              
              <a class="nav-link" href="javascript:void();" type="submit" onclick="document.getElementById('my_form').submit();">Cerrar Sesion</a></li>
            <form method="POST" action="{{ route('logout') }}" id="my_form">
                @csrf
                <!-- <button type="submit" class="nav-item"
                    role="button">Cerrar Sesión</button> -->
            </form>
          </ul>
        </div>


      </div>
    </nav>
    <!-- END Topbar -->



    <!-- Header -->
    <header class="header header-inverse" style="background-color: #3f48cc">
      <div class="container text-center">

        <div class="row">
          <div class="col-12 col-lg-8 offset-lg-2"> 

            <h1>Páginas más nuevas</h1>
            <p class="fs-20 opacity-70">Aqui encontraras las páginas más nuevas posteadas.</p>

          </div>
        </div>

      </div>
    </header>
    
    <!-- Main container -->
    <main class="main-content">




      <!--
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      | Basic cards
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      !-->
      <section class="section bg-gray">
        <div class="container">
          @foreach ($Registros as $registro)

          <div class="card mb-30">
            <div class="row align-items-center h-full">
              <div class="col-12 col-md-4">
                <a><img src="{{asset('resources/assets/img/blog-1.jpg')}}" alt="..."></a>
              </div>

              <div class="col-12 col-md-8">
                <div class="card-block">
                  <h4 class="card-title">{{$registro->name}}</h4>
                  <p class="card-text">{{$registro->description}}</p>
                  <a class="fw-600 fs-12" href="{{route('template',$registro->id)}}">Página<i class="fa fa-chevron-right fs-9 pl-8"></i></a>
                </div>
              </div>
            </div>
          </div>

          @endforeach

        </div>
      </section>

    </main>
    <!-- END Main container -->

    <!-- Footer -->
    <footer class="site-footer">
      <div class="container">
        <div class="row gap-y align-items-center">
          <div class="col-12 col-lg-3">
            <p class="text-center text-lg-left topbar-brand">
              <a href="#"><img src="{{asset('resources/assets/img/tofly2.png')}}" alt="logo"></a>
            </p>
          </div>

          <div class="col-12 col-lg-6">
            <ul class="nav nav-primary nav-hero">
              <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
              </li>
            </ul>
          </div>

          <div class="col-12 col-lg-3">
            <div class="social text-center text-lg-right">
              <a class="social-facebook" href="https://www.facebook.com/ruls.espinito"><i class="fa fa-facebook"></i></a>
              <a class="social-twitter" href="https://twitter.com/ruls7285"><i class="fa fa-twitter"></i></a>
              <a class="social-instagram" href="https://www.instagram.com/raul.espinoc/"><i class="fa fa-instagram"></i></a>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- END Footer -->



    <!-- Scripts -->
    <script src="{{url('resources/assets/js/core.min.js')}}"></script>
    <script src="{{url('resources/assets/js/thesaas.min.js')}}"></script>
    <script src="{{url('resources/assets/js/script.js')}}"></script>

  </body>
</html>


<!-- public function run()
    {
        User::create([
            'name'      =>  'Marco Raúl Espino Contreras',
            'username'  =>  'Raul',
            'email' => 'rulo_espino@hotmail.com',
            'rol'       =>  'administrador',
            'password'  =>  Hash::make('123456')
        ]);
    } -->