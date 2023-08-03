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

  <form class="form" action="back-end/reservas.php" method="POST">
    <h1>Reservas</h1>
    <p>Hacé tu reserva</p>

    <div class="datos_pasajero">
        <input type="text" name="Nombre_" placeholder="Nombre">
        <!-- <img class="input-icon" src="/carpeta/nombrearchivo.svg" alt="imagenInput"> -->
      
        <input type="text" name="Apellido_" placeholder="Apelido">
      
        <input type="number" name="Dni_" placeholder="DNI" max>
        
        <input type="email" name="Email_" placeholder="Email">
      
        <input type="number" name="Telefono_" placeholder="Telèfono" max>
      
        <input type="text" name="Direccion_" placeholder="Direcciòn">
      
        <input type="number" name="NumeroDir_" placeholder="Número" max>
      
        <input type="text" name="Localidad_" placeholder="Localidad"> 
    </div>
    <!-- . -->
    <div class="datos_boleto">
        <input type="date" name="FechaSalida_" placeholder="Partida: 2023-12-30 ">
      
        <input type="text" name="Origen_" placeholder="Origen">
      
        <input type="text" name="Destino_" placeholder="Destino">
      
        <div>
          <input type="radio" name="TipoDeViaje_" value="1" placeholder="Destino">
            Ida
            
          <input type="radio" name="TipoDeViaje_" value="2" placeholder="Destino">
            Ida y Vuelta
        </div>
        

        <input type="date" name="FechaVuelta_" placeholder="Regreso: 2023-12-30">
        
        <!-- <input type="number" name="NumConvoy_" placeholder="Num Comvoy" max>

        <input type="number" name="NumCoche_" placeholder="Num Coche" max> -->
      
        <input type="number" name="NumAsiento_" placeholder="Num Asiento" max>
      
        <input type="number" name="PrecioPersona_" placeholder="Precio" >
      
        <input type="number" name="CantPasajeros_" placeholder="Cantidad de pasajeros" max>
      
        <input type="number" name="PrecioTotal_" placeholder="Precio Total" max>
      
        <input type="number" name="NumOperacion_" placeholder="Num operaciòn">
    </div>

    <input class="btn" type="submit" name="btnReservar" value="Enviar">
  </form>

  <?php
  
    require('./back-end/ConexionSQL.php');
  ?>
  
</body>
</html>
