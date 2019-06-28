<?php 

  $con = mysqli_connect("163.178.173.144", "multi-paraiso", "multimedios.rp.2017", "MiRutaCR") or die ("Error en la conexion");

?>

<html lang="es">
<head>
    <meta charset="utf-8"/>
    <title>MiRutaCR</title>
    <meta name="description" content="Insertar" />
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



<label id="tituloAdministrador">Insertar Sitio</label>
<br><br><br>

<div class="container">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">

<form method="post" action="?vecino">

 

  <div class="form-group row">
    <label for="vecino" class="col-sm-3 col-form-label"> Ubicacion mas cercana: </label>
    <div class="col-md-8">
    <a style="color: white;"><i class="fas fa-upload"></i></a> 


<select name="taskOption">


<?php

$sql = "Select * from Destino where id  not in( Select id_destino from vecinos )  "; 

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

  

      <option value="<?php echo $id; ?>"><?php echo $nombre; ?></option>

<?php } ?>


</select>


    </div>
  </div>
  <br>




  <div class="form-group row">
    <label for="vecino" class="col-sm-3 col-form-label">Destino: </label>
    <div class="col-md-8">
    <a style="color: white;"><i class="fas fa-upload"></i></a> 


<select name="taskOptionDestino">


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

  

      <option value="<?php echo $id; ?>"><?php echo $nombre; ?></option>

<?php } ?>


</select>


    </div>
  </div>
  <br>



  <div class="form-group row">    
    <div class="col-md-12">
     <input type="submit" name="submit" value="Insertar" class="btn btn-info">
    </div>
  </div>

</form>
</div>
</div>
</div>
</section>

  <br/><br/><br/>       
</form>

<?php

if(isset($_POST['submit'])){
    
      $nombre = $_POST['taskOptionDestino'];
      $descripcion = $_POST['taskOption'];


    $sql = "INSERT INTO vecinos (id_vecino,id_destino) 
    values ($nombre, $descripcion)"; 
    
    $ejecutar = mysqli_query($con, $sql);

   

}
?>



<?php 
    
?>
<?php    
//footer
include_once 'Footer.php';
?>