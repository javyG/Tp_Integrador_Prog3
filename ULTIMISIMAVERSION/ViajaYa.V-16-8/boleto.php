<?php
require_once 'dompdf/autoload.inc.php';
require_once("pdfimpresion.php");
require_once("back-end/modeloReservas.php");

use Dompdf\Dompdf;

$reservas = new modeloReservas();
$datosReserva = $reservas->imprimir();
$reservas= new modeloReservas();
$pasajerosReserva = $reservas->imprimirpasajeros();
 
$reservas = new modeloReservas();
$cantidad = $reservas->obtenerCantidadPasajeros();


?>

<!DOCTYPE html>
<html>
<head>
    <title>Detalle de Reserva</title>
</head>
<body>

<form method="post">
    <button type="submit" name="generar_pdf">Generar PDF</button>
</form>



<?php

echo "<h1>Detalle de Reserva</h1>";

echo "<p>ID Reserva: " . $datosReserva['reserva']['reservas_nro'] . "</p>";
echo "<p>Fecha salida: " . $datosReserva['reserva']['fecha_reserva'] . "</p>";
echo "<p>Fecha de vuelta: " . $datosReserva['reserva']['fecha_vuelta'] . "</p>";
echo "<p>Mail: " . $datosReserva['reserva']['mail_reserva'] . "</p>";
echo "<p>Origen: " . $datosReserva['reserva']['origen_reserva'] . "</p>";
echo "<p>Destino: " . $datosReserva['reserva']['destino_reserva'] . "</p>";


echo "<h2>Pasajeros</h2>";
echo "<ul>";
foreach ($datosReserva['pasajeros'] as $pasajero) {
    echo "<li>Nombre: " . $pasajero['nombre_pasajero'] . "</li>";
    echo "<li>Apellido: " . $pasajero['apellido_pasajero'] . "</li>";
    echo "<li>DNI: " . $pasajero['dni_pasajero'] . "</li>";
}
echo "</ul>";


$precio= 1000 * $cantidad;
echo "<p>Precio total " . $precio . "</p>";
echo "<p>Precio por cada pasajero $1000";


?>
</body>
</html>


