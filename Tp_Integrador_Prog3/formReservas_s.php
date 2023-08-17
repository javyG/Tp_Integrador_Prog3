<?php
include('back-end/Distancia.php');?>

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
  </header>

  <form class="form" action="back-end/reservas.php" method="POST">
    <h1>Reserva ahora tus boletos</h1>
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
          
          <!-- * -->
          <label for="Origen_">Origen:</label>

          <select name="Origen_" id="origen" onchange="cargarDestinosPorRamal()">
            <?php 
            
            if (empty($origenes)) {

                echo '<option value="" disabled>No hay datos disponibles</option>';

                } else {

                  foreach ($origenes as $origen) {

                    echo '<option value="' . $origen['desde'] . '" data-ramal="' . $origen['ramal'] . '">' . $origen['desde'] . '</option>';
                  }
                }
            ?>
          </select>
          <br>
          <label for="Destino_">Destino:</label>
          <select name="Destino_" id="destino-ramal" placeholder="Hola">
          </select>
          <br>
                
          <script>

          function cargarDestinosPorRamal() {
            var origenSelect = document.getElementById("origen");
            var destinoRamalSelect = document.getElementById("destino-ramal");
            var selectedRamal = origenSelect.options[origenSelect.selectedIndex].getAttribute("data-ramal");

              destinoRamalSelect.innerHTML = '<option value="" disabled selected>Selecciona un destino</option>';
              <?php

                foreach ($destinos as $destino) {
                  echo 'if ("' . $destino['ramal'] . '" === selectedRamal && "' . $destino['hasta'] . '" !== origenSelect.value) {';
                  echo 'destinoRamalSelect.innerHTML += \'<option value="' . $destino['hasta'] . '">' . $destino['hasta'] . '</option>\';';
                  echo '}';
                }
              ?>
            }
          </script>
           <!--  -->
        
         
        
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
        
          <input type="number" name="CantPasajeros_" placeholder="Cantidad de pasajeros" min="1" max="10"max>
        
          <input type="hidden" name="PrecioTotal_" value="0">

          <input type="date" name="FechaReserva_" value="0">
        
          <input type="hidden" name="NumOperacion_" value="0"> 

          <input type="text" name="Ramal_" placeholder="Ramal"> 
      </div>

      
    </div>
    <input class="btn" type="submit" name="btnReservar" value="Enviar">
  </form>
<form action="/form_pasajeros/form3.php" method="post">

    <label for="cantidad">Pasajeros (Max 10):</label>
    <input type="number" id="cantidad" name="cantPasajeros" min="1" max="10" onchange="agregarPasajeros()">
    <br><br>

    <div id="pasajerosForm"></div>

    <div class="container">
        <button class="centered-button" type="submit">Enviar</button>
    </div>

</form>

  <div class="confirmar">

  <input class="btn" id="imprimir_bol" type="submit" name="btnimprimirboleto" value="Imprimir boleto">
 
  </div>
 
  <script>
   document.getElementById('imprimir_bol').addEventListener('click', function() {
    
    var url = 'boleto.php';

    // Abre una nueva ventana o pestaña con la URL especificada
    window.open(url, '_blank');
});
</script>
<script>
        function agregarPasajeros() {
            var cantidad = document.getElementById("cantidad").value;
            var formulario = document.getElementById("pasajerosForm");
            formulario.innerHTML = ""; // Limpiar el contenido actual del formulario

            for (var i = 1; i <= cantidad; i++) {
                var section = document.createElement("section");
                section.className = "form";

                section.innerHTML = `
                    <label for="nombre${i}">Nombre:</label>
                    <input type="text" id="nombre${i}" name="pasajero[${i}][nombre]" required>
                    <br><br>
                    
                    <label for="apellido${i}">Apellido:</label>
                    <input type="text" id="apellido${i}" name="pasajero[${i}][apellido]" required>
                    <br><br>
                    
                    <label for="dni${i}">DNI:</label>
                    <input type="number" id="dni${i}" name="pasajero[${i}][dni]" required>
                    <br><br>
                    
                    <label for="numpasajero${i}">N° pasajero:</label>
                    <input type="number" id="numpasajero${i}" name="pasajero[${i}][num_boleto]" min="1" required>
                    <br><br>
                `;

                formulario.appendChild(section);
            }
        }
        
    </script>
    
    

  <?php
 
  

  ?>
  
</body>
</html>
