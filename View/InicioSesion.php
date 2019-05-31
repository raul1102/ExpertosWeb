<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Inicio de Sesión</title>
        <meta name="description" content="Tarea 1 - Sistemas expertos para la administración" />
        <meta name="viewport" content="width=device-width,initial-scale=1" />

        <link rel="shortcut icon" type="image/x-icon" href="view/img/icono.ico" />
        <link rel="stylesheet" type="text/css" href="view/css/estilos.css" />

        <script type="text/javascript" src="View/js/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script type="text/javascript" src="./View/js/Validacion.js"></script>

        <link href="View/css/login.css" rel="stylesheet">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    

<div class="wrapper fadeInDown">
  <div id="formContent">
      
   <br><br>
      <input type="text" id="login" class="fadeIn second" name="login" placeholder="Usuario">
      <input type="password" id="pass" class="fadeIn third" name="login" placeholder="Contraseña">
      <br><br>
      <button class="btn btn-info" class="fadeIn fourth" name="login" onclick="login()">Iniciar Sesión</button>
      <br>
    </form>
    <br>
    <div id="formFooter">
      <a class="underlineHover" href="#">Olvidó su contraseña?</a>
    </div>

  </div>
</div>