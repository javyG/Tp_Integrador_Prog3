<?php

require_once('DistanciaModel.php');


//para procedimiento insertarDistancia
if(isset($_POST['Guardar'])){
  //if ($_SERVER["REQUEST_METHOD"] === "POST") {
   
    $distModel = new DistanciaModel();

   
    $dest_data = array(
        'origen' => $_POST['origen'],
        'destino' => $_POST['destino'],
        'km' => $_POST['km'],
        'ramal' => $_POST['ramal']
    );
 
    $distModel->create($dist_data);
    if (!empty($dist_data)) {
   
    echo 'registro completo';
  
    header("Location: ../destinos.php");
     exit();
    }else{
      echo 'Fallo al registrar';
    }

}





if(isset($_POST['Eliminar'])){
  
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
      
        $distModel = new UsersModel();
        
        $distancia_id = $_POST['id_distancia'];

        $distModel->delete($distancia_id);


      echo 'distancia eliminada';
    
      header("Location: ../destinos.php");
       exit();
  
  }
  
  }
  
?>