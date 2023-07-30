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
        <input type="text" name="Nombre" placeholder="Nombre">
        <!-- <img class="input-icon" src="/carpeta/nombrearchivo.svg" alt="imagenInput"> -->
      
        <input type="text" name="Apellido" placeholder="Apelido">
      
        <input type="number" name="DNI" placeholder="DNI" max>
        
        <input type="email" name="Email" placeholder="Email">
      
        <input type="number" name="Telefono" placeholder="Telèfono" max>
      
        <input type="text" name="Direccion" placeholder="Direcciòn">
      
        <input type="number" name="NumeroDir" placeholder="Número" max>
      
        <input type="text" name="Localidad" placeholder="Localidad"> 
    </div>
    <!-- . -->
    <div class="datos_boleto">
        <input type="date" name="FechaSalida" placeholder="Fecha de Salida">
      
        <input type="text" name="Origen" placeholder="Origen">
      
        <input type="text" name="Destino" placeholder="Destino">
      
        <input type="radio" name="TipoDeViaje" value="Ida" >
          Ida
          
        <input type="radio" name="TipoDeViaje" value="Ida y Vuelta" >
          Ida y Vuelta

        <input type="date" name="FechaVuelta" placeholder="Fecha de Vuelta">
        
        <input type="number" name="Num_Convoy" placeholder="Num Comvoy" max>

        <input type="number" name="Num_Coche" placeholder="Num Coche" max>
      
        <input type="number" name="NumAsiento" placeholder="Num Asiento" max>
      
        <input type="number" name="PrecioPersona" placeholder="Precio" >
      
        <input type="number" name="CantPasajeros" placeholder="Cantidad de pasajeros" max>
      
        <input type="number" name="PrecioTotal" placeholder="Precio Total" max>
      
        <input type="date" name="FechaReserva" placeholder="Fecha Reserva" max>
      
        <input type="number" name="Num_Operacion" placeholder="Num operaciòn">
    </div>

    <input class="btn" type="submit" name="btnRegister" value="Enviar">
  </form>

  <?php
  
    require('./back-end/ConexionSQL.php');
  ?>
  
</body>
</html>
