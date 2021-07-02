<?php
    echo "<link rel='stylesheet' type='text/css' href='Estilos/tabla.css'>";
    //conexion a la Base de datos (Servidor,usuario,password)
    $conexion =  mysqli_connect("localhost", "root","", "relocadb");
    if (!$conexion) {
        die("Error de conexion: " . mysqli_connect_error());
    }
    //(nombre de la base de datos, $enlace) mysql_select_db("RelocaDB",$link);
    
    //capturando datos
    $v2 = $_REQUEST['Nombre'];
    
    //conuslta SQL
    $sql = ("select * from perros where Nombre like '".$v2."'");
    
    //cuantos reultados hay en la buesqueda
    $result = mysqli_query($conexion, $sql);
    $num_resultados = mysqli_num_rows($result);
    echo "<p>Número de perros encontrados: ".$num_resultados."</p>";
    echo "<table > <tr><th> N° </th> <th> DNI </th> <th> Nombre </th> <th> Raza </th> <th> Genero </th> <th> Nacimiento </th> </tr>";
//mostrando informacion de los perros y detalle
for ($i=0; $i <$num_resultados; $i++) {
    echo "<tr>";
    $row = mysqli_fetch_array($result); 
    echo " <th>".($i+1)."</th>";
    echo " <th>".$row["DNI"]."</th>";
    echo " <th>".$row["Nombre"]."</th>";
    echo " <th>".$row["Raza"]."</th>";

    if($row["Genero"]==1){
        echo " <th> Macho </th>";
    }else{
        echo " <th> Hembra </th>";
    }
    echo " <th>".$row["FechaNacimiento"]."</th>";
    echo "</tr>";
}

?>