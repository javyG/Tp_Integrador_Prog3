<?php
require_once('back-end/UsersModel.php');
require_once('back-end/login.php');


$_SESSION['user'] =  '<p>Sesion Iniciada</p><br><p>Hola </p>';
if ($_SESSION) {

    $datos =   new UsersModel();
    ?>
    <script>
    window.alert("Bienvenido");
    </script>
    <?php
   // echo $_SESSION['user'];
    
    $resultado = $datos->read($_REQUEST['users']);
    exit();
} else {
    $_SESSION['user'] = false;
    echo 'No ha iniciado sesion';

}
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

                echo " Hola".$resultado['user']." bienvenido <br>";
                echo "<p>Tu nombre es <b>".$resultado['name']."</b></p>";
                echo "<p>Tu email es <b>". $resultado['mail']."</b></p>";
                echo "<p>Tu perfil de usuario tiene nivel de <b>".$resultado['role']."</b></p>";
          
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
            
            <div class="div2">
                <div class="formulario">
                    
                    <form action="/form.php" method="post">
                        Busca tu pasaje <br>
                        <div class="radios">
                        <input type="radio" id="ida" name="viajeida" value="IDA">
                         <label for="ida">Ida</label><br>
                        <input type="radio" id="idayvuelta" name="viajeidayvuelta" value="IDA">
                         <label for="idayvuelta">Ida y Vuelta</label><br>
                        </div>
                    
                        Origen:  <input list="origen">
                        <datalist id="origen">
                        <option value="Córdoba">
                        <option value="Tucumán">
                        <option value="Pehuajó">
                        <option value="Tandil">
                        <option value="Buenos Aires">
                        </datalist><br>
                        <!-- <input type="text" name="origen"><br> -->
                        <br>

                        Destino:
                        <!-- Destino: <input type="text" name="destino"><br> -->
                        <input list="destinos">
                        <datalist id="destinos">
                        <option value="Córdoba">
                        <option value="Tucumán">
                        <option value="Pehuajó">
                        <option value="Tandil">
                        <option value="Mar del Plata">
                        </datalist><br>
                        <br>
                        <label for="fechaida">Fecha de Ida:</label>
                        <input type="date" id="fechaida" name="fechaida"><br>
                        <br>
                        <label for="fechavuelta">Fecha de Vuelta:</label>
                        <input type="date" id="fechavuelta" name="fechavuelta"><br>
                        <br>
                        <label for="cantidad">Pasajeros (Max 10):</label>
                        <input type="number" id="cantidad" name="cantidad" min="1" max="10"><br>
                        <br>
                        <input type="submit" value="Enviar" name="btn_consulta" >
                        
                    
                    </form>
                </div>
            </div>
        </div>   
    </section>


    <section>
        <!-- Seccion de imagenes de promocion -->
        <div class="imagenes">
        <div class="listaimg">
            <div class="carousel-1" id="carousel-1">
                <img src="Imagen/Buenos Aires.png" alt="">
            </div>
            <div class="carousel-2" id="carousel-2">       
                <img src="Imagen/Córdoba.png" alt="">
            </div>
            <div class="carousel-3" id="carousel-3">
                <img src="Imagen/Mar del plata.png" alt="">
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
    </html>;
    
  

