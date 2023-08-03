<?php
require_once('ConexionSQL.php');
require_once('UsersModel.php');


if(isset($_POST['Registrar'])){
  
  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Create a new instance of the UsersModel class
    $usersModel = new UsersModel();

    // Prepare the user data array from the POST data
    $user_data = array(
      //nombre_bd     nombre form
        'name' => $_POST['names'],
        'mail' => $_POST['mails'],
        'user' => $_POST['users'],
        'pass' => $_POST['passw'],
        'role' => 'Usuario',
    );

    // Call the create method to insert the user
    $usersModel->create($user_data);
    ?>
    <script>
    window.alert("Registro completo!");
    window.location.href = "usuario.php";
    </script>
    <?php
    exit();
}else{
  ?>
  <script>
  window.alert("Registro falló!");
  window.location.href = "index.php";
  </script>
  <?php
}
}
  ?>
