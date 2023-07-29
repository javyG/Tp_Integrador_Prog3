<?php 
require_once('ConexionSQL.php');


class UsersModel extends ConexionSQL{

  public function create( $user_data = array() ){
    //uso de variables variables
    //https://www.php.net/manual/es/language.variables.variable.php
       foreach($user_data as $key => $value){
         $$key = $value;
         $$$key = $value;
         $$$$key = $value;
         $$$$$key = $value;
         $$$$$$key = $value;
        } 
       $this->query = "CALL insertarUsuario('$name','$mail','$user','$pass','$role')";
       $this->set_query();
     }

     //------------------------------------

   
     
    public function createDistancias($dest_data = array()) {
   
      foreach($dest_data as $key => $value){
        $$key = $value;
        $$$key = $value;
        $$$$key = $value;
        $$$$$key = $value;
       } 

      $this->query = "CALL InsertarDistancia('$origen','$destino','$km','$ramal')";
      
       $this->set_query();
      }


    public function readDistancias() {
        
      $this->query = "SELECT * FROM distancia";
      $this->get_query(); 
      $destinos = array();
      foreach ($this->rows as $value) {
        array_push($destinos, $value);
      }
      return $destinos;
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
      $origenes = array();
      foreach ($this->rows as $value) {
         array_push($origenes, $value);
       }
      return $origenes;
   }

      //eliminar DISTANCIAS 

      public function deleteDistancia($distancia_id = ''){
        $this->query = "CALL EliminarDistancia($distancia_id)";
        $this->set_query();
      }
  
      //Buscar distancias 

      public function buscarDistancia($distancia_id = ''){
        $this->query = "CALL buscarDistancia($distancia_id)";
        $this->set_query();
      }
  

            
     
     //-----------------------------------------

      //funcion para guardar reservas
      
      //uso de variables variables
      //https://www.php.net/manual/es/language.variables.variable.php
      public function reservar( $datosReserva = array() ){
       foreach($datosReserva as $campo => $valor){
         $$key = $valor;
         $$$key = $valor;
         $$$$key = $valor;
         $$$$$key = $valor;
         $$$$$$key = $valor;
         $$$$$$$key = $valor;
         $$$$$$$$key = $valor;
         $$$$$$$$$key = $valor;
         $$$$$$$$$$key = $valor;
         $$$$$$$$$$$key = $valor;
         $$$$$$$$$$$$key = $valor;
         $$$$$$$$$$$$$key = $valor;
         $$$$$$$$$$$$$$key = $valor;
         $$$$$$$$$$$$$$$key = $valor;
         $$$$$$$$$$$$$$$$$key = $valor;
         $$$$$$$$$$$$$$$$$$key = $valor;
         $$$$$$$$$$$$$$$$$$$key = $valor;
         $$$$$$$$$$$$$$$$$$$$key = $valor;
         $$$$$$$$$$$$$$$$$$$$$key = $valor;
         $$$$$$$$$$$$$$$$$$$$$$key = $valor;
         $$$$$$$$$$$$$$$$$$$$$$$key = $valor;
        } 
       $this->query = "CALL insertarReserva('$nombre', '$apellido', '$dni', '$mail', '$telefono', '$direccion', '$numeroDir', '$localidad', '$fechaSalida', '$origen', '$destino', '$tipoDeViaje','$fechaVuelta','$numConvoy','$numCoche','$numAsiento','$precioPersona','$cantPasajeros','$precioTotal','$fechaDeReserva','$numOperacion')";
       $this->set_query();
     }

     public function read($user_id = ''){
      //se utiliza un operador ternario en lugar del condicional if
      $this->query = ($user_id != '')
      ?"SELECT * FROM  Usuarios WHERE user_id = '$user_id' "
      :"SELECT * FROM  Usuarios";
     
      $this->get_query();
      //funcion que permite ver la estructura de la informacion almacenaada
      //var_dump($this->rows);
      $data = array();
      foreach($this->rows as $value){
        array_push($data,$value);
      }
      return $data;
    }

     public function search($search = ''){
         $this->query = "CALL buscarUsuarios($search)";
         $this->set_query();     
     }

     public function update( $user_data = array() ){
         foreach($user_data as $key => $value){
           $$key = $value;
           $$$key = $value;
           $$$$key = $value;
           $$$$$key = $value;
           $$$$$$key = $value;
           $$$$$$$key = $value;
         }
         $this->query = "CALL EditarUsuario('$user_id','$name','$mail','$user','$pass','$role')";
         $this->set_query();         
     }
     public function delete($user_id = ''){
       $this->query = "CALL EliminarUsuario($user_id)";
       $this->set_query();
     }

     public function validate_user($users, $passw) {

      $this->query = "SELECT * FROM Usuarios WHERE user = '$users' AND MD5('$passw')";
	    //"CALL validate_user('$users','$passw')";
      $this->get_query();                                                    
      $data = array();
   
      foreach ($this->rows as $value) {
        array_push($data, $value);
      }
   
      return $data;
    }
  /*public function __destruct() {
    unset($this);
  }*/
}