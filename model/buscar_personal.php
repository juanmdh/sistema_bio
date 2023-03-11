<?php
 
$correo=$_SESSION["correo"]; 
//$contrasena=$_POST['contrasena'];
$sentencia = $con -> query("SELECT * FROM personal INNER JOIN cuenta on personal.dni = cuenta.dni_personal WHERE correo='$correo'");
$valores = mysqli_fetch_array($sentencia);  
echo $valores['nombres'];

 
$nombres=$valores['nombres'];

$sentencia1 = $con -> query("SELECT * FROM personal INNER JOIN cargo on personal.id_cargo = cargo.id WHERE nombres='$nombres'");
$valores1 = mysqli_fetch_array($sentencia1);  



 