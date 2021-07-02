<?php


    $conn=mysqli_connect("localhost", "root","", "relocadb");

    if(!$conn) {
        die("Error de conexion: ".mysqli_connect_error());
    }

    $v1=$_GET['usuario'] ;
    //conuslta SQL 
    $sql ="DELETE FROM usuarios WHERE usuario='$v1'";

    $resultado= mysqli_query($conn, $sql);
    if(!$resultado){
        header('Location:Admin.php');
        exit;
    }else{
        header('Location:Admin.php');
        exit;
    }
  
    ?>