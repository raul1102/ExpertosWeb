
<!doctype html>
<html lang="en">
  <head>
  <style>
.grid-container {
  display: grid;
  grid-template-columns: auto ;
}
.grid-item {


  text-align: center;
}

.item1 { grid-area: header; }
.item2 { grid-area: menu; }
.item3 { grid-area: main; }
.item4 { grid-area: right; }
.item5 { grid-area: footer; }
</style>




    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Explorer CR</title>

    <!-- Bootstrap core CSS -->
    <link href="view/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="view/css/main.css">
    <!-- Custom styles for this template -->
    <link href="view/css/carousel.css" rel="stylesheet">
    <style>
    #map {
        height: 300%;
        width: 200%;
      }
    </style>
    
  </head>
  <body>

    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-green">
        <a class="navbar-brand" id="scroll" href="#">Explorer CR</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" id="scroll" href="#mejores-rutas">Mejores Rutas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="scroll" href="#formularios">Búsqueda de Rutas Turísticas</a>
            </li>
            <li class="nav-item-right" style="float: rigth;">
              <a class="nav-link"  href="?login" id="scroll" style="float: right; color: white;">Iniciar sesión</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
<!-- START THE FEATURETTES -->

<div class="item3">
<main role="main" style="padding-bottom: 5%; padding-top: 5%;">
<div class="container">
<div class="row featurette">
  <div class="col-md-7 order-md-2">
    <h2 class="featurette-heading">
    MiRutaCR     <span class="text-muted"></span></h2>
   
  </div>
  <div class="col-md-5 order-md-1">
  <div id="map">
  </div>
</div>
</div>

</div>
</main>
</div>
<div class="item4">

<div class="grid-container">
<p class="grid-item"><a href="#">Ir al inicio</a></p>
<br><p class="grid-item"><a href="#">Ir al inicio</a></p>
<br><p class="grid-item"><a href="#">Ir al inicio</a></p>
<br><p class="grid-item"><a href="#">Ir al inicio</a></p>
<br>
</div>

</div>







      <!-- FOOTER -->
      <footer class="container" style="clear:both;">
        <p class="float-right"><a href="#">Ir al inicio</a></p>
        <p>&copy; Explorer CR, 2018. &middot; <a href="#">Derechos</a> &middot; <a href="#">Reservados</a></p>
      </footer>
    </main>



    <script>

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
 position.coords.latitude ;
 position.coords.longitude;
}

    function initMap() {

 

        var directionsService = new google.maps.DirectionsService;
        var directionsDisplay = new google.maps.DirectionsRenderer;
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 6,
          center: {lat: 41.85, lng: -87.65}
        });
        directionsDisplay.setMap(map);

          calculateAndDisplayRoute(directionsService, directionsDisplay);
          
          
      }

      function calculateAndDisplayRoute(directionsService, directionsDisplay) {
        var waypts = [];
        var sitios = [{"id_sitio":"1","nombre":"Hotel maria","provincia":"Alajuela ","latitud":9.836095,"longitud":-83.866989,"url_video":"NULL","url_imagen":"NULL","calificacion":"3","descripcion":"NULL","duracion":"Corto "}];
        
        
        for (var i = 0; i < sitios.length; i++) {
            
           waypts.push({
               
              location: new google.maps.LatLng(sitios[i].latitud,sitios[i].longitud),
              stopover: true
            }); 
        }
        
        




        directionsService.route({
          origin: new google.maps.LatLng(9.8366042,-83.8800079),
          destination: new google.maps.LatLng(9.84743586,-83.94468726),
          waypoints: waypts,
          optimizeWaypoints: true,
          travelMode: 'DRIVING'
        }, function(response, status) {
          if (status === 'OK') {
            directionsDisplay.setDirections(response);
            var route = response.routes[0];
          } else {
            window.alert('Directions request failed due to ' + status);
          }
        });



        
      }
    </script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBmprM9daEOTyPl-J1FEdGJK5VudcBhG-o&callback=initMap"
    async defer></script>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <!-- <script>window.jQuery || document.write('<script src="view/js/jquery-slim.min.js"><\/script>')</script> -->
    <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <script src="view/js/main.js"></script>
    <script src="view/js/popper.min.js"></script>
    <script src="view/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="view/js/holder.min.js"></script>
  </body>
</html>