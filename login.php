<?php
include("conexion.php");

$Usuario = trim($_POST['usuario']);
$Clave = trim($_POST['password']);


if(isset($_POST['ingresar'])){
  if(
    strlen($_POST['usuario']) >= 1 &&
    strlen($_POST['password']) >= 1
    ){

        //INGRESO DE DATOS CON PROCEDIMIENTO
        $procedimSql = mysqli_query($conn, "SELECT * FROM Usuarios where Usuario='".$Usuario."' and clave= '".$Clave."'");

        if($procedimSql){
          session_start();
          
          header("location:index2.php");
          echo '<script language="javascript">
          alert(" Bienvenido!! ");
          window.location.href = "index2.php";
          </script>';
         
        }else{
          ?>
            <br><br>
            <h3 class="error">Ocurrió un error</h3>
          <?php
        }

      }else{
        ?>
          <br><br>
          <h3 class="error">Debes completar todos los campos</h3>
        <?php
    }
  };?>