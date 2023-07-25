<?php 
class ToursModel extends ConnSQLModel {
	public function create( $usuario_data = array() ){
		//uso de variables variables
		//https://www.php.net/manual/es/language.variables.variable.php
		   foreach($usuario_data as $key => $value){
			   $$key = $value;
			   $$$key = $value;
			   $$$$key = $value;
			   $$$$$key = $value;
			   $$$$$$key = $value;
			   $$$$$$$key = $value;
		   }
		   
		   $this->query = "CALL insertarUsuario($name,'$mail','$user','$pass','$role')";
		   //"INSERT INTO Usuarios(TipoUsuarioID,Usuario,Clave,nombre,mail)VALUES ($TipoUsuarioID,'$Usuario','$Clave','$nombre','$mail')";
		   //REPLACE INTO Usuarios(TipoUsuarioID,Usuario,Clave,nombre,mail)VALUES ($TipoUsuarioID,'$Usuario','$Clave','$nombre','$mail')";
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
		   foreach($this->rows as $key => $value){
			   array_push($data,$value);
		   }
		   return $data;
	   }
	   public function search($buscador = ''){
			   $this->query = "CALL buscarUsuarios($buscador)";
			   $this->set_query();     
	   }
	   public function update( $usuario_data = array() ){
			   foreach($usuario_data as $key => $value){
				   $$key = $value;
				   $$$key = $value;
				   $$$$key = $value;
				   $$$$$key = $value;
				   $$$$$$key = $value;
				   $$$$$$$key = $value;
			   }
			   $this->query = "CALL EditarUsuario('$user_id','$name','$mail','$user','$pass','$role')";
			   //"INSERT INTO Usuarios(TipoUsuarioID,Usuario,Clave,nombre,mail)VALUES ($TipoUsuarioID,'$Usuario','$Clave','$nombre','$mail')";
			   $this->set_query();         
	   }
	   public function delete($user_id = ''){
		   $this->query = "CALL EliminarUsuario($user_id)";
		   $this->set_query();
	   }
	   public function validate_user($user, $pass) {
		   $this->query = "SELECT * FROM  Usuarios WHERE user_id = $user_id AND pass = MD5('$pass')";
		   $this->get_query();																																																																																																																																																																																																																																																																																																																																																				
   
		   $data = array();
   
		   foreach ($this->rows as $key => $value) {
			   array_push($data, $value);
		   }
   
		   return $data;
	   }

	

	/*public function __destruct() {
		unset($this);
	}*/
}