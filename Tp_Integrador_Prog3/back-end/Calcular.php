<?php
require_once('modeloReservas.php');
    class Calcular{
        private $_contar;
        private $_lista;
        public function __construct(){
            $this->_contar = new modeloReservas();
            $this->_lista = $this->_contar->contar($_REQUEST['Ramal']);
        }

       public function Calcula_disponibilidad_vagon($cant_asientos_x_vagon = 0){
            $asientos_disponibles_x_vagon = $cant_asientos_x_vagon - $this->_lista;
            return $asientos_disponibles_x_vagon;
       }
       public function Precio($_precio = 0,$_distancia = 0){

           $_resultado = ($_precio * $this->$_distancia) * $_POST['CantPasajeros'];
           return $_resultado;
       }
       public function Calcula_disponibilidad_convoy($cant_vagones = 1,$asientos_disponibles_x_vagon = 0){
        $convoy_disponibles = $asientos_disponibles_x_vagon * $cant_vagones;
        return $convoy_disponibles;
       }
       public function __destruct(){
        unset($_precio);
       }
       
        
        
   }
   ?>