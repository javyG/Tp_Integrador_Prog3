<?php require_once('modeloReservas.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar Reservas</title>
  <link rel="stylesheet" src="/editarReservas.css" type="text/css" href="editarReservas.css">
</head>
<body>
  <header>
          
          <img class="logo"  src="../Imagen/logo.png" alt="">
          <nav>
      
            <a class="button" href="../administrador.php">Volver</a>
            <a class="cerrar" href="logout.php">Cerrar Sesión</a>
             
          </nav>
  </header>

  
</body>
<?php
    
    $mostrar = new modeloReservas();
    $mostrar_datos = $mostrar->read();
    $list_view = count($mostrar_datos);
    //var_dump($mostrar_datos);
    
    echo"<h2>Numero de filas: <marck>$list_view</marck></h2>";
    echo'<h2>Tabla de Reservas</h2>';
    echo '<table>
         <tr>
             <th> Nombre </th>
             <th> Apellido </th>
             <th> Dni </th>
             <th> Email </th>
             <th> Telefono </th>
             <th> Fecha Salida </th>
             <th> Origen </th>
             <th> Destino </th>
             <th> Tipo de viaje </th>
             <th> Fecha de regreso </th>
             <th> N° Convoy </th>
             <th> N° Vagon </th>
             <th> N°  Asiento </th>
             <th> $ por persona </th>
             <th> Cant de pasajeros </th>
             <th> $ Total </th>
             <th> Fecha de reserva </th>
             <th> N° de operacion/boleto </th>        
         </tr>';
      for($n = 0; $n < count($mostrar_datos);$n++){
          echo '<tr>
             <td>' . $mostrar_datos[$n]['nombre'] . '</td>
             <td>' . $mostrar_datos[$n]['apellido'] . '</td>
             <td>' . $mostrar_datos[$n]['dni'] . '</td>
             <td>' . $mostrar_datos[$n]['mail'] . '</td>
             <td>' . $mostrar_datos[$n]['telefono'] . '</td>
             <td>' . $mostrar_datos[$n]['fecha'] . '</td>
             <td>' . $mostrar_datos[$n]['origen'] . '</td>
             <td>' . $mostrar_datos[$n]['destino'] . '</td>
             <td>' . $mostrar_datos[$n]['tipoViaje'] . '</td>
             <td>' . $mostrar_datos[$n]['fechaVuelta'] . '</td>
             <td>' . $mostrar_datos[$n]['numConboy'] . '</td>
             <td>' . $mostrar_datos[$n]['numCoche'] . '</td>
             <td>' . $mostrar_datos[$n]['numAsiento'] . '</td>
             <td>' . $mostrar_datos[$n]['precioPorPersona'] . '</td>
             <td>' . $mostrar_datos[$n]['cantPasajeros'] . '</td>
             <td>' . $mostrar_datos[$n]['precioTotal'] . '</td>
             <td>' . $mostrar_datos[$n]['fechaDeReserva'] . '</td>
             <td>' . $mostrar_datos[$n]['numOperacion_Boleto'] . '</td>
             <td>
             
             <form action="editarReservas.php" method="POST">
              <td><input name="id_reserva" value='. $n .'></td>
              <td><input type="submit" name="btnEliminarRes" value="Eliminar"></td>
             </form>
              
         </tr>';
        }
    echo'</table>';
if(isset($_POST['btn_registrar'])){
//if(empty($reservas)){
  //print('entro en el if');
    $reserva = array(  
    'id_res' =>$_POST['id_res'], //agregar un input de reserva a editar post id+res
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
    'ramal' => $_POST['ramal_'] //tiene q traerlo desde la reserva
    );
 
      $mostrar->create($reserva);

      print('Guardado exitoso');

      //variable para borrar las reservas
      $del=152; // ingresar numero 

      $mostrar->delete($del);
      
      //$mostrar->update($reserva); agregar input para editar la reserva segun id

      unset($mostrar_datos);
  }else{
    
    // print('complete todos los campos');
  }
  unset($mostrar_datos);

  if(isset($_POST['btnEliminarRes'])){
  
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
      
      $deleteModel = new modeloReservas();
        
      $id_res = $_POST['id_reserva'];

      $deleteModel->delete($id_res);

      echo 'Reserva eliminada';
  }
  
  } 
?>

<!-- <input class="btn" type="submit" name="btnActualizarRes" value="Actualizar"> -->




</html>
