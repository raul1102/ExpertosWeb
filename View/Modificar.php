<html lang="es">
<head>
    <meta charset="utf-8"/>
    <title>MiRutaCR</title>
    <meta name="description" content="Modificar" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="view/img/icono.ico" />
    <link rel="stylesheet" type="text/css" href="View/css/styles.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"></head>

    
    <script type="text/javascript" src="../View/js/jquery.js"></script>
       

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">


<body>
<header>

<?php include('Administrador.php'); ?> 
<br><br>

</header>
<section style="text-align: center;">

<label id="tituloAdministrador">Modificar Sitio</label>
<br><br><br>


<div class="container">
<div class="col-md-4">
 <form class="navbar-form" role="search">
    <div class="input-group add-on">
      <input class="form-control" placeholder="Search" name="srch-term" id="srch-term" type="text">
      <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
      <div class="input-group-btn">
        <button class="btn btn-info" type="button">Buscar</button>
      </div>
    </div>
  </form>
  </div>
</div>
<br><br><br>
<div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Descripción</th>
      <th scope="col">Latitud</th>
      <th scope="col">Longitud</th>
      <th scope="col">URL</th>
      <th scope="col">Tiempo</th>
      <th scope="col">Imagen</th>      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Iglesia de Orosi</td>
      <td>Iglesia Patrimonio natural de la humanidad</td>
      <td>9.23465</td>
      <td>-82.145</td>
      <td>https://www.MiRutaCR.com</td>      
      <td>Moderado</td>
      <td><img src="View/images/FONDO2.png" class="card-img-top" alt="..." style="height: 50px; width: 80px;"></td>      
      <td><a class="btn btn-info" href="?modificarSitio">Modificar</a></td>      
    </tr>   
  </tbody>
</table>
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