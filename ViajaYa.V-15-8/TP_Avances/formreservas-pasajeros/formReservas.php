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
              <a class="registro" onclick="registrarse();">Registrarse</a>
              <a class="login-usuario" onclick="iniciarsesion();">Iniciar Sesión</a>        
          </nav>
  </header>

  <form class="form" action="back-end/reservas.php" method="POST" id="reservasForm">
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
        
          <input type="number" id="cantidadPasajeros" name="CantPasajeros_" placeholder="Cantidad de pasajeros" min="1" max="10"max>
        
          <input type="number" name="PrecioTotal_" placeholder="Precio Total" max>
        
          <input type="hidden" name="NumOperacion_" value="0"> 
      </div>

      
    </div>
    <input class="btn" type="submit" name="btnReservar" value="Siguiente">
    
    
    
  </form>
        
<br>
<br>

    

<form action="/form_pasajeros/form3.php" method="post">
    <input type="text" id="cantidad" name="cantPasajeros" placeholder="Cantidad pasajeros" readonly>
 
</form>
<br>
<br>
<form>   
    <div id="pasajerosForm"></div>

    <div class="container">
        <button class="btn" type="button" onclick="agregarPasajeros()">CARGAR DATOS</button>
        <button class="btn" type="submit">GUARDAR</button>
    </div></form>
<br>
<br>
  <form>
    <h3>Descarga tu boleto aquí!</h3>

  <input class="btn" id="imprimir_bol" type="submit" name="btnimprimirboleto" value="Imprimir boleto">
  </form>
 
 
  <script>
   document.getElementById('imprimir_bol').addEventListener('click', function() {
    
    var url = 'boleto.php';

    // Abre una nueva ventana o pestaña con la URL especificada
    window.open(url, '_blank');
});
</script>
<script>
    function agregarPasajeros() {
        var cantidad = parseInt(document.getElementById("cantidad").value);
        var formulario = document.getElementById("pasajerosForm");
        formulario.innerHTML = ""; // Limpiar el contenido actual del formulario

        for (var i = 1; i <= cantidad; i++) {
            var section = document.createElement("section");
            section.className = "form";

            section.innerHTML = `
                <label>INGRESE EL DATO DEL PASAJERO</label>
                <br>
                <br>
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
  <script>
    document.addEventListener("DOMContentLoaded", function() {
        var reservasForm = document.getElementById("reservasForm");
        var cantidadPasajerosInput = document.getElementById("cantidadPasajeros");

        reservasForm.addEventListener("submit", function(event) {
            var cantidadPasajeros = cantidadPasajerosInput.value;
            // Asignar el valor a la variable "cantidadpasajeros"
            document.getElementById("cantidad").value = cantidadPasajeros;
            
            // Si deseas evitar que el formulario se envíe y recargue la página
            event.preventDefault();
        });
    });
</script>

  <?php
 
  
  require('back-end/ConexionSQL.php');
  ?>
  
</body>
</html>
