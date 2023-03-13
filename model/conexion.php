<?php
    $host="localhost:33065";
    $usuario="root";
    $contrasena="";
    $nombre_bd="sistema_bio";
 

    $con = new mysqli($host,$usuario,$contrasena,$nombre_bd);
    $con->set_charset("utf8");
    // try {
    //     $con = new PDO("mysql:host=$host;dbname=$nombre_bd", $usuario, $contrasena);          
    //     $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);        
    //     //echo "Conexión realizada satisfactoriamente. ";
    // } catch (PDOException $e) {
    //     echo 'Falló la conexión: ' . $e->getMessage();
    // }    


?>