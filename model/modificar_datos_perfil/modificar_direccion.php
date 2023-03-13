<?php 
        include_once ('../conexion.php');
        include_once ('../login.php');
        
        $correo=$_SESSION['correo']; 
        $direccion=$_POST['direccion'];       
        
        $sentencia = $con -> query("SELECT dni FROM personal INNER JOIN cuenta on personal.dni = cuenta.dni_personal WHERE correo='$correo'");
        $valores = mysqli_fetch_array($sentencia);  
        $dni=$valores['dni'];

        $sentencia_buscar = $con -> query("SELECT dni FROM personal WHERE dni='$dni'");
        $fila = $sentencia_buscar->num_rows;  
        // mysqli_query($con,"SELECT dni FROM personal WHERE dni='$dni'");         
        if($fila=1){
                $sentencia_modificar =  mysqli_query($con,"UPDATE personal SET direccion='$direccion' WHERE dni='$dni'");                
                return 1;
                echo'1';                
        } 
?>