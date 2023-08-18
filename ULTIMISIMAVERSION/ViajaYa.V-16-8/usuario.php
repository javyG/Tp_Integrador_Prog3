<?php
require_once('back-end/UsersModel.php');
require_once('back-end/login.php');


$_SESSION['user'] =  '<p>Sesion Iniciada</p><br><p>Hola </p>';
if ($_SESSION) {

    $datos =   new UsersModel();
    $resultado = $datos->read();
?>   
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Viaja ya</title>
        <link rel="stylesheet" href="style.css">
    
    </head>


    <body>

    <header>
            <a href="usuario.php">
            <img class="logo" src="Imagen/logo.png" alt="">
            </a> 
            <nav class="usuarios">
                <a class="registro" href="formReservas.php">Reservar</a>
                <a id="user" onclick="verperfil();" class="fa-regular fa-user"></a>
                <a class="btn-perfil" onclick="verperfil();" >Perfil</a>  
                <i class="nav-icon fa fa-sign-out" href="logout.php" id="logoutico"></i>
                <a href="back-end/logout.php" class="logout">
                <p>Cerrar Sesión</p>
                </a>      
            </nav>
    </header>
    <section class="perfil1" id="perfil1">
    
    <div class="perfil">
            <div class="close-btn2">
            <a onclick="cerrarperfil();">&times;</a> 
            </div>
            <div class="conex">;
            <?php
            if (!empty($resultado)) {
                foreach($resultado as $resultado){     
                        $resultado['user'];
                        $resultado['name'];
                        $resultado['mail'];
                        $resultado['role'];

                }
                echo "Hola ".$resultado['user']." Bienvenid@  <br>";
                echo "Tu nombre es ".$resultado['name']."<br>";
                echo "Tu email es ". $resultado['mail']."<br>";
                echo "Tu perfil de usuario tiene nivel de ".$resultado['role']."<br>";
          
            } else {
                echo "Usuario no encontrado.";
            }
            ?>
           
            
            </div>
    </div>
    </section>

    <!-- Seccion donde se encuentra el form principal -->
    <section class="principal">
        <div class="divprincipal">
            <div class="div1">
                <h1 class="titulo">Reserva tu pasaje</h1>
            </div>
            <!--Formulario php para consulta de pasajes  -->
            
         
            </div>
        </div>   
    </section>


    
    <section>
        <!-- Seccion de informacion -->
    <div class="seccion3">
        <div>
            <i class="fa-regular fa-circle-question"></i>
            <span>Preguntas Frecuentes</span><br>
            <br>
        </div>
        
    </div>

    

    </section>

    <footer>
        <div class="piepag">
        <h3 class="corpo"> Viaja Ya &copy; 2023 - Todos los derechos reservados   </h3>
        </div>
    </footer>  
    <script>
    function verperfil(){
            document.querySelector(".perfil").classList.add("active");
    
            
        }
        function cerrarperfil(){
            document.querySelector(".perfil").classList.remove("active");
            
        }
    </script>
    <script src="https://kit.fontawesome.com/7b140c6d77.js" crossorigin="anonymous"></script>

</body>
</html>
    
<?php
    exit();
} else {  $_SESSION['user'] = false;
    echo 'No ha iniciado sesion';

}

?>
