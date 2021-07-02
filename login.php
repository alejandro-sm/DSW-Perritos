<?php

    session_start();
    $con=mysqli_connect("localhost","root","", "relocadb");

    if(!$con) {
        die("Error de conexion: ".mysqli_connect_error());
    }
    $v2 = $_REQUEST['usu'];
    $v3 = $_REQUEST['con'];
    $encriptada=sha1($v3);
    $t = " select * from usuarios where usuario ='$v2' && contra = '$encriptada='";

    $resulta = mysqli_query($con,$t);
    $num1 = mysqli_num_rows($resulta);

    if($num1==1){
        $_SESSION['user']=$v2;
        if($v2=='admin'){
            header("location: Admin.php");
            exit;
        }
        echo "<p>Te logueaste!! </p>";
        header("location: Opciones.php");
    }else{
        echo "<p>No existes </p>";
    }
    
?>