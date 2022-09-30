<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Parcial1</title>

<style>
 footer {
  background-color:#1A1A1A;
  height: 50%;
  color: white;
  padding: 15px;
  margin-top: 10%;
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
                            <a class="nav-link active" aria-current="page" href="http://parcial1.com:81/index.php"><h4>Home</h4></a>
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
    <div style="background-color: #D5DBDB;" class="container" ; >
        
        <br>
        <div class="container-fluid">
        <img  src="../imagenes/logo.jpg" class="rounded mx-auto d-block" alt=". . .">
        </div>
        <br>
        <h1 style="text-align:center;"> Modelos</h1>
        <br>
        <div class="row">
            <div class="col-x1-2 col-lg-3 col-md4 col-sm-6">
                <div class="card">
                    <img src="../imagenes/ranger.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                    <p class="card-text">Ford Ranger</p>
                        <p class="card-text">Año 2022</p>
                        <a href="http://parcial1.com:81/Mostrar.php"target="_parent"><button type="button" class="btn btn-primary">Ver ofertas</button></a>
                    </div>
                </div>
            </div>
            <div class="col-x1-2 col-lg-3 col-md4 col-sm-6">
                <div class="card">
                    <img src="../imagenes/hilux1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                    <p class="card-text">Hilux</p>
                    <p class="card-text">Año 2020</p>
                    <a href="http://parcial1.com:81/Mostrar.php"target="_parent"><button type="button" class="btn btn-primary">Ver ofertas</button></a>
                    </div>
                    
                </div>
            </div>
            <div class="col-x1-2 col-lg-3 col-md4 col-sm-6">
                <div class="card">
                    <img src="../imagenes/rio.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                    <p class="card-text">Kia Rio</p>
                    <p class="card-text">Año 2022</p>
                    <a href="http://parcial1.com:81/Mostrar.php"target="_parent"><button type="button" class="btn btn-primary">Ver ofertas</button></a>
                    </div>
                </div>
            </div>
            <div class="col-x1-2 col-lg-3 col-md4 col-sm-6">
                <div class="card">
                    <img src="../imagenes/creta.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                    <p class="card-text">Ford Creta</p>
                    <p class="card-text">Año 2020</p>
                    <a href="http://parcial1.com:81/Mostrar.php"target="_parent"><button  style="text-align:center; "type="button" class="btn btn-primary">Ver ofertas</button></a>
                    </div>
                </div>
            </div>
            
        </div>
        <br>

        <div class="container">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../imagenes/auto1.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Ford Tiburon</h5>
                            <p>Seguro incluido</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="../imagenes/logi.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5></h5>
                            <p>Calidad, exelencia y servicio.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="../imagenes/hondacivic.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Honda Civic</h5>
                            <p>40$ en combustible</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
    <br>
    <div class="container-fluid">
        
    </div>
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