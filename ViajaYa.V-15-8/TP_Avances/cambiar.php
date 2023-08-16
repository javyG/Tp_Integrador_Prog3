<?php
require_once('UsersModel.php');

session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){
  
    $usersModel = new UsersModel();
 
    $user_data = array(
        'userID' => $_POST['user_ID'],
        'name' => $_POST['newname'],
        'mail' => $_POST['newmail'],
        'user' => $_POST['newuser'],
        'pass' => $_POST['newpass'],
        'role' => 'Administrador'
    );
      $usersModel->update($user_data);
      ?>
        <script>
          window.alert("Datos actualizados!");
          window.location.href = "../administrador.php";
        </script>
      <?php
  }

  ?>
  ?>
