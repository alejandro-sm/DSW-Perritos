<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Usuarios del Sistema X</h1>
</body>
</html>

<?php
    //echo "<h1>Usuarios del Sistema</h1>";
    echo "<link rel='stylesheet' type='text/css' href='Estilos/tabla.css'>";
    //conexion a la Base de datos (Servidor,usuario,password)
    $conexion =  mysqli_connect("localhost", "root","", "relocadb");
    if (!$conexion) {
        die("Error de conexion: " . mysqli_connect_error());
    }

    //conuslta SQL
    //$sql = ("select * from vet where Nombre like '".$v2."'");
    $sql = ("select email,usuario from usuarios");
    //cuantos reultados hay en la buesqueda
    $result = mysqli_query($conexion, $sql);
    $num_resultados = mysqli_num_rows($result);

    //echo "<p>Número de perros encontrados: ".$num_resultados."</p>";
    echo "<table > <tr><th> N° </th> <th> EMAIL </th> <th> Usuario </th> </tr>";
    //mostrando informacion de los perros y detalle
    for ($i=0; $i <$num_resultados; $i++) {
        echo "<tr>";
        $row = mysqli_fetch_array($result); 
        echo " <th>".($i+1)."</th>";
        echo " <th>".$row["email"]."</th>";
        echo " <th>".$row["usuario"]."</th>";
        echo " <th> <a href='FormModificar.php?usuario=".$row["usuario"]."'>Modificar</a> </th>";
        echo " <th> <a href='Eliminar.php?usuario=".$row["usuario"]."'>Eliminar</a> </th>";
        echo "</tr>";
    }
?>