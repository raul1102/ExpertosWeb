<?php 

  $con = mysqli_connect("163.178.173.144", "multi-paraiso", "multimedios.rp.2017", "MiRutaCR") or die ("Error en la conexion");

?>

<?php
  if(isset($_GET['modificarSitio'])){
      $editar_id = $_GET['modificarSitio'];


      $sql = "SELECT * FROM Destino WHERE id='$editar_id'";
      $ejecutar = mysqli_query($con, $sql);

      $fila = mysqli_fetch_array($ejecutar);

      $nombre = $fila['nombre'];
      $descripcion = $fila['descripcion'];
      $latitud = $fila['latitud'];
      $longitud = $fila['longitud'];
      $urlSitio = $fila['urlSitio'];
      $tiempo = $fila['tiempo'];
      $precio = $fila['precio'];
      $calificacion = $fila['calificacion'];
      $urlVideo = $fila['urlVideo'];
      $urlImagen = $fila['urlImagen']; 
  }

?>


<html lang="es">
<head>
    <meta charset="utf-8"/>
    <title>MiRutaCR</title>
    <meta name="description" content="Modificar Sitio" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="view/img/icono.ico" />
    <link rel="stylesheet" type="text/css" href="View/css/styles.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"></head>

    
    <script type="text/javascript" src="../View/js/jquery.js"></script>
       

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

<body>
<header>

<?php include('Administrador.php'); ?> 
<br><br>

</header>
<section style="text-align: center;">

<label id="tituloAdministrador">Modificar Sitio</label>
<br><br><br>

<div class="container">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<form method="post" action="">

  <div class="form-group row">
    <label for="nombreSitio" class="col-sm-3 col-form-label">Nombre: </label>
    <div class="col-md-8">
      <input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo $nombre; ?>">
    </div>
  </div>

  <div class="form-group row">
    <label for="nombreSitio" class="col-sm-3 col-form-label">Descripción: </label>
    <div class="col-md-8">
    <textarea class="form-control" name="descripcion" id="descripcion" rows="3"><?php echo $descripcion; ?></textarea>
    </div>
  </div> 

  <div class="form-group row">
    <label for="latitud" class="col-sm-3 col-form-label"> Latitud: </label>
    <div class="col-md-8">
      <input type="text" class="form-control" name="latitud" id="latitud" value="<?php echo $latitud; ?>">
    </div>
  </div>

  <div class="form-group row">
    <label for="longitud" class="col-sm-3 col-form-label">Longitud: </label>
    <div class="col-md-8">
      <input type="text" class="form-control" name="longitud" id="longituf" value="<?php echo $longitud; ?>">
    </div>
  </div>
  
  <div class="form-group row">
    <label for="urlSitio" class="col-sm-3 col-form-label">URL del Sitio: </label>
    <div class="col-md-8">
      <input type="url" class="form-control" name="urlSitio" id="urlSitio" value="<?php echo $urlSitio; ?>">
    </div>
  </div>

   <div class="form-group row">
   <label for="url" class="col-sm-3 col-form-label">Tiempo: </label>
   <div class="col-md-8">
   <select class="custom-select my-1 mr-sm-2" name="tiempo" id="tiempo" style="font-size: initial;">
    <option selected><?php 
    if($tiempo == 1){
      echo "Moderado";
    }elseif($tiempo == 2){
      echo "Medio";
    }else{
      echo "Alto";
    }    
    ?></option>
    <option value="1" style="font-size: initial;">Moderado</option>
    <option value="2" style="font-size: initial;">Medio</option>
    <option value="3" style="font-size: initial;">Alto</option>
  </select>
  </div>
  </div>


    <div class="form-group row">
   <label for="url" class="col-sm-3 col-form-label">Precio: </label>
   <div class="col-md-8">
   <select class="custom-select my-1 mr-sm-2" name="precio" id="precio" style="font-size: initial;">
    <option selected>
    <?php
    if($precio == 1){
      echo "Menor a 5000";
    }elseif($precio == 2){
      echo "Entre 5000 y 10000";
    }else{
      echo "Mayor a 10000";
    }
    
    ?>
    </option>
    <option value="1" style="font-size: initial;">Menor a 5000</option>
    <option value="2" style="font-size: initial;">Entre 5000 y 10000</option>
    <option value="3" style="font-size: initial;">Mayor a 10000</option>
  </select>
  </div>
  </div>

  <div class="form-group row">
   <label for="url" class="col-sm-3 col-form-label">Calificacion: </label>
   <div class="col-md-8">
   <select class="custom-select my-1 mr-sm-2" name="calificacion" id="calificacion" style="font-size: initial;">
    <option selected>
    
    <?php
    if($calificacion == 1){
      echo "★";
    }elseif($calificacion == 2){
      echo "★★";
    }elseif($calificacion == 3){
      echo "★★★";
    }elseif($calificacion == 4){
      echo "★★★★";
    }else{
      echo "★★★★★";
    }
    
    ?>    
    
    </option>
    <option value="1" style="font-size: initial;">★</option>
    <option value="2" style="font-size: initial;">★★</option>
    <option value="3" style="font-size: initial;">★★★</option>
    <option value="4" style="font-size: initial;">★★★★</option>
    <option value="5" style="font-size: initial;">★★★★★</option>
  </select>
  </div>
  </div>






  <div class="form-group row">
    <label for="urlVideo" class="col-sm-3 col-form-label">URL del Video: </label>
    <div class="col-md-8">
      <input type="url" class="form-control" name="urlVideo" id="urlVideo" value="<?php echo $urlVideo; ?>">
    </div>
  </div>

  <div class="form-group row">
    <label for="url" class="col-sm-3 col-form-label">URL de la Imagen: </label>
    <div class="col-md-8">
      <input type="urlImagen" class="form-control" name="urlImagen" id="urlImagen" value="<?php echo $urlImagen; ?>">
    </div>
  </div>

  <br>
  <div class="form-group row">    
    <div class="col-md-12">
     <input type="submit" name="submit" value="Actualizar" class="btn btn-info"/>
    </div>
  </div>


</div>
</div>
</div>
</section>

<br/><br/><br/> 
</form> 

<?php 

if(isset($_POST['submit'])){

  $id_registro = $_GET['modificarSitio'];
  $actualizar_nombre = $_POST['nombre'];
  $actualizar_descripcion = $_POST['descripcion'];
  $actualizar_latitud = $_POST['latitud'];
  $actualizar_longitud = $_POST['longitud'];
  $actualizar_urlSitio = $_POST['urlSitio'];
  $actualizar_tiempo = $_POST['tiempo'];
  $actualizar_precio = $_POST['precio'];
  $actualizar_calificacion = $_POST['calificacion'];
  $actualizar_urlVideo = $_POST['urlVideo'];
  $actualizar_urlImagen = $_POST['urlImagen']; 

  $consulta = "UPDATE MiRutaCR.Destino SET nombre='$actualizar_nombre', descripcion='$actualizar_descripcion', latitud='$actualizar_latitud', longitud='$actualizar_longitud', urlSitio='$actualizar_urlSitio', tiempo='$actualizar_tiempo', precio='$actualizar_precio', calificacion='$actualizar_calificacion', urlVideo='$actualizar_urlVideo', urlImagen='$actualizar_urlImagen' WHERE id='$id_registro'";

  $ejecutarConsulta = mysqli_query($con, $consulta);

    if($ejecutarConsulta){      
      echo"<script>window.open('?modificar', '_self')</script>";
    }

  }
?>   

<?php 
    
?>
<?php    
//footer
include_once 'Footer.php';
?>