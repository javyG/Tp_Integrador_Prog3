<?php
 session_start();
 session_destroy();

 echo '<script language="javascript">
    alert("Sesión cerrada. Hasta pronto!!!");
    window.location.href = "index.php";
    </script>';
?>