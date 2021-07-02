<?php

    $conn=mysqli_connect("localhost", "root","", "relocadb");

    if(!$conn) {
        die("Error de conexion: ".mysqli_connect_error());
    }

    $v1=$_REQUEST['email'];
    $v2=$_REQUEST['usuario'];
    $v3=$_REQUEST['usuarioA'];
    // $v2=$_REQUEST['psw'];
    // $v3=$_REQUEST['id'];
    //conuslta SQL
    
    $sql ="UPDATE usuarios set email='$v1' , usuario='$v2' WHERE usuario='$v3'";
    $resultado= mysqli_query($conn, $sql);
    if(!$resultado){    
        header('Location:Admin.php');
        exit;
    }else{
        header('Location:Admin.php');
        exit;
    }

  
    ?>