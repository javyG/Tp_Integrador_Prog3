<?php
require_once 'dompdf/autoload.inc.php';
require_once("back-end/modeloReservas.php");

use Dompdf\Dompdf;

$reservas = new modeloReservas();
$ultimareserva = $reservas->imprimir();

function generarContenidoHTML() {
    ob_start();
    include('boleto.php'); 
    $html = ob_get_clean();
    return $html;
}

if (isset($_POST['generar_pdf'])) {
    $dompdf = new Dompdf();
    $html = generarContenidoHTML();
    $dompdf->loadHtml($html);
    $dompdf->setPaper('A4', 'portrait');
    $dompdf->render();
    $dompdf->stream('boleto.pdf', array('Attachment' => 0));
}
?>


