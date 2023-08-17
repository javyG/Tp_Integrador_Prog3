<?php

require_once("back-end/modeloReservas.php");
$reservas = new modeloReservas();
$cantidad = $reservas->obtenerCantidadPasajeros();

$consultar = new modeloReservas();
$idpasajeros = $consultar->obtener_idUltReserva()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carga de datos</title>
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
  <form >
    <h3>Cantidad de Pasajeros</h3>
    <input type="text" id="cantidad" name="cantPasajeros" placeholder="Cantidad pasajeros" value="<?php echo $cantidad; ?>" readonly>
   
</form>
<br>
<br>
<form action="back-end/backpasajeros.php" method="post">   
    <div id="pasajerosForm"></div>

    <div class="container">
        <button class="btn" type="button" onclick="agregarPasajeros()">CARGAR DATOS</button>
        <input class="btn" type="submit" name="btnReservar" value="Guardar datos pasajeros">
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

</body>
</html>