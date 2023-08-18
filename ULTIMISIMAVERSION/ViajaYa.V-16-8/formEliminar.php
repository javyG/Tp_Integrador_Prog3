<?php
require_once('back-end/login.php');

//session_start();

$_SESSION['user'] =  '<p>Sesion Iniciada</p>';
if ($_SESSION) {
    
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
<header>
          
          <img class="logo"  src="../Imagen/logo.png" alt="">
          <nav>
      
            <a class="button" href="administrador.php">Volver</a>
            <a class="cerrar" href="logout.php">Cerrar Sesión</a>
             
          </nav>
  </header>
<section class="principal">
    <div class="divprincipal">
        <div class="div1">
        </div>

        <div class="div2">
            
        <h4>Eliminar usuarios</h4>

                <form class="formlogin" action="back-end/deleteUser.php" method="post">
                
                Id del usuario: <br>
                <input type="text" name="user_ID" placeholder="Id"><br><br>

                <input type="submit" value="Eliminar" class="center"><br><br>

                <a href="administrador.php"><input type="button" value="Cancelar" class="center"></a>
            </form> 
        </div>  
</div>
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