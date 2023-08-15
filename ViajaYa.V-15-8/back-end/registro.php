<?php
require_once('UsersModel.php');

if(isset($_POST['Registrar'])){
  
    $usersModel = new UsersModel();
 
    $user_data = array(
        'name' => $_POST['name'],
        'mail' => $_POST['mail'],
        'user' => $_POST['user'],
        'pass' => $_POST['pass'],
        'role' => 'Usuario'
    );
      $usersModel->create($user_data);
      ?>
        <script>
          window.alert("Registro completo!");
          window.location.href = "../index.php";
        </script>
      <?php
  }

  ?>
