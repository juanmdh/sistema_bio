<?php 

    if( !empty($_POST["nombres"])){
        $correo=$_SESSION["correo"];  

        $sentencia = $con -> query("SELECT * FROM personal INNER JOIN cuenta on personal.dni = cuenta.dni_personal WHERE correo='$correo'");
        $valores = mysqli_fetch_array($sentencia);  
        
        $nombres=$_POST["nombres"];       
        $dni=$valores['dni'];
        
        $sentencia_buscar = $con -> query("UPDATE personal SET nombres = '$nombres' WHERE dni='$dni'");
        if($sentencia_buscar==true){
            echo "<div class='alert alert-success'>Los nombres se modificaron</div>";      
        }else{
            echo "<div class='alert alert-danger'>Los nombres no se modificaron</div>";       
        } 
        
    }     
 
?>
 
