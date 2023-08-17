<?php
  require_once('modeloReservas.php');  


  //toma de datos de reserva
  // ID RESERVA
  //if($_SERVER["REQUEST_METHOD"] === POST(['btnRegister'])){

    $mostrar = new modeloReservas();
   
    if(isset($_POST['btnReservar'])){
   
          $reserva = array(  
          'id_res' => '3',
          'nombre'=> $_POST['Nombre_'],
          'apellido' => $_POST['Apellido_'],
          'dni' => $_POST['Dni_'],
          'mail' => trim($_POST['Email_']),
          'telefono' => $_POST['Telefono_'],
          'direccion' => $_POST['Direccion_'],
          'numero' => $_POST['NumeroDir_'],
          'localidad' => $_POST['Localidad_'],
          'fecha' => $_POST['FechaSalida_'],
          'origen' => $_POST['Origen_'],
          'destino' => $_POST['Destino_'],
          'tipoViaje' => $_POST['TipoDeViaje_'] ?? 'Ida',
          'fechaVuelta' => $_POST['FechaVuelta_'],
          'numConboy' => $_POST['NumConvoy_'],
          'numCoche' => $_POST['NumCoche_'],
          'numAsiento' => $_POST['NumAsiento_'],
          'precioPorPersona' => $_POST['PrecioPersona_'],
          'cantPasajeros' => $_POST['CantPasajeros_'],
          'precioTotal' => $_POST['PrecioTotal_'],
          'fechaDeReserva' => $_POST['FechaReserva_'],
          'numOperacion_Boleto' => $_POST['NumOperacion_'],
          'ramal'=> $_POST['Ramal_']
          );
       
            $mostrar->create($reserva);
    if (!empty($reserva)){
        echo '<script>';
        echo 'alert("Se completó tu reserva. Felicitaciones. Solo falta un paso para viajar");';
        echo 'window.location.href = "../cargapasajeros.php";'; 
        echo '</script>'; 
      }else{
        ?>
          <br><br>
          <h3 class="error">Ocurrió un error. Revisa los datos ingresados.</h3>
        <?php
      }
    }  
?>
