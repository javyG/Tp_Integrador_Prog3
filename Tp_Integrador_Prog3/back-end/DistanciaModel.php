<?php 
require_once('ConexionSQL.php');


class DistanciaModel extends ConexionSQL{

  public function update(){

  }

  public function contar(){

  }

  public function create($dest_data = array()) {

    foreach($dest_data as $key => $value){
      $$key = $value;
      $$$key = $value;
      $$$$key = $value;
      $$$$$key = $value;
     } 

    $this->query = "CALL InsertarDistancia('$origen','$destino','$km','$ramal')";

     $this->set_query();
    }

    
  public function read() {

    $this->query = "SELECT * FROM distancia";
    $this->get_query(); 
    $distancias = array();
    foreach ($this->rows as $value) {
      array_push($distancias, $value);
    }
    return $distancias;
  }

   public function readOrigenes() {

     $this->query = "SELECT * FROM origen";
     $this->get_query(); 
     $origenes = array();
     foreach ($this->rows as $value) {
        array_push($origenes, $value);
      }
     return $origenes;
  }


  public function readDestinos() {

    $this->query = "SELECT * FROM destinos";
    $this->get_query(); 
    $destinos = array();
    foreach ($this->rows as $value) {
       array_push($destinos, $value);
     }
    return $destinos;
 }

    //eliminar DISTANCIAS 

    public function delete($distancia_id = ''){
      $this->query = "CALL EliminarDistancia($distancia_id)";
      $this->set_query();
    }

    //Buscar distancias 

    public function search($distancia_id = ''){
      $this->query = "CALL buscarDistancia($distancia_id)";
      $this->set_query();
    }
    public function imprimirpasajeros()
    {
      
    }

   
}