<?php
require_once('control_de_sesiones.php');
require_once('controlador_de_vistas.php');

if(!isset($_POST['btn_guardar_cambios'])){
    
    $control_user = new Control_Sesiones();
    $ver = new controlador_de_vistas();
   
    $userData = $control_user->login($_POST['users'], $_POST['passw']);

    if (!empty($userData)) {

        session_start();
    
       // echo 'ingreso exitoso';
        $ver->cargar_vista('formUsuarios');
         
       // exit();
    } else {
        echo "Usuario o contraseña incorrectos";
        //header("Location: ./"); 
    }
}
?>
      