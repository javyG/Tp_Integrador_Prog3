<?php
require_once('controlUsuarios.php');

if(isset($_POST['Registrar'])){

    $control_user = new ControlUsuarios();

    $user_data = array(
        'name' => $_POST['name'],
        'mail' => $_POST['mail'],
        'user' => $_POST['user'],
        'pass' => $_POST['pass'],
        'role' => $_POST['role']
    );

    $control_user->create($user_data);
    echo 'registro completo';

    exit();
}


  ?>
