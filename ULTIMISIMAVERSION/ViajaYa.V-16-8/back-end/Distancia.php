<?php
require_once('ConexionSQL.php');
require_once('DistanciaModel.php');


//para procedimiento insertarDistancia
if(isset($_POST['Guardar'])){
  
  if ($_SERVER["REQUEST_METHOD"] === "POST") {
  
    $crearModel = new DistanciaModel();

    $dest_data = array(
        'origen' => $_POST['origen'],
        'destino' => $_POST['destino'],
        'km' => $_POST['km'],
        'ramal' => $_POST['ramal']
    );
 
    $crearModel->create($dest_data);
   
    echo 'registro completo';
  
    header("Location: ../destinos.php");
     exit();

}

}




//para procedimiento editar
if(isset($_POST['Editar'])){
  
  if ($_SERVER["REQUEST_METHOD"] === "POST") {
  
    $distanciaModel = new DistanciaModel();

   
    $dest_data = array(
        'id_dist' => $_POST['id_dist'],
        'origen' => $_POST['origen'],
        'destino' => $_POST['destino'],
        'km' => $_POST['km'],
        'ramal' => $_POST['ramal']
    );
 
    $distanciaModel->update($dest_data);
   
  
    header("Location: ../destinos.php");
     exit();

}

}

if(isset($_POST['Eliminar'])){
  
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
      
        $deleteModel = new DistanciaModel();
        
        $distancia_id = $_POST['id_distancia'];

        $deleteModel->delete($distancia_id);


      echo 'distancia eliminada';
    
      header("Location: ../destinos.php");
       exit();
  
  }
  
  }
  




$distanciasModel = new DistanciaModel();
$distancias = $distanciasModel->read(); 


$origenesModel = new DistanciaModel();
$origenes = $origenesModel->readOrigenes(); 

$destinosModel = new DistanciaModel();
$destinos = $destinosModel->readDestinos(); 


?>