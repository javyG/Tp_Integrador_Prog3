<?php
require_once('UsersModel.php');

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['username'])) {
        $username = $_POST['username'];
        $leer = new UsersModel();
        $result = $leer->read($username);

        if (!empty($result)) {
            // Mostrar los resultados
            echo "<h2>Resultados de la búsqueda:</h2>";
            foreach ($result as $user) {
                echo "ID: " . $user['id_user'] . " - Nombre de Usuario: " . $user['user'] . "<br>";
            }
        } else {
            echo "No se encontraron usuarios.";
        }
    }
}

  ?>