 <?php 
        include_once ('../conexion.php');
        include_once ('../login.php');

        $correo=$_SESSION['correo'];        
        
        $sentencia = $con -> query("SELECT dni FROM personal INNER JOIN cuenta on personal.dni = cuenta.dni_personal WHERE correo='$correo'");
        $valores = mysqli_fetch_array($sentencia);  
        $dni=$valores['dni'];
        $dni_f=$_POST["dni_f"];  

        $sentencia_buscar = $con -> query("UPDATE personal SET dni = '$dni_f' WHERE dni='$dni'");
        $fila = $sentencia_buscar->num_rows;  
        // mysqli_query($con,"SELECT dni FROM personal WHERE dni='$dni'");         
        if($fila=1){
                $sentencia_modificar =  mysqli_query($con,"UPDATE personal SET dni='$dni_f' WHERE dni='$dni'");                
                return 1;
                echo'1';                
        } 
?>
