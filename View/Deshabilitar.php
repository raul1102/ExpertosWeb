<?php 

  $con = mysqli_connect("163.178.173.144", "multi-paraiso", "multimedios.rp.2017", "MiRutaCR") or die ("Error en la conexion");

?>

<html lang="es">
<head>
    <meta charset="utf-8"/>
    <title>MiRutaCR</title>
    <meta name="description" content="Deshabilitar" />
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

<label id="tituloAdministrador">Habilitar o Deshabilitar un Sitio</label>
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

<form method="post" action="?deshabilitar">

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Descripción</th>
      <th scope="col">Latitud</th>
      <th scope="col">Longitud</th>
      <th scope="col">Estado</th>      

           
    </tr>
  </thead>

<?php

$sql = "SELECT * FROM Destino"; 

$ejecutar = mysqli_query($con, $sql);

$i = 0;

while($fila = mysqli_fetch_array($ejecutar)){
      $id = $fila['id'];
      $nombre = $fila['nombre'];
      $descripcion = $fila['descripcion'];
      $latitud = $fila['latitud'];
      $longitud = $fila['longitud'];
      $urlSitio = $fila['urlSitio'];
      $tiempo = $fila['tiempo'];
      $urlVideo = $fila['urlVideo'];
      $urlImagen = $fila['urlImagen']; 
      $habilitar = $fila['habilitacion'];
      
      $i++;
?>

  <tbody>
    <tr>
      <th scope="row" name="idTabla" id="idTabla"><?php echo $id; ?></th>
      <td><?php echo $nombre; ?></td>
      <td><?php echo $descripcion; ?></td>
      <td><?php echo $latitud; ?></td>
      <td><?php echo $longitud; ?></td>
      <td><?php 
      
      if($habilitar == 0){
        echo "Sitio Deshabilitado";
      } else {
        echo "Sitio Habilitado";
      }      
       ?></td>            
      <td><a type="submit" name="aceptar" href="?confirmacionHabilitar=<?php echo $id; ?>" class="btn btn-success">Habilitar</a></td>                
      <td><a type="submit" name="submit" href="?confirmacionDeshabilitar=<?php echo $id; ?>" class="btn btn-danger">Deshabilitar</a></td> 
            
    </tr>   
  </tbody>


<?php } ?>


</table>

</form>

<?php 
  if(isset($_GET['confirmacionDeshabilitar'])){
      include("?confirmacionDeshabilitar");
  }

?>

<?php 
  if(isset($_GET['confirmacionHabilitar'])){
      include("?confirmacionHabilitar");
  }

?>

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