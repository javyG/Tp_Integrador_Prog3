<?php
require_once('ConexionSQL.php');
require_once('UsersModel.php');

if(isset($_POST['Registrar'])){
  
  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Create a new instance of the UsersModel class
    $usersModel = new UsersModel();

    // Prepare the user data array from the POST data
    $user_data = array(
        'name' => $_POST['name'],
        'mail' => $_POST['mail'],
        'user' => $_POST['user'],
        'pass' => $_POST['pass'],
        'role' => '3'
    );

    // Call the create method to insert the user
    $usersModel->create($user_data);
    echo 'registro completo';
    // Optionally, you can redirect the user to a success page or display a success message.
    // For example, you can redirect to a success page like this:
   // header("Location: ./index2.php");
    exit();
}
}
  ?>
