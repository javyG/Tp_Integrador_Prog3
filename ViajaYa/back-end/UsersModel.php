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

      //funcion para guardar reservas
      
      //uso de variables variables
      //https://www.php.net/manual/es/language.variables.variable.php
      public function reservar( $datosReserva = array() ){
       foreach($datos_reserva as $campo => $valor){
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