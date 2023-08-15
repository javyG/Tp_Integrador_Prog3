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
        <a href="index.php">
        <img class="logo"  src="Imagen/logo.png" alt="">
        </a> 
        <nav>
            <a class="registro" href="formReservas.php">Reservar</a>
             <a class="registro" onclick="registrarse();">Registrarse</a>
             <a class="login-usuario" onclick="iniciarsesion();">Iniciar Sesión</a>        
        </nav>
 </header>
 
 <!-- Seccion donde se encuentra el form principal -->
 <section class="principal">
    <div class="divprincipal">
        <div class="div1">
            <h1 class="titulo">Reserva tu pasaje</h1>
        </div>
        <!--Formulario php para consulta de pasajes  -->
        
        <div class="div2">
            <div class="formulario">
                
                <form action="../ViajaYa/Ver_Consultas.php" method="post">
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
            <!-- <div>
                <p>Reserva ahoraa</p>
                <input type="submit" action="Views/formReservas.php" value="Ir a reservas" name="botonReservar" >
            </div> -->
        </div>
    </div>
    
 </section>

<section class="login">
    <div class="popup">
        <div class="close-btn">
           <a onclick="cerrar();">&times;</a> 
        </div>
        <form class="formlogin" action="back-end/registro.php" method="post">
        Usuario:<input type="text" name="user" placeholder="Usuario" required><br>        
        <br>
        Contraseña:<input type="text" name="pass" placeholder="Contraseña"required><br>
        <br>
        Nombre: <input type="text" name="name" placeholder="Ingrese su nombre"required><br>
        <br>
        E-mail: <input type="text" name="mail" placeholder="Ingrese su email"required><br>
        <br>  
        <input type="submit" name="Registrar" value="Registrar" class="center">
        </form>      
    </div>      
</section>
<section class="login-user">
    <div class="popup1">
        <div class="close-btn1">
           <a onclick="cerrar1();">&times;</a> 
        </div>
        <form class="formlogin" action="back-end/login.php" method="post">
        Usuario: <input type="text" name="users" placeholder="Ingrese su usuario"required><br>
        <br>
        Contraseña:<input type="text" name="passw" placeholder="Contraseña"required><br>
        <br>
        <input type="submit" name="Ingresar" value="Ingresar" class="center">
        </form>      
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
    function registrarse(){
        document.querySelector(".popup").classList.add("active");
  
        
    }
    function cerrar(){
        document.querySelector(".popup").classList.remove("active");
        
    }

    function iniciarsesion(){
        document.querySelector(".popup1").classList.add("active1");
        
    }
    function cerrar1(){
        document.querySelector(".popup1").classList.remove("active1");
      
    }
   
   
    
 </script>
 <script src="https://kit.fontawesome.com/7b140c6d77.js" crossorigin="anonymous"></script>
 
</body>
</html>