<?php
require_once('UsersModel.php');

if (isset($_POST['Ingresar'])) {

    $usersModel = new UsersModel();

    $userData = $usersModel->validate_user($_REQUEST['users'], $_REQUEST['passw']);
   
    $_SESSION['user'] = $userData;
    
    if (!empty($_REQUEST['users']) && !empty($_REQUEST['passw'])) {

        if (!empty($userData)) {
            if ($userData[0]['role'] == "Administrador") {

                session_start(); 
                $_SESSION['user']= true;
                   
                ?>
                <script>
                window.alert("Bienvenido al dashboard!");
                window.location.href = "../administrador.php";
                </script>
                <?php
                exit();
            } else {

                session_start();
                $_SESSION['user']= true;
                ?>
                <script>
                window.alert("Bienvenido a viaja ya!");
                window.location.href = "../usuario.php";
                </script>
                <?php
                exit();
            }
        } else {
            ?>
            <script>
                window.alert("Usuario o contraseña incorrectos");
                window.location.href = "../index.php";
            </script>
            <?php
        }
    } else {
        ?>
        <script>
            window.alert("Complete todos los campos");
            window.location.href = "../index.php";
        </script>
        <?php
    }
}
?>
