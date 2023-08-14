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
        ?>
        <script>
        window.alert("Bienvenido");
        window.location.href = "usuario.php";
        </script>
        <?php
     
   
        exit();
    } else {
        ?>
        <script>
        window.alert("Usuario o contraseña incorrectos");
        window.location.href = "index.php";
        </script>
        <?php
    }
}

?>


      