<?php

/* funcion que establece la comunicaci[on directa con la Base de Datos de MySQL para el uso dentro
de este trabajo*/

function infoDB() {           
                
        $host = "163.178.173.144";
        $user = "multi-paraiso";
        $pass = "multimedios.rp.2017";
        $database = "MiRutaCR";            
           

        $connection = mysqli_connect($host, $user, $pass ,$database);
            if (!$connection) {
                die("Connection fallida: " . mysql_error());
            }

    
            return $connection;

}
          
    
?>