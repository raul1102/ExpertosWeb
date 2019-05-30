<?php
class DefaultModel{

  public function invoke() {
    if(isset($_GET['indexView'])){
      
      include_once('View/indexView.php');

    }else if(isset($_GET['principal'])) {

      include('View/Principal.php');

    } else if(isset($_GET['creditos'])) {

      include('View/Creditos.php');
    
    } else if(isset($_GET['inicioSesion'])) {

      include('View/InicioSesion.php');
    
    } else if(isset($_GET['administrador'])) {

      include('View/Administrador.php');
    
    } else if(isset($_GET['deshabilitar'])) {

      include('View/Deshabilitar.php');
    
    } else if(isset($_GET['modificar'])) {

      include('View/Modificar.php');
    
    } else if(isset($_GET['insertar'])) {

      include('View/Insertar.php');
      
    
    } else if(isset($_GET['informacionSitios'])) {
      
            include('View/InformacionSitios.php');
    
    } else{

      include_once('View/indexView.php');

}


  }
}
?>