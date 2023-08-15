<?php


 


//  mysqli_query($conn, "insert into pasajeros(nombre,apellido,dni,num_boleto) values ('$_REQUEST[nombrePasajero]','$_REQUEST[apellidoPasajero]', $_REQUEST[dniPasajero] , $_REQUEST[numBoleto])")
//  or die ("problemas con el select".mysqli_error($conn));

//  mysqli_close($conn);

//  echo "se realizo el registro";

//   $servername = "db4free.net:3306";
//   $database = "trenes_viajaya";
//   $username = "trenes";
//   $password = "viajaya123";

//  $conn = mysqli_connect($servername, $database, $password,$database);

//  if(!$conn)
//  {
//      die("connection failed: ". mysqli_connect_error());
//  }

// echo "conexión establecida";

$conn = mysqli_connect("db4free.net:3306","trenes_viajaya", "viajaya123", "trenes" ) or die ("Problemas");








    // $conteo = $_REQUEST['cantPasajeros'];

    // for ($i = 1; $i <= $conteo; $i++ )
    // {
    //     mysqli_query($conn,$sql);
      

    // }

//     // $_REQUEST['cantPasajeros'];
//     $cantPasajeros= $_POST['cantPasajeros'];

//     for ($i=1; $i <= $cantPasajeros; $i++)
//     {

//        if(mysqli_query($conn,$sql)){
         
//         echo "consulta realizada";
//        }

//        else{
//         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//        }

//     }

// mysqli_close($conn);

                                                                                                                                                     
{



    $sql = "INSERT INTO pasajeros(nombre,apellido,dni,num_boleto) VALUES ('".$values['nombre']."','".$values['apellido']."', '".$values['dni']."','".$values['num_boleto']."')";
    if(mysqli_query($conn,$sql))
    {
         
                echo "consulta realizada";
    }
        
    else
    {
                 echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
                                                  
}

mysqli_close($conn);


?>

