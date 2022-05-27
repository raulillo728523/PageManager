<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>TheSaaS - Senior Front-end Engineer</title>

    <!-- Styles -->
    <link href="{{asset('resources/assets/css/core.min.css')}}" rel="stylesheet">
    <link href="{{asset('resources/assets/css/thesaas.min.css')}}" rel="stylesheet">
    <link href="{{asset('resources/assets/css/style.css')}}" rel="stylesheet">

    <!-- Favicons -->
    <link rel="icon" href="{{asset('resources/assets/img/favicon.png')}}">
  </head>

  <body>
  
    <!-- Topbar -->
    <nav class="topbar topbar-inverse topbar-expand-md topbar-sticky">
      <div class="container">
        
        <div class="topbar-left">
          <button class="topbar-toggler">&#9776;</button>
          <a class="topbar-brand">
            <img class="logo-default" src="{{asset('resources/assets/img/logo.png')}}" alt="logo">
            <img class="logo-inverse" src="{{asset('resources/assets/img/logo-light.png')}}" alt="logo">
          </a>
        </div>

        <div class="topbar-right">
          <ul class="topbar-nav nav">
            <li class="nav-item"><a class="nav-link" href="/">Home</a></li><li class="nav-item"><a class="nav-link" href="javascript:void();" type="submit" onclick="document.getElementById('my_form').submit();">Cerrar Sesion</a></li>
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

    @foreach($Vista as $template)

    <!-- Header -->
    <header class="header header-inverse" style="background-color: #c2b2cd;">
      <div class="container text-center">

        <div class="row">
          <div class="col-12 col-lg-8 offset-lg-2">

            <h1>{{$template->name}}</h1>
            <p class="fs-20"><i class="fa fa-map-marker mr-8"></i>{{$template->city}}</p>

            <hr class="w-50 ">

            <!-- <a class="btn btn-xl btn-round btn-white w-200" href="#" data-scrollto="section-apply">Contacto</a> -->
            <a class="btn btn-xl btn-round btn-white w-200" href="#" data-scrollto="section-apply">Servicios</a>

          </div>
        </div>

      </div>
    </header>
    <!-- END Header -->




    <!-- Main container -->
    <main class="main-content">




      <!--
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      | Description
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      !-->
      <section class="section bg-gray" id="section-apply">
        <div class="container">

          <div class="row">
            <div class="col-12 col-md-8 offset-md-2">

              <p class="lead">{{$template->description}}</p>

              <br><br>
              
              <h5>Servicios</h5>
              <ul>
                @if ($template->service1 != '')
                <li>{{$template->service1}}</li>
                @endif
                @if ($template->service2 != '')
                <li>{{$template->service2}}</li>
                @endif
                @if ($template->service3 != '')
                <li>{{$template->service3}}</li>
                @endif
                @if ($template->service4 != '')
                <li>{{$template->service4}}</li>
                @endif
                @if ($template->service5 != '')
                <li>{{$template->service5}}</li>
                @endif
                @if ($template->service6 != '')
                <li>{{$template->service6}}</li>
                @endif
              </ul>

              <br><br>

              <h5>Historia</h5>
              <p class="lead"><li>{{$template->history}}</li></p>

            </div>
          </div>


        </div>
      </section>


    </main>
    <!-- END Main container -->

    <!-- Footer -->
    <footer class="site-footer">
      <div class="container">
        <div class="row gap-y align-items-center">
          <div class="col-12 col-lg-3">
            <p class="text-center text-lg-left">
              <a><img src="{{asset('resources/assets/img/logo.png')}}" alt="logo"></a>
            </p>
          </div>

          <div class="col-12 col-lg-6">
            <ul class="nav nav-primary nav-hero">
              <li class="nav-item">
                <a class="nav-link"><li>{{$template->email}}</li></a>
              </li>
              <li class="nav-item">
                <a class="nav-link"><li>{{$template->telephone}}</li></a>
              </li>
              <li class="nav-item">
                <a class="nav-link"><li>{{$template->address}}</li></a>
              </li>
            </ul>
          </div>

          <!-- <div class="col-12 col-lg-3">
            <div class="social text-center text-lg-right">
              <a class="social-facebook" href="https://www.facebook.com/thethemeio"><i class="fa fa-facebook"></i></a>
              <a class="social-instagram" href="https://www.instagram.com/thethemeio/"><i class="fa fa-instagram"></i></a>
            </div>
          </div> -->
        </div>
      </div>
    </footer>
    <!-- END Footer -->



@endforeach
    <!-- Scripts -->
    <script src="{{asset('resources/assets/js/core.min.js')}}"></script>
    <script src="{{asset('resources/assets/js/thesaas.min.js')}}"></script>
    <script src="{{asset('resources/assets/js/script.js')}}"></script>

  </body>
</html>
