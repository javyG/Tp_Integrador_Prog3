<?php 
require_once('ConexionSQL.php');
class modeloReservas extends ConexionSQL{
	public function create( $Booking_data = array() ){
		//uso de variables variables
		//https://www.php.net/manual/es/language.variables.variable.php
		foreach($Booking_data as $key => $value){
			$$key = $value;
			$$$key = $value;
			$$$$key = $value;
			$$$$$key = $value;
			$$$$$$key = $value;
			$$$$$$$key = $value;
			$$$$$$$$key = $value;
			$$$$$$$$$key = $value;
			$$$$$$$$$$key = $value;
			$$$$$$$$$$$key = $value;
			$$$$$$$$$$$$key = $value;
			$$$$$$$$$$$$$key = $value;
			$$$$$$$$$$$$$$key = $value;
			$$$$$$$$$$$$$$$key = $value;
			$$$$$$$$$$$$$$$$key = $value;
			$$$$$$$$$$$$$$$$$key = $value;
			$$$$$$$$$$$$$$$$$$key = $value;
			$$$$$$$$$$$$$$$$$$$key = $value;
			$$$$$$$$$$$$$$$$$$$$key = $value;
			$$$$$$$$$$$$$$$$$$$$$key = $value;
			$$$$$$$$$$$$$$$$$$$$$$key = $value;
			$$$$$$$$$$$$$$$$$$$$$$$key = $value;

			}
			$this->query = "CALL insertarReserva(
			'$nombre',
			'$apellido',
			'$dni',
			'$mail',
			'$telefono',
			'$direccion',
			'$numero',
			'$localidad',
			'$fecha',
			'$origen',
			'$destino',
			'$tipoViaje',
			'$fechaVuelta',
			'$numConboy',
			'$numCoche',
			'$numAsiento',
			'$precioPorPersona',
			'$cantPasajeros',
			'$precioTotal',
			'$fechaDeReserva',
			'$numOperacion_Boleto',
			'$ramal')";
			$this->set_query();
		}
	   public function read($id_reservas = ''){
	   //se utiliza un operador ternario en lugar del condicional if
	   $this->query = ($id_reservas != '')
		   ?"SELECT * FROM  reservas WHERE id_reservas = '$id_reservas' "
		   :"SELECT * FROM  reservas";
		 
		   $this->get_query();
		   //funcion que permite ver la estructura de la informacion almacenaada
		   //var_dump($this->rows);
		   $data = array();
		   foreach($this->rows as $key => $value){
			   array_push($data,$value);
		   }
		   return $data;
	   }
	   public function contar($ramal = ''){
		//se utiliza un operador ternario en lugar del condicional if
		$this->query = ($ramal != '')
			?"SELECT COUNT(*) FROM reservas WHERE ramal = '$_REQUEST[ramal]'"
			:"SELECT * FROM  reservas";
		  
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
			   $this->query = "CALL BuscarReserva($search)";
			   $this->set_query();     
	   }
	   public function update( $Booking_data = array() ){
			   //uso de variables variables
		//https://www.php.net/manual/es/language.variables.variable.php
		foreach($Booking_data as $key => $value){
			$$key = $value;
			$$$key = $value;
			$$$$key = $value;
			$$$$$key = $value;
			$$$$$$key = $value;
			$$$$$$$key = $value;
			$$$$$$$$key = $value;
			$$$$$$$$$key = $value;
			$$$$$$$$$$key = $value;
			$$$$$$$$$$$key = $value;
			$$$$$$$$$$$$key = $value;
			$$$$$$$$$$$$$key = $value;
			$$$$$$$$$$$$$$key = $value;
			$$$$$$$$$$$$$$$key = $value;
			$$$$$$$$$$$$$$$$key = $value;
			$$$$$$$$$$$$$$$$$key = $value;
			$$$$$$$$$$$$$$$$$$key = $value;
			$$$$$$$$$$$$$$$$$$$key = $value;
			$$$$$$$$$$$$$$$$$$$$key = $value;
			$$$$$$$$$$$$$$$$$$$$$key = $value;
			$$$$$$$$$$$$$$$$$$$$$$key = $value;
			$$$$$$$$$$$$$$$$$$$$$$$key = $value;
			$$$$$$$$$$$$$$$$$$$$$$$$key = $value;
			
			}
			$this->query = "CALL EditarReserva(
				'$id_res',
				'$nombre',
				'$apellido',
				'$dni',
				'$mail',
				'$telefono',
				'$direccion',
				'$numero',
				'$localidad',
				'$fecha',
				'$origen',
				'$destino',
				'$tipoViaje',
				'$fechaVuelta',
				'$numConboy',
				'$numCoche',
				'$numAsiento',
				'$precioPorPersona',
				'$cantPasajeros',
				'$precioTotal',
				'$fechaDeReserva',
				'$numOperacion_Boleto',
				'$ramal')";
			$this->set_query();
		}
	   public function delete($id_res = ''){
		   $this->query = "CALL EliminarReserva($id_res)";
		   $this->set_query();
	   }

	/*public function __destruct() {
		unset($Booking_data);
	}*/
}