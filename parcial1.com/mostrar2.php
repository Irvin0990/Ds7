<?php

$marcadeauto=$_GET["marcadeauto"];
$modelo=$_GET["modelo"];
$precio=$_GET["precio"];
$diasdealquiler=$_GET["diasdealquiler"];
$precioapagar=$_GET["precioapagar"];

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Title</title>

<style>
 footer {
  background-color:#1A1A1A;
  height: 50%;
  color: white;
  padding: 15px;
  margin-top: 20%;
  margin-bottom: 0%;
}

.main1 { 
  display:flex;
  margin:0 auto;
}

a img:hover {
    color: #fff;
}

    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><h2>Autos Prime</h2></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="http://parcial1.com:81/index.php"><h4>Home</h4></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://parcial1.com:81/Mostrar.php"><h4>Mostrar autos</h4></a>
                        </li>
                        
                        
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>

<div class="container-sm">

<div class="row">
   
    <div class="card border-light mb-3" style="margin: 50px;">

      
        <table class="table table-secondary table-striped table-hover table-bordered table-sm table-responsive-sm">
            <thead>
                <tr> 
                    <th scope="col">Marca</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Dias de alquiler</th>
                    <th scope="col">Precio a pagar</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row"> <?php echo $marcadeauto ?> </th>
                    <td> <?php echo $modelo ?> </td>
                    <td> <?php echo $precio ?> </td>
                    <td> <?php echo $diasdealquiler ?> </td>
                    <td><?php echo $precioapagar ?> </td>
                </tr>
            </tbody>
        </table>
        
        
        <br>

    </div>

</div>

</div>
<br>
<footer>
  <div class="container">
    <div class="row">
    <div class="col-xs-12 col-md-6 text-left">
            <h6 class="text-muted lead">CONTACTO:</h6>
            <h6 class="text-muted">
            Ciudad de Panamá No. 166-71 Local 2<br>
            El cangrejo.<br>
            Teléfonos: 65055341 – 256-9124.<br>
            </h6>
        </div>

        <div class="col-xs-12 col-md-6 text-right">
            <h6 class="text-muted lead">ENCUENTRANOS EN LAS REDES</h6>
            <div class="redes-footer">
              <a href="https://www.facebook.com/"><img src="../imagenes/youtube.png"></a>
              <a href="https://twitter.com/"><img src="../imagenes/facebook.png"></a>
              <a href="https://www.youtube.com/"><img src="../imagenes/twiter.png"></a>
            </div>
        </div>
    </div>
    <div class="row"> 

        <div class="col-md-12 text-right">
            <p class="text-muted small">Autos Prime, Calidad y servicio @2022.<br> Todos los derechos reservados.</p>
        </div>
        
    </div>

    </div>
  </div>  
</div>
</footer>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>