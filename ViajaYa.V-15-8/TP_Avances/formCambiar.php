<?php
require_once('back-end/login.php');

//session_start();

$_SESSION['user'] =  '<p>Sesion Iniciada</p>';
if ($_SESSION) {

    $datos = new UsersModel();
    $registro = $datos->read();

    foreach ($registro as $registro) {
        $registro['user_id'];
        $registro['user'];
        $registro['name'];
        $registro['mail'];
        $registro['role'];
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viaja Ya - Cambio de contraseña</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<section class="principal">
    <div class="divprincipal">
        <div class="div1">
        </div>

        <div class="div2">
            
        <h4>Actulizacion de datos</h4>

                <form class="formlogin" action="back-end/cambiar.php" method="post">
                
                Id del usuario: <br>
                <input type="text" name="user_ID" placeholder="Id"><br><br>
                
                Nuevo nombre: 
                <input type="text" name="newname" placeholder="Nuevo nombre"><br><br>
                
                Nuevo correo electrónico: 
                <input type="text" name="newmail" placeholder="Nuevo email"><br><br>
                
                Nuevo nombre usuario: 
                <input type="text" name="newuser" placeholder="Nuevo usuario"><br><br>
                
                Nueva contraseña: 
                <input type="text" name="newpass" placeholder="Nueva contraseña"><br><br>

                <input type="submit" name="Cambiar" value="Cambiar" class="center"><br><br>

                <a href="administrador.php"><input type="button" value="Cancelar" class="center"></a>
            </form> 
        </div>  
</div>
</section>
?>
