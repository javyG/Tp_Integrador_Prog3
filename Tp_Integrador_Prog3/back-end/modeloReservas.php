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

	  
		public function imprimir() {
			$this->query = "SELECT
			    r.id_reservas AS reservas_nro,
				r.nombre AS nombre_reserva,
				r.mail AS mail_reserva,
				r.fecha AS fecha_reserva,
				r.fechaVuelta AS fecha_vuelta,
				r.fechaDeReserva AS fecha_de_reserva,
				r.cantPasajeros AS cantidad_pasajeros,
				r.origen AS origen_reserva,
				r.destino AS destino_reserva,
				p.nombre AS nombre_pasajero,
				p.apellido AS apellido_pasajero,
				p.dni AS dni_pasajero
			FROM
				reservas r
			LEFT JOIN
				pasajeros p ON r.id_reservas = p.pasaj_id
			ORDER BY
				r.id_reservas DESC
			LIMIT 1;";
		
			$this->get_query();
		
			$ultimaReserva = array(
				'reservas_nro' => $this->rows[0]['reservas_nro'],
				'nombre_reserva' => $this->rows[0]['nombre_reserva'],
				'mail_reserva' => $this->rows[0]['mail_reserva'],
				'fecha_reserva' => $this->rows[0]['fecha_reserva'],
				'fecha_vuelta' => $this->rows[0]['fecha_vuelta'],
				'fecha_de_reserva' => $this->rows[0]['fecha_de_reserva'],
				'cantidad_pasajeros' => $this->rows[0]['cantidad_pasajeros'],
				'origen_reserva' => $this->rows[0]['origen_reserva'],
				'destino_reserva' => $this->rows[0]['destino_reserva']
			);
		
			$pasajerosReserva = array();
			foreach ($this->rows as $row) {
				$pasajero = array(
					'nombre_pasajero' => $row['nombre_pasajero'],
					'apellido_pasajero' => $row['apellido_pasajero'],
					'dni_pasajero' => $row['dni_pasajero']
				);
				$pasajerosReserva[] = $pasajero;
			}
		
			$data = array(
				'reserva' => $ultimaReserva,
				'pasajeros' => $pasajerosReserva
			);
		
			return $data;
		}
		
	 public function imprimirpasajeros(){
		$this->query = "SELECT
			p.nombre AS nombre,
			p.apellido AS apellido,
			p.dni AS dni
		FROM
			pasajeros p
		WHERE
			p.pasaj_id = 42";
	   $this->get_query();
	   $data = array();
	   foreach($this->rows as $value){
        array_push($data,$value);
        }
         return $data;
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
	
		    
		
   


	}
