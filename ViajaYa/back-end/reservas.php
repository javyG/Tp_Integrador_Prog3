<?php
  require_once('modeloReservas.php');
  
require_once('UsersModel.php');

  //toma de datos de reserva
  // ID RESERVA
  if(isset($_POST['btnReservar'])){
    // $_SERVER["REQUEST_METHOD"] === "POST"

    if(isset($_POST['btnReservar'])){
      $usersModel = new UsersModel();

    $reserva = array(
      /*
      'nombre' => $_POST['Nombre_'],
      'apellido' => $_POST['Apellido_'],
      'dni' => $_POST['Dni_'],
      'mail' => trim($_POST['Email_']),
      'telefono' => $_POST['Telefono_'],
      'direccion' => $_POST['Direccion_'],
      'numeroDir' => $_POST['NumeroDir_'],
      'localidad' => $_POST['Localidad_'],
      'fechaSalida' => $_POST['FechaSalida(date("d-m-Y"))'],
      'origen' => $_POST['Origen_'],
      'destino' => $_POST['Destino_'],
      'tipoDeViaje' => ['TipoDeViaje_'],
      'fechaVuelta' => $_POST[date("d-m-Y")],
      'numConvoy' => $_POST[mt_rand(100,220)],
      'numCoche' => $_POST[mt_rand(20,50)],
      'numAsiento' => $_POST[mt_rand(1,80)],
      'precioPersona' => $_POST['PrecioPersona_'],
      'cantPasajeros' => $_POST['CantPasajeros_'],
      'precioTotal' => $_POST['PrecioTotal_'],
      'fechaDeReserva' => SYSDATE(),
      'numOperacion' => $_POST['NumOperacion_']
      */
      
      'nombre' => 'test',
      'apellido' => 'agosto',
      'dni' => '366',
      'mail' => 'hola@gmail.com',
      'telefono' => '1115',
      'direccion' => 'catán',
      'numeroDir' => '1759',
      'localidad' => 'matancity',
      'fechaSalida' => '7/7/23',
      'origen' => '1',
      'destino' => '20',
      'tipoDeViaje' => '2',
      'fechaVuelta' => '7/8/25',
      'numConvoy' => '100',
      'numCoche' => '10',
      'numAsiento' => '20',
      'precioPersona' => '1000',
      'cantPasajeros' => '1',
      'precioTotal' => '1000',
      'fechaDeReserva' => '1/6/23',
      'numOperacion' => '25'
      
    );
   
    $usersModel->reservar($reserva);

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

    }
    

    }else{
      ?>
          <br><br>
          <h3 class="error">Debes completar todos los campos</h3>
        <?php
    }
  
?>
