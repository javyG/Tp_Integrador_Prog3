<?php
require_once('back-end/UsersModel.php');
require_once('back-end/login.php');

//session_start();

$_SESSION['user'] =  '<p>Sesion Iniciada</p>';
if ($_SESSION) {

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
            <a class='button' href="formEliminar.php">Eliminar usuario</a>
            <a class="button" href="destinos.php">Creacion de destinos</a>
            <a class="cerrar" href="back-end/logout.php">Cerrar Sesión</a>
        </nav>
 </header>
 
 <section class="principal">
    <div class="divprincipal">
        <div class="div1">
        </div>
        <div class="div2">
        
            <h1> Bienvenido/a</h1><br>
            <?php
                if (!empty($registro)) {
                    foreach($registro as $registro){     
                            $registro['user'];
                            $registro['name'];
                            $registro['mail'];
                            $registro['role'];
                    }
                }
            
            ?>

            <input type="text" placeholder="mostrar datos de usuarios" value="<?php echo "usuario: ".$registro['user'];?>" readonly>
            <br> 
            <h3>Ingreso como administrador</h3><br>
            <br>
            <p>Puede actualizar sus datos o los datos de los usuarios. (Para esto es necesario que recuerde su ID o conozca el ID del usuario).</P>
            <br>
            <p>Puede eliminar usuarios. (Siempre ingresando el ID)</p>
            <br>
            <p>Tambien puede ingresar nuevos destinos.</p>
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
    
    echo "<script languaje='JavaScript'>
    alert('No ha iniciado sesion');
    </script>
    ";

}

?>