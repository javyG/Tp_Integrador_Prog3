<?php

  include_once('ConexionSQL.php');
  require_once('UsersModel.php');

  //toma de datos de reserva
  // ID RESERVA
  if($_SERVER["REQUEST_METHOD"] === POST(['btnRegister'])){
    // $_SERVER["REQUEST_METHOD"] === "POST"

    $controlModel = new UsersModel();
   
    $nombre = $_POST['Nombre'];
    $apellido = $_POST['Apellido'];
    $dni = $_POST['DNI'];
    $mail = trim($_POST['Email']);
    $telefono = $_POST['Telefono'];
    $direccion = $_POST['Direccion'];
    $numeroDir = $_POST['NumeroDir'];
    $localidad = $_POST['Localidad'];

    $fechaSalida = $_POST['FechaSalida'];
    $origen = $_POST['Origen'];
    $destino = $_POST['Destino'];
    $tipoDeViaje = ['TipoDeViaje'] ?? 'Ida';
    $fechaVuelta = $_POST['FechaVuelta'];
    $numConvoy = $_POST['Num_Convoy'];
    $numCoche = $_POST['Num_Coche'];
    $numAsiento = $_POST['NumAsiento'];
    $precioPersona = $_POST['PrecioPersona'];
    $cantPasajeros = $_POST['CantPasajeros'];
    $precioTotal = $_POST['PrecioTotal'];
    $fechaDeReserva = $_POST['FechaReserva'];
    $numOperacion = $_POST['Num_Operacion'];
  
    $reserva = $controlModel->reservar(
      $nombre, $apellido, $dni, $mail, $telefono, $direccion, $numeroDir, $localidad, $fechaSalida, $origen, $destino, $tipoDeViaje, $fechaVuelta, $numConvoy, $numCoche, $numAsiento, $precioPersona, $cantPasajeros, $precioTotal, $fechaDeReserva, $numOperacion);

    if (!empty($reserva)){

        // $procedimSql = mysql_query($conn, "CALL insertarReserva('$nombre', '$apellido', '$dni', '$mail', '$telefono', '$direccion', '$numeroDir', '$localidad', '$fechaSalida', '$origen', '$destino', '$tipoDeViaje','$fechaVuelta','$numConvoy','$numCoche','$numAsiento','$precioPersona','$cantPasajeros','$precioTotal','$fechaDeReserva','$numOperacion')");

        ?>
          <br><br>
          <h3 class="success">Se completó tu reserva. Felicitaciones. Solo falta un paso para viajar</h3>
        <?php
      }else{
        ?>
          <br><br>
          <h3 class="error">Ocurrió un error. Revisa los datos ingresados.</h3>
        <?php
      }

    }else{
      ?>
          <br><br>
          <h3 class="error">Debes completar todos los campos</h3>
        <?php
    }
  
?>
