<html lang="es">
<head>
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

<div class="container">



<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
 Ver información
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Información sobre sitio</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        
      <div class="card" style="width: 18rem; margin:auto;">
  <img class="card-img-top" src="https://www.titicupon.com/sites/default/files/imagecache/coupon-slider-responsive/rio_perlas_ajust_3.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">Hotel Rio Perlas</p>
  </div>
</div>
<br></br>
<div class="container">
  <h1>Hotel Rio Perlas</h1>
  <br></br>
  <div class="row">
    <div class="col-sm-6">
      <p style="color:cornflowerblue; font-weight: bold;">Ubicación:</p>
      <p>Orosi, Cartago</p>
      <p></p>
    </div>
    <div class="col-sm-6">
      <p style="color:cornflowerblue; font-weight: bold;">Descripción:</p>
      <p>Hotel ubicado carretera Orosi, donde puede disfrutar e un tiempo con mucha comodidad y disfrutar de un entorno natural</p>
    </div>
  </div>
</div>


      </div>
    </div>
  </div>
</div>

</div>

</section>
<br/><br/><br/>       
</form>
<?php 
    
?>
<?php    
//footer
include_once 'Footer.php';
?>