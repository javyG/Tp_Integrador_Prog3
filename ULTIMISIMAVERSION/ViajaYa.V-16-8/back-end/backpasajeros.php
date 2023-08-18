<?php

require_once("modeloReservas.php");
$reservas = new modeloReservas();
$cantidad = $reservas-> obtener_idUltReserva();

require_once("modeloReservas.php");
$reservas2 = new modeloReservas();

$cantidadInt = intval($cantidad);

?> 



<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cantPasajeros = isset($_POST['cantPasajeros']) ? intval($_POST['cantPasajeros']) : 1;

    for ($i = 0; $i < $cantPasajeros; $i++) {

        $pasajero_data = array(
                         'nombre' => $_POST['nombre'][$i],
                         'apellido' => $_POST['apellido'][$i],
                         'dni' => $_POST['dni'][$i],
                         'num_boleto' => $_POST['num_boleto'][$i],
                         'nro_reserva' => $cantidadInt
                   );
      
      
        $cantidad2 = $reservas2->nuevopasajero($pasajero_data);



    }
    echo '<script>';
    echo 'alert("Gracias por tu compra");';
    
    echo '</script>';
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>tu boleto</title>
        <link rel="stylesheet" href="../styleReservas.css">
    </head>
    <body>
    <h3>Descarga tu boleto aquí!</h3>

    <input class="btn" id="imprimir_bol" type="submit" name="btnimprimirboleto" value="Imprimir boleto">
    <script>
    document.getElementById('imprimir_bol').addEventListener('click', function() {

    var url = '../boleto.php';


    window.open(url, '_blank');
});
</script>  
    </body>
    </html>
    
<?php
}
?>