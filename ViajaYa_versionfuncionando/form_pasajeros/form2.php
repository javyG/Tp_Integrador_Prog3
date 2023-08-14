<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
            // $cantPasajeros= $_POST['cantPasajeros'];
            //Esta es la variable que me trae la cantidad de pasajeros


            
if (isset($_POST["cantPasajeros"])) {
    $cantPasajeros = $_POST["cantPasajeros"];
} else {
    $cantPasajeros = 1; // Valor predeterminado si la clave no está definida
}



?>           

       <form action="form3.php" method="post">
           <?php for ($i=1; $i <= $cantPasajeros; $i++){
            
            ?> 
            
            <section class="form">

                 
            
                
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="pasajero[<?= $i ?>][nombre]" required>

                <br>
                <br>
           

                <label for="apellido">Apellido:</label>
                <input type="text" id="apellido" name="pasajero[<?= $i ?>][apellido]" required>

                <br>
                <br>
                
        
                <label for="dni">DNI:</label>
                <input type="number" id="dni" name="pasajero[<?= $i ?>][dni]"  required>

                <br>
                <br>
        
                
                <label for="numpasejero">N° pasajero:</label>
                <input type="number" id="numpasajero" name="pasajero[<?= $i ?>][num_boleto]" min="1"  required>
           

            </section>

               

            
            <?php } ?>
          
          <div class="container">
               <button class="centered-button" type="submit">Enviar</button>
         
            </div>
 
        </form> 


</body>
</html>



