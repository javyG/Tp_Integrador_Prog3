<?php

require_once('ConexionSQL.php');
require_once('UsersModel.php');


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
      $usersModel = new UsersModel();

   
      $usuario = $_POST['users'];
      $password = $_POST['passw'];
     
   
  
    $userData = $usersModel->validate_user($usuario, $password);

    if (!empty($userData)) {
        if($userData[0]['role']== "Administrador"){
            session_start();
            $_SESSION['user'] = $userData[0]['user']; 
            ?>
            <script>
            window.alert("Bienvenido al dashboard!");
            window.location.href = "../destinos.php";
            </script>
            <?php
        }else{

        session_start();
        $_SESSION['user'] = $userData[0]['user']; 
        ?>
        <script>
        window.alert("Bienvenido a viaja ya!");
        window.location.href = "../usuario.php";
        </script>
        <?php
     
   
        exit();
    }} else {
        ?>
        <script>
        window.alert("Usuario o contraseña incorrectos");
        window.location.href = "index.php";
        </script>
        <?php
    }
}

?>