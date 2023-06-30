<?php
$servername = "db4free.net:3306";
$username = "trenes_viajaya";
$password = "viajaya123";
$bd = "trenes";

// Create connection
$conn = new mysqli($servername, $username, $password, $bd);

// Check connection
if ($conn->connect_error) {
  die("Falló la conexión: " . $conn->connect_error);
}
echo "Conectado exitosamente";
?>