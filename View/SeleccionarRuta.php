<?php 

  $con = mysqli_connect("163.178.173.144", "multi-paraiso", "multimedios.rp.2017", "MiRutaCR") or die ("Error en la conexion");

?>
<html lang="es">
<head>


  <style>
    #map {
      height: 500px;
    width: 500px;
    margin-top: 50px;
      }

.grid-containerA {
  display: inline-grid;
  ALIGN:LEFT;
  grid-template-columns: auto;
  padding: 10px;
}
.item1 { grid-area: header; }
.item2 { grid-area: menu; }
.item3 { grid-area: main; }
.item4 { grid-area: right; }
.item5 { grid-area: footer; }

.grid-container {
  display: grid;
  grid-template-areas:
    'header header header header header header'
    'menu main main  right  right right'
    'menu footer footer footer footer footer';
  grid-gap: 10px;
  padding: 10px;
}

.grid-container > div {
  text-align: center;
  padding: 20px 0;
  font-size: 30px;
}





    </style>


    <meta charset="utf-8"/>
    <title>MiRutaCR</title>
    <meta name="description" content="Proyecto Web" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="view/img/icono.ico" />
    <link rel="stylesheet" type="text/css" href="View/css/styles.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"></head>

    
    <script type="text/javascript" src="../View/js/jquery.js"></script>
       

       <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   
   
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"></head>
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    
   <link href="View/css/mapa.css" rel="stylesheet">

<body>
<header>

<?php include('Navbar.php'); ?>
        
</header>
<section id="contenido" style="min-height: 50%; width:80%; margin:0 auto; text-align: center;">

<br><br>
<div class="grid-container">

<div class="item1" style="width: 40%; margin: auto;">

<form method="post" class="form-inline">
 
  <label class="my-1 mr-2" for="inlineFormCustomSelectPref" style="font-size: initial; font-weight: bold;">Tiempo:</label>
  <select name="tiempo" class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" style="font-size: initial;">
    <option value="1" style="font-size: initial;">Moderado</option>
    <option value="2" style="font-size: initial;">Medio</option>
    <option value="3" style="font-size: initial;">Alto</option>
  </select>
  <label class="my-1 mr-2" for="inlineFormCustomSelectPref" style="font-size: initial; font-weight: bold;">Precio:</label>
  <select name = "precio" class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" style="font-size: initial;">
    <option value="1" style="font-size: initial;">Menos de 5.000</option>
    <option value="2" style="font-size: initial;">Menos de 10.000</option>
    <option value="3" style="font-size: initial;">Mayor de 10.000</option>
  </select>
  <label class="my-1 mr-2" for="inlineFormCustomSelectPref" style="font-size: initial; font-weight: bold;">Calificación:</label>
  <select name = "calificacion" class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" style="font-size: initial;">
    <option value="1" style="font-size: initial;">1 estrella</option>
    <option value="2" style="font-size: initial;">2 estrellas</option>
    <option value="3" style="font-size: initial;">3 estrellas</option>
    <option value="4" style="font-size: initial;">4 estrellas</option>
    <option value="5" style="font-size: initial;">5 estrellas</option>
  </select>

  <br></br>
  <div class="form-group row">    
    <div class="col-md-12">
     <input type="submit" name="filtrar" value="Opcion mas cercana" class="btn btn-info"/>
    </div>
  </div>
</form>



<table class="table">
  <thead>
    <tr>
             
    </tr>
  </thead>

<?php


if(isset($_POST['filtrar'])){

  $tiempo = $_POST['tiempo'];
  $precio = $_POST['precio'];
  $calificacion = $_POST['calificacion']; 
  

$sql = "Select d.*, sub.lat2,sub.long2, sub.id_destino from MiRutaCR.Destino d ,(Select d.latitud as lat2 ,d.longitud as long2,v.id_destino from MiRutaCR.vecinos v join MiRutaCR.Destino d on d.id=id_vecino) as sub where sub.id_destino=d.id and id_destino=4 and d.tiempo=$tiempo and d.precio =$precio and d.calificacion=$calificacion limit 1"; 

$ejecutar = mysqli_query($con, $sql);

$i = 0;

while($fila = mysqli_fetch_array($ejecutar)){
      $nombre = $fila['nombre'];
      $descripcion = $fila['descripcion'];
      $latitud = $fila['latitud'];
      $longitud = $fila['longitud'];
      $tiempo = $fila['tiempo'];
      $precio = $fila['precio'];
      $urlVideo = $fila['urlVideo'];
      $urlImagen = $fila['urlImagen'];
      $calificacion = $fila['calificacion'];
      $latitud2 = $fila['lat2'];
      $longitud2 = $fila['long2'];

      
      $i++;
?>

  <tbody>
    <tr>
      <td><?php echo $nombre; ?></td>               
      <td><button  id="boton1"  type="button" class="btn btn-primary"  data-toggle="modal" data-target="#exampleModalCenter1" style="background-color: #17a2b8; border-color: #17a2b8;">
       Ver informacion</button></td>      
    </tr>   
  </tbody>

<?php } ?>


<?php } ?>  
</table>

</div>
    <div class="item3">   
          <div id="map">
          </div>  
    </div>
   
    <div class="item4">
    <?php
    ?>
       <div class="grid-containerA">

     
       
        </div>
    </div>
</div>









<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Información sobre sitio</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        

 

  <div class="span4">
         <div class="thumb1">
         <div class="thumbnail clearfix">                                            
					 <br><iframe width="500" height="260" 
           src="<?php echo $urlVideo; ?>"  allowfullscreen ></iframe>
         </div>
         </div>
  </div>

<br></br>
<div class="container">
  <h1><?php echo $nombre; ?></h1>
  <br></br>
  <div class="row">
    <div class="col-sm-6">
      <p style="color: #17a2b8; font-weight: bold;">Calificación:</p>
      <p><?php     if($calificacion == 1){       echo "★";     }elseif($calificacion == 2){       echo "★★";     }elseif($calificacion == 3){       echo "★★★";     }elseif($calificacion == 4){       echo "★★★★";     }else{       echo "★★★★★";     }          ?></p>
      <p></p>
      <p><img class="card-img-top" src="<?php echo $urlImagen; ?>" alt="Card image cap"></p>
    </div>
    <div class="col-sm-6">
      <p style="color: #17a2b8; font-weight: bold;">Descripción:</p>
      <p><?php echo $descripcion; ?></p>
    </div>
  </div>
</div>

<div class="modal-footer">
<button type="button"  class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
<button type="button" id="bt1" onClick="funcion3(<?php echo $latitud; ?>,<?php echo $longitud; ?>,<?php echo $latitud2; ?>,<?php echo $longitud2; ?>)" class="btn btn-primary" style="background-color: #17a2b8; border-color: #17a2b8;">Agregar a la Ruta</button>
 </div>
      </div>
    </div>
  </div>
</div>

</div>


<!-- Modal jadin -->
<div class="modal fade bd-example-modal-lg" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Información sobre sitio</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        
      <div class="card" style="width: 50%; margin:auto;">
  <img class="card-img-top" src="https://images.visitarcostarica.com/jardin-botanico-lankester-costa-rica.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">Jardín Botánico Lankester</p>
  </div>
</div>
<br></br>
<div class="container">
  <h1>Jardín Botánico Lankester</h1>
  <br></br>
  <div class="row">
    <div class="col-sm-6">
      <p style="color: #17a2b8; font-weight: bold;">Ubicación:</p>
      <p>Paraíso, Cartago</p>
      <p></p>
    </div>
    <div class="col-sm-6">
      <p style="color: #17a2b8; font-weight: bold;">Descripción:</p>
      <p>Este jardín botánico que forma parte de la Universidad de Costa Rica desde el año 1973, se ubica en el cantón de Paraíso, provincia de Cartago a unos 45 minutos en automóvil, de la capital San José de Costa Rica.</p>
    </div>
  </div>
</div>

<div class="modal-footer">
<button type="button"  class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
<button type="button" id="bt2" onClick="funcion2()" class="btn btn-primary" style="background-color: #17a2b8; border-color: #17a2b8;">Agregar a la Ruta</button>
 </div>

      </div>
    </div>
  </div>
</div>

</div>



<!-- Modal mirador -->
<div class="modal fade bd-example-modal-lg" id="exampleModalCenter3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Información sobre sitio</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        
      <div class="card" style="width: 50%; margin:auto;">
  <img class="card-img-top" src="https://www.nacion.com/resizer/YIuaR4wZOFRDXujKzFlHmKNnWTU=/600x0/center/middle/filters:quality(100)/arc-anglerfish-arc2-prod-gruponacion.s3.amazonaws.com/public/OB4N2BB4H5BN3L6M4VSMUKPRT4.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">Mirardor de Orosi</p>
  </div>
</div>
<br></br>
<div class="container">
  <h1>Mirador de Orosi</h1>
  <br></br>
  <div class="row">
    <div class="col-sm-6">
      <p style="color: #17a2b8; font-weight: bold;">Ubicación:</p>
      <p>Orosi, Cartago</p>
      <p></p>
    </div>
    <div class="col-sm-6">
      <p style="color: #17a2b8; font-weight: bold;">Descripción:</p>
      <p>El mirador de Orosí se encuentra a tan solo 5 km del centro de Orosí. Este bello paraje natural ofrece una hermosa vista del valle y el río Grande. </p>
    </div>
  </div>
</div>

<div class="modal-footer">
<button type="button"  class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
<button type="button" id="bt3" onClick="funcion3()" class="btn btn-primary" style="background-color: #17a2b8; border-color: #17a2b8;">Agregar a la Ruta</button>
 </div>

      </div>
    </div>
  </div>
</div>

</div>



<!-- Modal iglesia -->
<div class="modal fade bd-example-modal-lg" id="exampleModalCenter4" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Información sobre sitio</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        
      <div class="card" style="width: 50%; margin:auto;">
      <div class="span4">
         <div class="thumb1">
         <div class="thumbnail clearfix">                                            
					 <br><iframe width="500" height="260" 
           src="https://www.youtube.com/watch?v=epREFEkrl2c"  allowfullscreen ></iframe>
         </div>
         </div>
  </div>
 
</div>
<br></br>
<div class="container">
  <h1>Iglesia Colonial del Valle de Orosi</h1>
  <br></br>
  <div class="row">
  <div class="col-sm-6">
  <p style="color: #17a2b8; font-weight: bold;">Calificación:</p>
  <p><?php     if($calificacion == 1){       echo "★";     }elseif($calificacion == 2){       echo "★★";     }elseif($calificacion == 3){       echo "★★★";     }elseif($calificacion == 4){       echo "★★★★";     }else{       echo "★★★★★";     }          ?></p>
  <p></p>
  <p><img class="card-img-top" src="https://travelcostarica.cr/wp-content/uploads/2017/11/Iglesia-Colonial-del-Valle-de-Orosi-Cartago.png" alt="Card image cap"></p>
</div>
    <div class="col-sm-6">
      <p style="color: #17a2b8; font-weight: bold;">Descripción:</p>
      <p>Es una de las más antiguas edificaciones del país, que datan de la época de la Colonia española, que persisten hasta la actualidad.</p>
    </div>
  </div>
</div>

<div class="modal-footer">
<button type="button"  class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
<button type="button" id="bt4" onClick="funcion4()" class="btn btn-primary" style="background-color: #17a2b8; border-color: #17a2b8;">Agregar a la Ruta</button>
 </div>

      </div>
    </div>
  </div>
</div>

</div>





<!-- Modal balnerio -->
<div class="modal fade bd-example-modal-lg" id="exampleModalCenter5" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Información sobre sitio</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        
      <div class="card" style="width: 50%; margin:auto;">
      <div class="span4">
         <div class="thumb1">
         <div class="thumbnail clearfix">                                            
					 <br><iframe width="500" height="260" 
           src="https://www.youtube.com/watch?v=YsdMkSHQJ9k"  allowfullscreen ></iframe>
         </div>
         </div>
  </div>
 
</div>
<br></br>
<div class="container">
  <h1>Balneario los patio</h1>
  <br></br>
  <div class="row">
  <div class="col-sm-6">
  <p style="color: #17a2b8; font-weight: bold;">Calificación:</p>
  <p><?php     if($calificacion == 1){       echo "★";     }elseif($calificacion == 2){       echo "★★";     }elseif($calificacion == 3){       echo "★★★";     }elseif($calificacion == 4){       echo "★★★★";     }else{       echo "★★★★★";     }          ?></p>
  <p></p>
  <p><img class="card-img-top" src="https://img2.10bestmedia.com/Images/Photos/234152/p-BalneariodeAguasTermales_54_990x660_201404241604.jpg" alt="Card image cap"></p>
</div>
    <div class="col-sm-6">
      <p style="color: #17a2b8; font-weight: bold;">Descripción:</p>
      <p>Es una de las más antiguas edificaciones del país, que datan de la época de la Colonia española, que persisten hasta la actualidad.</p>
    </div>
  </div>
</div>

<div class="modal-footer">
<button type="button"  class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
<button type="button" id="bt4" onClick="funcion5()" class="btn btn-primary" style="background-color: #17a2b8; border-color: #17a2b8;">Agregar a la Ruta</button>
 </div>

      </div>
    </div>
  </div>
</div>

</div>




<!-- Modal chuca -->
<div class="modal fade bd-example-modal-lg" id="exampleModalCenter6" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Información sobre sitio</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        
      <div class="card" style="width: 50%; margin:auto;">
      <div class="span4">
         <div class="thumb1">
         <div class="thumbnail clearfix">                                            
					 <br><iframe width="500" height="260" 
           src="https://www.youtube.com/watch?v=Li2vQYVagWg"  allowfullscreen ></iframe>
         </div>
         </div>
  </div>
 
</div>
<br></br>
<div class="container">
  <h1>Chucaras HotSprings</h1>
  <br></br>
  <div class="row">
  <div class="col-sm-6">
  <p style="color: #17a2b8; font-weight: bold;">Calificación:</p>
  <p><?php     if($calificacion == 1){       echo "★";     }elseif($calificacion == 2){       echo "★★";     }elseif($calificacion == 3){       echo "★★★";     }elseif($calificacion == 4){       echo "★★★★";     }else{       echo "★★★★★";     }          ?></p>
  <p></p>
  <p><img class="card-img-top" src="https://media-cdn.tripadvisor.com/media/photo-s/0a/0c/a5/60/orosi.jpg" alt="Card image cap"></p>
</div>
    <div class="col-sm-6">
      <p style="color: #17a2b8; font-weight: bold;">Descripción:</p>
      <p>Es una de las más antiguas edificaciones del país, que datan de la época de la Colonia española, que persisten hasta la actualidad.</p>
    </div>
  </div>
</div>

<div class="modal-footer">
<button type="button"  class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
<button type="button" id="bt4" onClick="funcion6()" class="btn btn-primary" style="background-color: #17a2b8; border-color: #17a2b8;">Agregar a la Ruta</button>
 </div>

      </div>
    </div>
  </div>
</div>

</div>

  <script src="View/js/App.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCxIhjbH4bZdvdWOhfuxQL93d0Um_El87k&libraries=places&callback=initAutocomplete" async defer></script>

</section>
<br/><br/><br/> 
<script>
 var sitios = [];
 

function funcion1(latitud, logitud){

  var directionsService = new google.maps.DirectionsService;
        var directionsDisplay = new google.maps.DirectionsRenderer;
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 6,
          center: {lat: 41.85, lng: -87.65}
        });
        directionsDisplay.setMap(map);

        var marker = new google.maps.Marker({
        position: {lat: 9.818776, lng: -83.858319},
        map: map,
      
        title: 'Ver informacion'
      });

      map.addListener('center_changed', function() {
        // 3 seconds after the center of the map has changed, pan back to the
        // marker.
        
      });

      marker.addListener('click', function() {
        $("#exampleModalCenter2").modal('show');
      });

        latitud=9.833290;
        longitud=-83.878485;
       calculateAndDisplayRoute(directionsService, directionsDisplay);
       sitios.push({"id_sitio":"1","nombre":"Hotel maria ","provincia":"Alajuela ","latitud":"-83.878485","longitud":"9.833290","url_video":"NULL","url_imagen":"NULL","calificacion":"3","descripcion":"NULL","duracion":"Corto "});
       
    
       $("#exampleModalCenter1").modal('hide');//ocultamos el modal
      $('body').removeClass('modal-open');//eliminamos la clase del body para poder hacer scroll
      $('.modal-backdrop').remove();
  document.getElementById("bt1").disabled = true;

}
function funcion2(){

  var directionsService = new google.maps.DirectionsService;
        var directionsDisplay = new google.maps.DirectionsRenderer;
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 6,
          center: {lat: 41.85, lng: -87.65}
        });
        directionsDisplay.setMap(map);


        var marker = new google.maps.Marker({
        position: {lat: 9.818617, lng: -83.858258},
        map: map,
      
        title: 'Ver informacion'
      });

      map.addListener('center_changed', function() {
        // 3 seconds after the center of the map has changed, pan back to the
        // marker.
        
      });

      marker.addListener('click', function() {
        $("#exampleModalCenter3").modal('show');
      });

        latitud=9.839486;
      longitud=-83.890180;
       calculateAndDisplayRoute(directionsService, directionsDisplay);
   sitios.push({"id_sitio":"1","nombre":"Hotel maria ","provincia":"Alajuela ","latitud":"-83.890180","longitud":"9.839486","url_video":"NULL","url_imagen":"NULL","calificacion":"3","descripcion":"NULL","duracion":"Corto "});
   $("#exampleModalCenter2").modal('hide');//ocultamos el modal
  $('body').removeClass('modal-open');//eliminamos la clase del body para poder hacer scroll
  $('.modal-backdrop').remove();    
  document.getElementById("bt2").disabled = true;

}

function funcion3(latitudV, longitudV,latitudS, longitudS){

var directionsService = new google.maps.DirectionsService;
      var directionsDisplay = new google.maps.DirectionsRenderer;
      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 6,
        center: {lat: 41.85, lng: -87.65}
      });
      directionsDisplay.setMap(map);

      var marker = new google.maps.Marker({
        position: {lat: latitudS, lng: longitudS},
        map: map,
      
        title: 'Ver informacion'
      });

      map.addListener('center_changed', function() {
        // 3 seconds after the center of the map has changed, pan back to the
        // marker.
        
      });

      marker.addListener('click', function() {
        $("#exampleModalCenter4").modal('show');
      });

      latitud=latitudV;
      longitud=longitudV;
     calculateAndDisplayRoute(directionsService, directionsDisplay);
     sitios.push({"id_sitio":"1","nombre":"Hotel maria ","provincia":"Alajuela ","latitud":"-83.858258","longitud":"9.818617","url_video":"NULL","url_imagen":"NULL","calificacion":"3","descripcion":"NULL","duracion":"Corto "});

  $("#exampleModalCenter3").modal('hide');//ocultamos el modal
  $('body').removeClass('modal-open');//eliminamos la clase del body para poder hacer scroll
  $('.modal-backdrop').remove(); 
  document.getElementById("bt3").disabled = true;

}

function funcion4(){

var directionsService = new google.maps.DirectionsService;
      var directionsDisplay = new google.maps.DirectionsRenderer;
      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 6,
        center: {lat: 41.85, lng: -87.65}
      });
      directionsDisplay.setMap(map);
     
      var marker = new google.maps.Marker({
        position: {lat: 9.79464, lng: -83.856372},
        map: map,
      
        title: 'Ver informacion'
      });

      map.addListener('center_changed', function() {
        // 3 seconds after the center of the map has changed, pan back to the
        // marker.
        
      });

      marker.addListener('click', function() {
        $("#exampleModalCenter5").modal('show');
      });
     
      latitud=9.798159;
      longitud=-83.855588;
     calculateAndDisplayRoute(directionsService, directionsDisplay);
 sitios.push({"id_sitio":"1","nombre":"Hotel maria ","provincia":"Alajuela ","latitud":"-83.855588","longitud":"9.798159","url_video":"NULL","url_imagen":"NULL","calificacion":"3","descripcion":"NULL","duracion":"Corto "});
      
 $("#exampleModalCenter4").modal('hide');//ocultamos el modal
  $('body').removeClass('modal-open');//eliminamos la clase del body para poder hacer scroll
  $('.modal-backdrop').remove();
  document.getElementById("bt4").disabled = true;
}

function funcion5(){
 
var directionsService = new google.maps.DirectionsService;
      var directionsDisplay = new google.maps.DirectionsRenderer;
      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 6,
        center: {lat: 41.85, lng: -87.65}
      });
      directionsDisplay.setMap(map);

      var marker = new google.maps.Marker({
        position: {lat: 9.770743, lng: -83.837818},
        map: map,
      
        title: 'Ver informacion'
      });

      map.addListener('center_changed', function() {
        // 3 seconds after the center of the map has changed, pan back to the
        // marker.
        
      });

      marker.addListener('click', function() {
        $("#exampleModalCenter6").modal('show');
      });
     
 
      latitud=9.79464;
      longitud=-83.856372;
     calculateAndDisplayRoute(directionsService, directionsDisplay);
 sitios.push({"id_sitio":"1","nombre":"Hotel maria ","provincia":"Alajuela ","latitud":"-83.855588","longitud":"9.798159","url_video":"NULL","url_imagen":"NULL","calificacion":"3","descripcion":"NULL","duracion":"Corto "});
      
 $("#exampleModalCenter5").modal('hide');//ocultamos el modal
  $('body').removeClass('modal-open');//eliminamos la clase del body para poder hacer scroll
  $('.modal-backdrop').remove();
  document.getElementById("bt4").disabled = true;
}

function funcion6(){
 
var directionsService = new google.maps.DirectionsService;
      var directionsDisplay = new google.maps.DirectionsRenderer;
      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 6,
        center: {lat: 41.85, lng: -87.65}
      });
      directionsDisplay.setMap(map);

      latitud=9.770743;
      longitud=-83.837818;
     calculateAndDisplayRoute(directionsService, directionsDisplay);
 sitios.push({"id_sitio":"1","nombre":"Hotel maria ","provincia":"Alajuela ","latitud":"-83.855588","longitud":"9.798159","url_video":"NULL","url_imagen":"NULL","calificacion":"3","descripcion":"NULL","duracion":"Corto "});
      
 $("#exampleModalCenter6").modal('hide');//ocultamos el modal
  $('body').removeClass('modal-open');//eliminamos la clase del body para poder hacer scroll
  $('.modal-backdrop').remove();
  document.getElementById("bt4").disabled = true;
}





    function initMap() {
        var directionsService = new google.maps.DirectionsService;
        var directionsDisplay = new google.maps.DirectionsRenderer;
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 6,
          center: {lat: 41.85, lng: -87.65}
        });
        directionsDisplay.setMap(map);

        var marker = new google.maps.Marker({
        position: {lat: 9.833290, lng: -83.878485},
        map: map,
      
        title: 'Ver informacion'
      });

      map.addListener('center_changed', function() {
        // 3 seconds after the center of the map has changed, pan back to the
        // marker.
        
      });

      marker.addListener('click', function() {
        $("#exampleModalCenter1").modal('show');
      });
       <?php
       echo $destino=4;
       ?>


          calculateAndDisplayRoute(directionsService, directionsDisplay);
      }
var latitud=9.827605;
var longitud=-83.868433;
      function calculateAndDisplayRoute(directionsService, directionsDisplay ) {
        var waypts = [];
        for (var i = 0; i < sitios.length; i++) {
          console.log(sitios[i].longitud);
           waypts.push({
              location: new google.maps.LatLng(sitios[i].longitud,sitios[i].latitud),
              stopover: true
            }); 
        }

        directionsService.route({
          origin: new google.maps.LatLng(9.827605, -83.868433),
          destination: new google.maps.LatLng(latitud,longitud),
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

    <script>
function echoHello(){
 alert("<?PHP hello(); ?>");
 }
</script>


</form>

<?php

if(isset($_POST['submit'])){
    
  $tiempo = $_POST['tiempo'];
  $precio = $_POST['precio'];
  $calificacion = $_POST['calificacion'];   

  $sql = "SELECT d.nombre, d.latitud, d.longitud FROM MiRutaCR.Destino d JOIN MiRutaCR.vecinos v ON d.id = v.id_vecino WHERE id_destino = 8"; 
    
    $ejecutar = mysqli_query($con, $sql);

}
?>



<?php 
    
?>
<?php    
//footer
include_once 'Footer.php';
?>
