<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <meta http-equiv="refresh" content="1"> -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
</head>

<body>
    <nav class="navbar navbar-dark" style="background-color: #e3f2fd;">
        <div class="container-fluid">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" style="background-color: #6c6c74; color:#fff;" class="btn btn-secondary"
                    role="button">Cerrar Sesión</button>
            </form>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-primary" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <div class="row mt-3 mb-5">
        <div class="col-4 ml-5">
            <h4>:</h4>
            <h5></h5>
        </div>
        <div class="col">
            <h4>Tipologia</h4>
            <h5>Articulos</h5>
        </div>
        <div class="col">
            <h4>Resultados</h4>
            <h5></h5>
        </div>
        <div class="col">
            <h4>Resultados/día</h4>
            <h5></h5>
        </div>
        <div class="col">
        <form method="post" enctype="multipart/form-data" action="{{ route('print_chart') }}">
            @csrf
            <input type="hidden" name="charData" id="charInput">
            <button type="submit" class="btn btn-secondary">Imprimir Reporte</button>
        </form>
        </div>
    </div>

    <div class="card shadow ml-4 col-8">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Dominios</h6>
        </div>
        <div class="card-body">
            <div id="draw-charts"></div>
        </div>
    </div>

    <div class="col-lg-6" >
                <div class="card shadow mb-4" hidden>
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Imagen</h6>
                    </div>
                    <div class="card-body">
                        <div id="draw-char"></div>
                    </div>
                </div>
            </div>

    <div class="row d-flex justify-content-center mt-5">
        <div class="col-11">
            <div class="card">
                <div class="card-header text-white" style="background-color: #4267B2;">
                    Resultados
                </div>
            </div>
        </div>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
<script src="https:////cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
    crossorigin="anonymous">
</script>
<!-- DATATABLES -->
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js">
</script>
<!-- BOOTSTRAP -->
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js">
</script>
<!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script> -->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


<script>
console.log("hola");
$(document).ready(function() {
    $('#example').DataTable().draw();
    // timerId = setInterval(cargarTabla, 20000);
    // setTimeout(() => {
    //     clearInterval(timerId);
    // }, 60000);
});
</script>

</html>