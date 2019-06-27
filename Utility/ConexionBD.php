<?php


$host = "163.178.173.144";
$user = "multi-paraiso";
$pass = "multimedios.rp.2017";
$database = "MiRutaCR"; 
$dsn = "mysql:host=$host;dbname:$database";


try{
    $conexion = new PDO($dsn, $user, $pass);
}catch(PDOException $error){
    echo $error->getMessage();
}