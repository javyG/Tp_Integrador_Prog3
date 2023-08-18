<?php

require_once("back-end/modeloReservas.php");
$reservas = new modeloReservas();
$cantidad = $reservas->obtenerCantidadPasajeros();

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


<form method="post" action=""> 

    <h3>Cantidad de Pasajeros</h3>
    <input type="text" id="cantidad" name="cantPasajeros" placeholder="Cantidad pasajeros" value="<?php echo $cantidad; ?>" readonly>
    <input  class='btn'type="submit" value="Ingesar pasajero">
</form>

<form method="post" action="back-end/backpasajeros.php">

<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $cantPasajeros = isset($_POST['cantPasajeros']) ? intval($_POST['cantPasajeros']) : 1;
    
        echo "<form  class='pasaj' method='post' action=''>";
    
        for ($i = 1; $i <= $cantPasajeros; $i++) {
            echo "<br>";
            echo "<h3>Pasajero   $i</h3><br>"; 
        
            echo "<input type='text' placeholder='Nombre' id='nombre_$i' name='nombre[]' required>";
            
            echo "<input type='text'placeholder='Apellido' id='apellido_$i' name='apellido[]' required>";
          
            echo "<input type='text' placeholder='Dni' id='dni_$i' name='dni[]'  required>";
           
            echo "<input type='number'  placeholder='Numero Boleto' id='num_boleto_$i' name='num_boleto[]' required>";
            echo "<br>";
        }
    
        echo "<input type='hidden' name='cantPasajeros' value='$cantPasajeros'>";
        echo "<input class='btn' type='submit' value='Enviar datos'>";
   
    }


    ?>
        
</form>



</body>
</html>