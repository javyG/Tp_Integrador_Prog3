<?php
require_once('ConexionSQL.php');
require_once('UsersModel.php');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $usersModel = new UsersModel();
   
    $usuario = $_POST['user'];
    $password = $_POST['pass'];
    
  
    $userData = $usersModel->validate_user($usuario, $password);

    if (!empty($userData)) {

        session_start();
        $_SESSION['user'] = $userData[0]['user']; 
        echo 'ingreso exitoso';
        //header("Location: .."); 
        exit();
    } else {
        echo "Usuario o contraseña incorrectos";
       // header("Location: .."); 
    }
}
?>
      