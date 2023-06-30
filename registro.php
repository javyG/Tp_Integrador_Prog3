<?php
include("conexion.php");

if(isset($_POST['Registrar'])){
  if(
    strlen($_POST['TipoUsuarioID']) >= 1 &&
    strlen($_POST['usuario']) >= 1 &&
    strlen($_POST['password']) >= 1 &&
    strlen($_POST['name']) >= 1 &&
    strlen($_POST['email']) >= 1 
    ){
        $TipoUsuarioId = trim($_POST['TipoUsuarioID']);
        $Usuario = trim($_POST['usuario']);
        $Clave = trim($_POST['password']);
        $Nombre = trim($_POST['name']);
        $mail = trim($_POST['email']);
        //INGRESO DE DATOS CON PROCEDIMIENTO
        $procedimSql = mysqli_query($conn, "CALL insertarUsuario('$TipoUsuarioId', '$Usuario', '$Clave', '$Nombre', '$mail')");

        if($procedimSql){
          ?>
            <br><br>
            <h3 class="success">Se completó el registro</h3>
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
