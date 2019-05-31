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
<form>

  <div class="form-group row">
    <label for="nombreSitio" class="col-sm-3 col-form-label">Nombre: </label>
    <div class="col-md-8">
      <input type="text" class="form-control" id="nombreSitio" value="Iglesia de Orosi">
    </div>
  </div>

  <div class="form-group row">
    <label for="nombreSitio" class="col-sm-3 col-form-label">Descripción: </label>
    <div class="col-md-8">
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">Iglesia Patrimonio natural de la humanidad</textarea>
    </div>
  </div> 

  <div class="form-group row">
    <label for="latitud" class="col-sm-3 col-form-label"> Latitud: </label>
    <div class="col-md-8">
      <input type="text" class="form-control" id="latitud" value="9.23465">
    </div>
  </div>

  <div class="form-group row">
    <label for="longitud" class="col-sm-3 col-form-label">Longitud: </label>
    <div class="col-md-8">
      <input type="text" class="form-control" id="longitud" value="-82.1454687">
    </div>
  </div>
  
  <div class="form-group row">
    <label for="url" class="col-sm-3 col-form-label">URL del Sitio: </label>
    <div class="col-md-8">
      <input type="url" class="form-control" id="url" value="https://www.MiRutaCR.com">
    </div>
  </div>

  <div class="form-group row">
   <label for="url" class="col-sm-3 col-form-label">Tiempo: </label>
   <div class="col-md-8">
   <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" style="font-size: initial;">
    <option selected>Moderado</option>
    <option value="2" style="font-size: initial;">Medio</option>
    <option value="3" style="font-size: initial;">Alto</option>
  </select>
  </div>
  </div>

  <div class="form-group row">
    <label for="imagen" class="col-sm-3 col-form-label">Imagen: </label>
    <div class="col-md-8">
    <img src="View/images/FONDO2.png" class="card-img-top" alt="..." style="height: 50px; width: 80px;">
    <br><br>
    <input type="file" value="Imagen">          
    </div>
  </div>
  <br>
  <div class="form-group row">    
    <div class="col-md-12">
     <a class="btn btn-info" onclick='alert("Sitio Modificado")' href="?modificar">Modificar</a>
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
    
?>
<?php    
//footer
include_once 'Footer.php';
?>