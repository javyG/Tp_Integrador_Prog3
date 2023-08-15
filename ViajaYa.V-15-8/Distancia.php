<?php
require_once('ConexionSQL.php');
require_once('UsersModel.php');


//para procedimiento insertarDistancia
if(isset($_POST['Guardar'])){
  
  if ($_SERVER["REQUEST_METHOD"] === "POST") {
  
    $usersModel = new UsersModel();

   
    $dest_data = array(
        'origen' => $_POST['origen'],
        'destino' => $_POST['destino'],
        'km' => $_POST['km'],
        'ramal' => $_POST['ramal']
    );
 
    $usersModel->createDistancias($dest_data);
   
    echo 'registro completo';
  
    header("Location: destinos.php");
     exit();

}

}



if(isset($_POST['Eliminar'])){
  
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
      
        $usersModel = new UsersModel();
        
        $distancia_id = $_POST['id_distancia'];

        $usersModel->deleteDistancia($distancia_id);


      echo 'distancia eliminada';
    
      header("Location: destinos.php");
       exit();
  
  }
  
  }
  




 



$distanciasModel = new UsersModel();
$distancias = $distanciasModel->readDistancias(); 


$origenesModel = new UsersModel();
$origenes = $origenesModel->readOrigenes(); 

$destinosModel = new UsersModel();
$destinos = $destinosModel->readDestinos(); 


?>