<?php
    session_start();
    if(isset($_SESSION['user'])){

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Estilos/Opciones.css">
    <title>Opciones</title>
</head>
<body>
    <header>
        <a class="btn_Salir" href="Salir.php">Cerrar Sesion</a>
    </header>
    <h1 class="title" >Opciones</h1>
    
    <div class="Rperro">
        <div class="card">
            <img src="img/rperro.jpg">
            <h4> Registrar</h4>
            <p>Registre a su perro en nuestra Base de Datos</p>
            <a href="FormRegistrarPerro.html">Registrar Perro</a>
        </div>
        <div class="card">
            <img src="img/revisar.jpeg">
            <h4>Consultar</h4>
            <p>Consulte los Datos de su Mascota</p>
            <a href="FormConsultarPerro.html">Consultar Perro</a>
        </div>
    </div>
</body>
</html>

<?php
    } else{
        header("location: login.html");
    }
?>