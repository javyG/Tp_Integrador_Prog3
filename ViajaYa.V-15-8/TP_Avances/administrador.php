<?php
require_once('back-end/UsersModel.php');
require_once('back-end/login.php');

session_start();

if (isset($_SESSION['user']) && $_SESSION['user'] == true) {

    $datos = new UsersModel();
    $registro = $datos->read();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viaja ya - Perfil de administrador</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>

 <header>
        <a href="administrador.php">
        <img class="logo"  src="Imagen/logo.png" alt="">
        </a> 
        <nav>
            <a class='button' href="formCambiar.php">Cambiar datos</a>
            <a class="button" href="destinos.php">Creacion de destinos</a>
            <a class="cerrar" href="back-end/logout.php">Cerrar Sesión</a>
        </nav>
 </header>
 
 <section class="principal">
    <div class="divprincipal">
        <div class="div1">
        </div>
        <div class="div2">
        <?php
        if (!empty($registro)) {

            foreach ($registro as $registro) {
                $registro['user_id'];
                $registro['user'];
                $registro['name'];
                $registro['mail'];
                $registro['role'];
            }

            echo "Nombre: " . $registro['name'] . "<br>";
            echo "Email: " . $registro['mail'] . '<br>';
            echo "Usuario: " . $registro['user'] . '<br>';

        } else {
            echo "Usuario no encontrado.";
        }
         ?>
         </div>
    </div>
 </section>
 
 <section>
   <div class="seccion3">
    <div>
        <i class="fa-regular fa-circle-question"></i>
        <span>Preguntas Frecuentes</span><br>
        <br>
    </div>
    <div>
        <i class="fa-regular fa-credit-card"></i>
        <span>Medios de pago</span><br>
        <br>
    </div>
    <div>
        <i class="fa-solid fa-percent"></i>
        <span>Descuentos vigentes</span><br>
        <br>
    </div>
  </div>
 </section>

 <footer>
    <div class="piepag">
      <h3 class="corpo"> Viaja Ya &copy; 2023 - Todos los derechos reservados   </h3>
    </div>
 </footer>

 <script src="https://kit.fontawesome.com/7b140c6d77.js" crossorigin="anonymous"></script>
 
</body>
</html>

<?php

} else {
    echo 'No ha iniciado sesion';
}

?>