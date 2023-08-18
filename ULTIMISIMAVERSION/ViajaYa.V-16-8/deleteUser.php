<?php
require_once('back-end/UsersModel.php');

$_SESSION['user'] =  '<p>Sesion Iniciada</p>';
if ($_SESSION) {

    $usersModel = new UsersModel();
    $usersModel->delete($_POST['user_ID']);
?>
    <script>
    window.alert("Usuario eliminado");
    window.location.href = "../administrador.php";
    </script>
<?php

}

?>