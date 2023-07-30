<?php include 'back-end/Distancia.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- form  procedimiento create destino -->
    <h3>Creacion De Destinos</h3>
    <form action="back-end/Distancia.php" method="POST">
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
        <input type="number" name="km" id="km" >
        <br>
        <label for="ramal">Ramal:</label>
        <input type="text" name="ramal" id="ramal" >
        <br>
        <input type="submit" name="Guardar" value="Guardar">
    </form>
    

    <h3>DESTINOS</h3>

<?php
    if (!empty($distancias)) {
    echo '<table>';
    echo '<tr><th>ID</th><th>Origen ID</th><th>Destino ID</th><th>Origen</th><th>Destino</th><th>KM</th><th>Ramal</th><th>ID</th><th>Eliminar</th></tr>';
    foreach ($distancias as $distancia) {
        echo '<tr>';
        echo '<td>' . $distancia['id_distancia'] . '</td>';
        echo '<td>' . $distancia['origen_id'] . '</td>';
        echo '<td>' . $distancia['destino_id'] . '</td>';
        echo '<td>' . $distancia['origen'] . '</td>';
        echo '<td>' . $distancia['destino'] . '</td>';
        echo '<td>' . $distancia['km'] . '</td>';
        echo '<td>' . $distancia['ramal'] . '</td>';
        echo '<form action="back-end/Distancia.php" method="post">';
        echo '<td><input name="id_distancia" value="' . $distancia['id_distancia'] .'"readonly></td>';
        echo '<td><input type="submit" name="Eliminar" value="Eliminar"></td>';
        echo '<td><input type="submit" name="Editar" value="Editar"></td>';
        echo '</form>';
        echo '</td>';
        echo '</tr>';
    }
    echo '</table>';
} else {
    echo "No hay datos disponibles.";
}
?>


</body>
</html>