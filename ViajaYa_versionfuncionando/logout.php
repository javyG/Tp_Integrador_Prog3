<?php
session_start();

// Destruir todas las variables de sesión
session_unset();
// Destruir la sesión
session_destroy();

// Redirigir al usuario a la página de inicio de sesión
header("Location: index.php");
?>