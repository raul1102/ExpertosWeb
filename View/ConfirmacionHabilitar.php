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

<label id="tituloAdministrador">Habilitar Sitio</label>
<br><br><br>

<br><br><br>
<div class="container">

<form method="post" action="">


<div class="form-group row">    
    <div class="col-md-12">
     <input type="submit" name="submit" value="Aceptar" class="btn btn-info"/>
    </div>
  </div>


</form>


<?php 

if(isset($_POST['submit'])){

  $idTabla = $_GET['confirmacionHabilitar'];  

  $consulta = "UPDATE MiRutaCR.Destino SET habilitacion='1' WHERE id='$idTabla'";

  $ejecutarConsulta = mysqli_query($con, $consulta);

    if($ejecutarConsulta){      
      echo"<script>window.open('?deshabilitar', '_self')</script>";
    }

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