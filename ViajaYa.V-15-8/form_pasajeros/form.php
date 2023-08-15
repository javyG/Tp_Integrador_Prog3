<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>

       <form action="form2.php" method="post"> 
       
            <label for="cantidad">Pasajeros (Max 10):</label>
            <input type="number" id="cantidad" name="cantPasajeros" min="1" max="10">
            <br><br>
            <input type="submit" value="Enviar" name="boton" >

        

</body>
</html>