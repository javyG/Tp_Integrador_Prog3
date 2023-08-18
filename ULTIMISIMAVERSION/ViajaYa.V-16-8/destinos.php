<?php include 'back-end/Distancia.php';
require_once('back-end/DistanciaModel.php');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       
        h3 {
            margin-bottom: 10px;
        }

        form {
            margin: 20px ;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        select, input[type="number"], input[type="text"] {
            padding: 5px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #00AEEF;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
        }

    </style>
</head>
<body>
<header>
<img class="logo"  src="../Imagen/logo.png" alt="">
        <nav>
            <a class='button' href="formCambiar.php">Cambiar datos</a>
            <a class='button' href="formEliminar.php">Eliminar usuario</a>
            <a class="button" href="destinos.php">CRUD DESTINOS</a>
            <a class="button" href="back-end/editarReservas.php">CRUD RESERVAS</a>
            <a class="cerrar" href="back-end/logout.php">Cerrar Sesión</a>
        </nav>
 </header>
    <h3>Creacion De Destinos</h3>
    <form action="back-end/Distancia.php" method="POST" onsubmit="return validarSeleccion();">
        <br>
        <label for="origen">Origen:</label>
     
        <select name="origen" id="origen">
        <?php
        if (empty($origenes)) {
            echo '<option value="" disabled>No hay datos disponibles</option>';
            }else{
            foreach ($origenes as $origen) {
            echo '<option value="' . $origen['desde'] . '">' . $origen['desde'] . '</option>';
        }
        }
        ?>
        <br>
        </select>
        
        
        <label for="destino">Destino:</label>
        <select name="destino" id="destino">
        <?php
            if (empty($destinos)) {
            echo '<option value="" disabled>No hay datos disponibles</option>';
            } else{
            foreach ($destinos as $destino) {
            echo '<option value="' . $destino['hasta'] . '">' . $destino['hasta'] . '</option>';
            }
            }
        ?>
        </select>
        <br>

        <label for="km">Distancia en km:</label>
        <input type="number" name="km" id="km" required>
        <br>
        <label for="ramal">Ramal:</label>
        <input type="text" name="ramal" id="ramal" required>
        <br>
        <input type="submit" name="Guardar" value="Guardar">
    </form>
    
    <script>
        function validarSeleccion() {
                var origen = document.getElementById("origen").value;
                var destino = document.getElementById("destino").value;

                if (origen === destino) {
                    alert("El origen y destino no pueden ser iguales");
                    return false; 
                }
            }
    </script>

    <h3>DESTINOS</h3>

<?php
if (!empty($distancias)) {
    echo '<table>';
    echo '<tr><th>ID</th><th>ID Origen</th><th>Origen</th><th>ID Destino</th><th>Destino</th><th>KM</th><th>Ramal</th><th> </th></tr>';
    foreach ($distancias as $distancia) {
        echo '<tr>';
        echo '<td>' . $distancia['id_distancia'] . '</td>';
        echo '<td>' . $distancia['origen_id'] . '</td>';
        echo '<td>' . $distancia['origen'] . '</td>';
        echo '<td>' . $distancia['destino_id'] . '</td>';
        echo '<td>' . $distancia['destino'] . '</td>';
        echo '<td>' . $distancia['km'] . '</td>';
        echo '<td>' . $distancia['ramal'] . '</td>';
        echo '<td>';
        echo '<form action="back-end/Distancia.php" method="post">';
        echo '<input type="hidden" name="id_distancia" value="' . $distancia['id_distancia'] . '">';
        echo '<input type="submit" name="Eliminar" value="Eliminar">';
        echo '</form>';
        echo '</td>';
        echo '</tr>';
    }
    echo '</table>';
} else {
    echo "No hay datos disponibles.";
}
?>
  
<h3>Modificar Destinos</h3>
    <form action="back-end/Distancia.php" method="POST" onsubmit="return validar();">
        <br>

        <label for="id_dist">ID de distancia a editar:</label>
        <input type="number" name="id_dist" id="id_dist" required>

         <br>   

        <label for="origen">Modifique Origen:</label>
     
        <select name="origen" id="origen">
        <?php
        if (empty($origenes)) {
            echo '<option value="" disabled>No hay datos disponibles</option>';
            }else{
            foreach ($origenes as $origen) {
            echo '<option value="' . $origen['desde'] . '">' . $origen['desde'] . '</option>';
        }
        }
        ?>
        <br>
        </select>
        <label for="destino">Modifique Destino:</label>
        <select name="destino" id="destino">
        <?php
            if (empty($destinos)) {
            echo '<option value="" disabled>No hay datos disponibles</option>';
            } else{
            foreach ($destinos as $destino) {
            echo '<option value="' . $destino['hasta'] . '">' . $destino['hasta'] . '</option>';
            }
            }
        ?>
        </select>
        <br>
        <label for="km">Modifique km:</label>
        <input type="number" name="km" id="km" required>
        <br>
        <label for="ramal">Modifique  Ramal:</label>
        <input type="text" name="ramal" id="ramal" required>
        <br>
        <input type="submit" name="Editar" value="Guardar">
    </form>
    <script>
        function validarSeleccion() {
                var origen = document.getElementById("origen").value;
                var destino = document.getElementById("destino").value;

                if (origen === destino) {
                    alert("El origen y destino no pueden ser iguales");
                    return false; 
                }
            }
    </script>


</body>
</html>