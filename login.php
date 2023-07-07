<?php
include("conexion.php");
session_start();
if(isset ($_SESSION['usuario'])){
       header("Location:index2.php");
}
$Usuario = trim($_POST['usuario']);
$Clave = trim($_POST['password']);
$_SESSION['usuario']= $Usuario;

if(isset($_POST['ingresar'])){
  if(
    strlen($_POST['usuario']) >= 1 &&
    strlen($_POST['password']) >= 1
    ){

        //INGRESO DE DATOS CON PROCEDIMIENTO
        $procedimSql = mysqli_query($conn, "SELECT * FROM Usuarios where Usuario='".$Usuario."' and clave= '".$Clave."'");
        if($procedimSql){
          
          echo '<script language="javascript">
          alert(" Bienvenido!! ");
          window.location.href = "index2.php";
          </script>';
         
        }else{
          
            
            echo '<script language="javascript">
          alert("Contraseña o usuario incorrectos");
          
          </script>';
          
        }

      }else{
        ?>
          <br><br>
          <h3 class="error">Debes completar todos los campos</h3>
        <?php
    }
  };?>