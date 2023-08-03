<?php 
require_once('ConexionSQL.php');
class modeloReservas extends ConexionSQL{
	public function create( $Booking_data = array() ){
		//uso de variables variables
		//https://www.php.net/manual/es/language.variables.variable.php
		foreach($Booking_data as $key => $value){
			$$key = $value;$$$key = $value;$$$$key = $value;$$$$$key = $value;$$$$$$key = $value;
			$$$$$$$key = $value;$$$$$$$$key = $value;$$$$$$$$$key = $value;$$$$$$$$$$key = $value;
			$$$$$$$$$$$key = $value;$$$$$$$$$$$$key = $value;$$$$$$$$$$$$$key = $value;
			$$$$$$$$$$$$$$key = $value;$$$$$$$$$$$$$$$key = $value;$$$$$$$$$$$$$$$$key = $value;
			$$$$$$$$$$$$$$$$$key = $value;$$$$$$$$$$$$$$$$$$key = $value;$$$$$$$$$$$$$$$$$$$key = $value;
			$$$$$$$$$$$$$$$$$$$$key = $value;$$$$$$$$$$$$$$$$$$$$$key = $value;$$$$$$$$$$$$$$$$$$$$$$key = $value;
			$$$$$$$$$$$$$$$$$$$$$$$key = $value;
			}
			$this->query = "CALL insertarReservas(`$nombre`,`$apellido`,`$dni`,
			`$mail`,`$telefono`,`$direccion`,`$numero`,`$localidad`,`$fecha`,`$origen`,
			`$destino`,`$tipoViaje`,'$fechaVuelta',`$numConboy`,`$numCoche`,`$numAsiento`,`$precioPorPersona`,
			`$cantPasajeros`,`$precioTotal`,`$fechaDeReserva`,`$numOperacion_Boleto`)";
			$this->set_query();
		}
	   public function read($id_reservas = ''){
	   //se utiliza un operador ternario en lugar del condicional if
	   $this->query = ($id_reservas != '')
		   ?"SELECT * FROM  Usuarios WHERE user_id = '($id_reservas' "
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
	   public function search($search = ''){
			   $this->query = "CALL BuscarReservas($search)";
			   $this->set_query();     
	   }
	   public function update( $Booking_data = array() ){
			   //uso de variables variables
		//https://www.php.net/manual/es/language.variables.variable.php
		foreach($Booking_data as $key => $value){
			$$key = $value;$$$key = $value;$$$$key = $value;$$$$$key = $value;$$$$$$key = $value;
			$$$$$$$key = $value;$$$$$$$$key = $value;$$$$$$$$$key = $value;$$$$$$$$$$key = $value;
			$$$$$$$$$$$key = $value;$$$$$$$$$$$$key = $value;$$$$$$$$$$$$$key = $value;
			$$$$$$$$$$$$$$key = $value;$$$$$$$$$$$$$$$key = $value;$$$$$$$$$$$$$$$$key = $value;
			$$$$$$$$$$$$$$$$$key = $value;$$$$$$$$$$$$$$$$$$key = $value;$$$$$$$$$$$$$$$$$$$key = $value;
			$$$$$$$$$$$$$$$$$$$$key = $value;$$$$$$$$$$$$$$$$$$$$$key = $value;$$$$$$$$$$$$$$$$$$$$$$key = $value;
			$$$$$$$$$$$$$$$$$$$$$$$key = $value;$$$$$$$$$$$$$$$$$$$$$$$$key = $value;
			}
			$this->query = "CALL EditarReservas('$id_reservas',`$nombre`,`$apellido`,`$dni`,
				`$mail`,`$telefono`,`$direccion`,`$numero`,`$localidad`,`$fecha`,`$origen`,
				`$destino`,`$tipoViaje`,'$fechaVuelta',`$numConboy`,`$numCoche`,`$numAsiento`,`$precioPorPersona`,
				`$cantPasajeros`,`$precioTotal`,`$fechaDeReserva`,`$numOperacion_Boleto`)";
			$this->set_query();
		}
	   public function delete($id_reservas = ''){
		   $this->query = "CALL EliminarReserva(($id_reservas)";
		   $this->set_query();
	   }

	/*public function __destruct() {
		unset($this);
	}*/
}