<?php 
        include_once ('../conexion.php');
        include_once ('../login.php');
        //$_POST['dni_fb']
        $dni=$_POST['dni_fb'];
        //print_r($dni);
        $sentencia_buscar = $con -> query("SELECT dni FROM paciente WHERE dni='$dni'");
        $fila = $sentencia_buscar->num_rows;    
        //$valores = mysqli_fetch_array($sentencia_buscar);  
        //$dni_f=$valores['dni'];
        //print_r($fila);
        if($fila==1){
                print_r($fila);
                return 1;                   
        }else{
                print_r($fila);
                return 0;
        }
?>