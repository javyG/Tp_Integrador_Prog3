<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reservas</title>
  <link rel="stylesheet" src="/styleReservas.css" type="text/css" href="styleReservas.css">
</head>
<body>
  <header>
          <a href="index.php">
          <img class="logo"  src="Imagen/logo.png" alt="">
          </a> 
          <nav>
              <a class="registro" href="formReservas.php">Reservar</a>
              <a class="registro" onclick="registrarse();">Registrarse</a>
              <a class="login-usuario" onclick="iniciarsesion();">Iniciar Sesión</a>        
          </nav>
  </header>

  <form class="form" action="back-end/Calcular.php" method="POST">
    <h1>Reservas</h1>
    <p>Hacé tu reserva</p>

    <div class="datos_pasajero">
        <input type="text" name="Ramal" placeholder="Ramal"required>
        <!-- <img class="input-icon" src="/carpeta/nombrearchivo.svg" alt="imagenInput"> -->

        <input type="number" name="Precio por Km" placeholder="Precio por Km" max required>
      
        <input type="number" name="precio total" placeholder="Precio total" required>

        <input type="number" name="cant_de_pasajeros" placeholder="Cantidad de pasajeros"required>
        
        <input type="date" name="FechaReserva" placeholder="Fecha Reserva" max required>
    </div>
    <input class="btn" type="submit" name="btn_consultar" value="Enviar">
  </form>
</body>
</html>
