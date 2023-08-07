<?php
$print = '
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reservas</title>
  <link rel="stylesheet" src="css/styleReservas.css" type="text/css" href="css/styleReservas.css">
</head>
<body>
  <header>
          <a>
          <img class="logo" src="css/Imagen/logo.png" alt="">
          </a> 
          <nav>
              <a class="login-usuario" onclick="cerrarsesion();">Cerrar Sesión</a>        
          </nav>
  </header>

  <form class="form" action="crudUsuarios.php" method="POST">
    <h1>Crud de Usuarios</h1>
    <p> Hola Bienvenido "name" </p>


    <div class="datos_pasajero">
    <input type="Buscar" name="name" placeholder="Ingrese nombre de usuario">

    <input type="submit" value="Buscar" class="btn btn-success" name="btn_search">


        <input type="text" name="name" placeholder="Nombre">
        <!-- <img class="input-icon" src="/carpeta/nombrearchivo.svg" alt="imagenInput"> -->
        
        <input type="email" name="mail"  placeholder="Email">

        <input type="date" name="datehight"  placeholder="Fecha de Salida">

        <input type="date" name="datelow" placeholder="Fecha de Vuelta"> 

        <input type="text" name="user"  placeholder="Usuario">
      
        <input type="text" name="pass" placeholder="Clave">
      
        <input type="text" name="Role"  placeholder="Rol de Usuario">
        
    </div>

    <input type="submit" value="Enviar" class="btn btn-success" name="btn_guardar">
  </form>

</body>
</html>
';
print($print);

?>