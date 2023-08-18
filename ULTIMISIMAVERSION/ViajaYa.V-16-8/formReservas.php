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
          <a class="registro" href="usuario.php">Volver</a>    
          </nav>
  </header>

  <form class="form" action="back-end/reservas.php" method="POST" id="reservasForm">
    <h1>Reserva ahora</h1>
    <!-- <p>Hacé tu reserva</p> -->


    <!-- <p>Hacé tu reserva</p> -->

    <div class="container-form">
      <div class="datos_pasajero">

        <input type="text" name="Nombre_" placeholder="Nombre">
          
          <input type="text" name="Apellido_" placeholder="Apelido">
        
          <input type="number" name="Dni_" placeholder="DNI" max>
          
          <input type="email" name="Email_" placeholder="tu@email">
        
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
          
          <input type="hidden" name="NumConvoy_" value="1">

          <input type="hidden" name="NumCoche_"  value="1">
        
          <input type="hidden" name="NumAsiento_" value="1">
        
          <input type="hidden" name="PrecioPersona_" value="1">
        
          <input type="number" id="cantidadPasajeros" name="CantPasajeros_" placeholder="Cantidad de pasajeros" min="1" max="10"max>
        
          <input type="hidden" name="PrecioTotal_" value="0">

          <input type="date" name="FechaReserva_" value="0">
        
          <input type="hidden" name="NumOperacion_" value="0"> 

          <input type="text" name="Ramal_" placeholder="Ramal"> 
      </div>

      
    </div>
    <input class="btn" type="submit" name="btnReservar" value="Siguiente">
    
    
    
  </form>
        
<br>
<br>

 
</body>
</html>
