<?php 
require_once('ConexionSQL.php');


class DistanciaModel extends ConexionSQL{

  public function create( $dist_data = array() ){
    //uso de variables variables
    //https://www.php.net/manual/es/language.variables.variable.php
       foreach($dist_data as $key => $value){
         $$key = $value;
         $$$key = $value;
         $$$$key = $value;
         $$$$$key = $value;
         
        } 
       $this->query = "CALL insertarDistancia('$origen','$destino','$km','$ramal')";
       $this->set_query();
     }
     public function read($id_distancia = ''){
      //se utiliza un operador ternario en lugar del condicional if
      $this->query = ($id_distancia != '')
      ?"SELECT * FROM  distancia WHERE name = '$id_distancia' "
      :"SELECT * FROM  distancia";
     
      $this->get_query();
      //funcion que permite ver la estructura de la informacion almacenaada
      //var_dump($this->rows);
      $data = array();
      foreach($this->rows as $value){
        array_push($data,$value);
      }
      return $data;
    }

     public function search($buscador = ''){
         $this->query = "CALL buscarDistancia('$buscador')";
         $this->set_query();     
     }

     public function update( $dist_data = array() ){
         foreach($dist_data as $key => $value){
           $$key = $value;
           $$$key = $value;
           $$$$key = $value;
           $$$$$key = $value;
           $$$$$$key = $value;
         }
         $this->query = "CALL EditarDistancia('$id_dist','$origen','$destino','$km','$ramal')";
         $this->set_query();         
     }
     public function delete($id_dist = ''){
       $this->query = "CALL EliminarDistancia($id_dist)";
       $this->set_query();
     }
     public function contar(){}
    public function __destruct() {
    unset($dist_data);
    }
}