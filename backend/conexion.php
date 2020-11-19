<?php

$host="localhost";
$usuario="root";
$clave="";
$bd="syloper";

try{
    $conexion=new PDO("mysql:host=$host;dbname=$bd",$usuario,$clave);
    //echo "Conexion correcta";
    
}catch(PDOException $e){
    print 'ERROR ALERTA'.$e->getMessage(); 
    
}


?>