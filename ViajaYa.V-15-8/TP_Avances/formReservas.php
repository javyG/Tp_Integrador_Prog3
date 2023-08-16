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
  <!--      <nav>
              <a class="registro" onclick="registrarse();">Registrarse</a>
              <a class="login-usuario" onclick="iniciarsesion();">Iniciar Sesión</a>        
          </nav>-->
  </header>

  <form class="form" action="back-end/reservas.php" method="POST">
    <h1>Reserva ahora tus boletos</h1>
    <!-- <p>Hacé tu reserva</p> -->

    <div class="container-form">
      <div class="datos_pasajero">

        <input type="text" name="Nombre" placeholder="Nombre"required>
      
        <input type="text" name="Apellido" placeholder="Apelido"required>
      
        <input type="number" name="DNI" placeholder="DNI" max required>
        
        <input type="email" name="Email" placeholder="Email"required>
      
        <input type="number" name="Telefono" placeholder="Telèfono" max required>
      
        <input type="text" name="Direccion" placeholder="Direcciòn"required>
      
        <input type="number" name="NumeroDir" placeholder="Número" max required>
      
        <input type="text" name="Localidad" placeholder="Localidad"required> 
    </div>
    <!-- . -->
    <div class="datos_boleto">
        <input type="date" name="FechaSalida" placeholder="Fecha de Salida"required>
      
        <input type="text" name="Origen" placeholder="Origen"required>
      
        <input type="text" name="Destino" placeholder="Destino"required>
      
        <input type="radio" name="TipoDeViaje" value="Ida" required>
          Ida
          
        <input type="radio" name="TipoDeViaje" value="Ida y Vuelta" required>
          Ida y Vuelta

        <input type="date" name="FechaVuelta" placeholder="Fecha de Vuelta"required>
        
        <input type="hidden" name="Num_Convoy" value = "1"placeholder="Num Comvoy" max required>

        <input type="hidden" name="Num_Coche" value = "1"placeholder="Num Coche" max required>
      
        <input type="hidden" name="NumAsiento" value = "1"placeholder="Num Asiento" max required>
      
        <input type="number" name="PrecioPersona" placeholder="Precio" required>
      
        <input type="number" name="CantPasajeros" placeholder="Cantidad de pasajeros" max required>
      
        <input type="number" name="PrecioTotal" placeholder="Precio Total" max required>
      
        <input type="date" name="FechaReserva" placeholder="Fecha Reserva" max required>
      
        <input type="hidden" name="Num_Operacion" value = "1"placeholder="Num operaciòn"required>

        <input type="hidden" name="Ramal" placeholder="Ramal"required>
    </div>
    <input class="btn" type="submit" name="btnReservar" value="Enviar">
  </form>
</body>
</html>
