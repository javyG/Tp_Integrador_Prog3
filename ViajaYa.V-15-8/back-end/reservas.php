<?php
  require_once('modeloReservas.php');

  //toma de datos de reserva
  // ID RESERVA
  //if($_SERVER["REQUEST_METHOD"] === POST(['btnRegister'])){

    $mostrar = new modeloReservas();
   
    if(isset($_POST['btnRegister'])){
   
          $reserva = array(  
          'id_res' => '3',
          'nombre'=> $_POST['Nombre'],
          'apellido' => $_POST['Apellido'],
          'dni' => $_POST['DNI'],
          'mail' => trim($_POST['Email']),
          'telefono' => $_POST['Telefono'],
          'direccion' => $_POST['Direccion'],
          'numero' => $_POST['NumeroDir'],
          'localidad' => $_POST['Localidad'],
          'fecha' => $_POST['FechaSalida'],
          'origen' => $_POST['Origen'],
          'destino' => $_POST['Destino'],
          'tipoViaje' => $_POST['TipoDeViaje'] ?? 'Ida',
          'fechaVuelta' => $_POST['FechaVuelta'],
          'numConboy' => $_POST['Num_Convoy'],
          'numCoche' => $_POST['Num_Coche'],
          'numAsiento' => $_POST['NumAsiento'],
          'precioPorPersona' => $_POST['PrecioPersona'],
          'cantPasajeros' => $_POST['CantPasajeros'],
          'precioTotal' => $_POST['PrecioTotal'],
          'fechaDeReserva' => $_POST['FechaReserva'],
          'numOperacion_Boleto' => $_POST['Num_Operacion'],
          'ramal'=> $_POST['Ramal']
          );
       
            $mostrar->create($reserva);
    if (!empty($reserva)){
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
?>
