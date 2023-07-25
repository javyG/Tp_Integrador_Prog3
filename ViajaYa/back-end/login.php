<?php
session_start();
include("conexion.php");

// Procesar los datos del formulario

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["user"];
    $password = $_POST["password"];

    // Consulta para verificar el usuario en la base de datos
    $sql = "SELECT user_id, pass FROM Usuarios WHERE user = '$username' AND pass = MD5('$password')";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
       // El usuario ha sido validado correctamente
       echo 'Inicio exitoso';
      $row = $result->fetch_assoc();
      $stored_password = $row["pass"];
      
      // Verificar la contraseña utilizando la función password_verify
      if (password_verify($password, $stored_password)) {
          
          $_SESSION["user_id"] = $row["user_id"];
          header("Location: Views/index2.php"); // Redirige a la página de inicio de usuario
      } else {
          // Contraseña incorrecta
          echo "contraseña incorrecta.";
      }
    
    } else {
        // El usuario no ha sido encontrado 
        echo "Nombre de usuario  incorrecto.";
    }
}

// Cerrar la conexión
$conn->close();
?>
      