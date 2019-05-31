<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>MiRutaCR</title>
        <meta name="description" content="MiRutaCR" />
        <meta name="viewport" content="width=device-width,initial-scale=1" />
        <link rel="shortcut icon" type="image/x-icon" href="view/img/icono.ico" />
        <link rel="stylesheet" type="text/css" href="view/css/estilos.css" />

        <script type="text/javascript" src="View/js/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link href="view/css/styles.css" rel="stylesheet">
   
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

</head>
<body >
    <header>

    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">  
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>     
     <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
         <div class="navbar-nav">
             <a class="nav-item nav-link" href="?principal">Principal</a>
             <a class="nav-item nav-link" href="?creditos">Creditos</a>             
             <a class="nav-item nav-link" href="?inicioSesion">Iniciar Sesión</a>        
            </div>
        </div>
    </nav>
            
    </header>
    <section id="contenido" style="min-height: 20%; width:80%; margin:0 auto; text-align: center;">

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <!-- Slide One - Set the background image for this slide in the line below -->
                    <div class="carousel-item active" style="background-image: url('View/images/FONDO1.png')">
                    <br><br><br><br>
                    <label id="sitioTuristico">Sitios Turisticos</label>
                        <div class="carousel-caption d-none d-md-block">
                            <h3>Ruinas Santiago Apóstol</h3>
                            <p>Cartago</p>
                        </div>
                    </div>
                    <!-- Slide Two - Set the background image for this slide in the line below -->
                    <div class="carousel-item" style="background-image: url('View/images/FONDO2.png')">
                    <br><br><br><br>
                    <label id="sitioTuristico">Sitios Turisticos</label>
                        <div class="carousel-caption d-none d-md-block">
                            <h3>Iglesia de Orosí</h3>
                            <p>Orosi</p>
                        </div>
                    </div>
                    <!-- Slide Three - Set the background image for this slide in the line below -->
                    <div class="carousel-item" style="background-image: url('View/images/FONDO3.png')">
                    <br><br><br><br>
                    <label id="sitioTuristico">Sitios Turisticos</label>
                        <div class="carousel-caption d-none d-md-block">
                            <h3>Volcán Irazú</h3>
                            <p>Santa Rosa</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
