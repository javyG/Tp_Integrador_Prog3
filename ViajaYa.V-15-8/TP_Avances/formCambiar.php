<?php
require_once('back-end/login.php');

session_start();

if (isset($_SESSION['user']) && $_SESSION['user'] == true) {

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
                <form class="formlogin" action="back-end/cambiar.php" method="post">
                
                <input type="hidden" name="userID" value="<?php echo $registro['user_id']?>"><br>

                <br>  Nuevo nombre: 
                <input type="text" name="newname" placeholder="Nuevo nombre" value="<?php echo $registro['name']; ?>"><br>

                <br>  Nuevo correo: 
                <input type="text" name="newmail" placeholder="Nuevo mail" value="<?php echo $registro['mail']; ?>"><br>

                <br>  Nuevo nombre usuario: 
                <input type="text" name="newuser" placeholder="Nuevo usuario" value="<?php echo $registro['user']; ?>"><br>

                <br>  Nueva contraseña: 
                <input type="text" name="newpass" placeholder="Nueva contraseña" value="<?php echo $registro['pass']; ?>"><br>

                <br>  
                <input type="submit" name="Cambiar" value="Cambiar" class="center"><br>

                <br>
                <a href="administrador.php"><input type="button" value="Cancelar" class="center"></a>
            </form> 
        </div>  
</div>
</section>

 </section>

 <footer>
    <div class="piepag">
      <h3 class="corpo"> Viaja Ya &copy; 2023 - Todos los derechos reservados   </h3>
    </div>
 </footer> 
</body>
</html>

<?php
} else {
    echo 'No ha iniciado sesion';
}
?>