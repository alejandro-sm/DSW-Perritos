<?php

    session_start();
    $con=mysqli_connect("localhost","root","", "relocadb");

    if(!$con) {
        die("Error de conexion: ".mysqli_connect_error());
    }

    $v1 = $_REQUEST['email'];
    $v2 = $_REQUEST['usuario'];
    $v3 = $_REQUEST['contra'];
    $encriptada=sha1($v3);

    $reg_Email='/^[a-z0-A-Z9]+$Z/';
    $reg_Pass='/^(?=.*?[a-z])(?=.*?[A-Z])(?=.*?[0-9])[A-Za-z0-9]-{8,}+$/';

    if(!preg_match($reg_Email,$v1) || !preg_match($reg_Pass,$v3)){
        //header("location: login.html");
        echo '<script language="javascript">alert("Utiliza al menos 8 Caracteres");
                window.location.href="login.html"
        </script>';
    }
    

    $s = " select * from usuarios where email ='$v1' ";
    $t = " select * from usuarios where usuario ='$v2' ";

    $result = mysqli_query($con,$s);
    $resulta = mysqli_query($con,$t);

    $num = mysqli_num_rows($result);
    $num1 = mysqli_num_rows($resulta);

    if($num==0 and $num1==0){
        $reg="INSERT INTO usuarios (email, usuario, contra) VALUES ('$v1', '$v2', '$encriptada=')";
        $resultado=mysqli_query($con,$reg);
        if(!$resultado){
            echo "Error al inscribirse";
            header("location: login.html");
            exit;
        }else{
            echo "<p>Ok, datos ingresados </p>";
            header("location: login.html");
            exit;
        }
    }
    
    
?>