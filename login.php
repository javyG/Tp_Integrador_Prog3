<?php
include("conexion.php");

if(isset($_POST['ingresar'])){
  if(
    strlen($_POST['usuario']) >= 1 &&
    strlen($_POST['password']) >= 1
    ){
        $Usuario = trim($_POST['usuario']);
        $Clave = trim($_POST['password']);

        //INGRESO DE DATOS CON PROCEDIMIENTO
        $procedimSql = mysqli_query($conn, "SELECT * FROM Usuarios where Usuario='".$Usuario."' and clave= '".$Clave."'");

        if($procedimSql){
          ?>
            <br><br>
            <h3 class="success">Ingreso exitoso</h3>
          <?php
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