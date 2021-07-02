<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="register-style.css">
</head>
<body>



<form  action="Modificar.php" method="GET">
    <div class="container">
      <h1>Registro de Usuario</h1>
      <hr>
  
      <label for="usuario"><b>Nombre de Usuario</b></label>
      <input type="text" placeholder="Nombre de Usuario" name="usuario" id="usuario" required>
  
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Email" name="email" id="email" required>
  
      <hr>

      <?php
        $v1=$_GET['usuario'];
        echo "<input type='text' style='display:none;' value=".$v1." name='usuarioA' id='usuarioA' required>";
      ?>
      
      <button type="submit" class="registerbtn">Registrarse</button>
    </div>
  
    
  </form>
</body>