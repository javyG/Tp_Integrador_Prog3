<?php
//Capa controlador
    require_once('ConexionSQL.php');
    class MostrarQuery extends ConexionSQL{
        public $UsuarioID;
        public $TipoUsuarioID;
        public $Usuario;
        public $Clave;
        public $Nombre;
        public $Mail;

        public function __construct(){
            $this->db ="trenes";
        }
        public function create(){

        }
        public function read($UsuarioID = ''){
        //se utiliza un operador ternario en lugar del condicional if
        $this->query = ($UsuarioID != '')
            ?"SELECT * FROM  Usuarios WHERE UsuarioID = UsuarioID "
            :"SELECT * FROM  Usuarios";
          

            $this->get_query();
            //var_dump($this->rows);
            //$num_rows = count($this->rows);
            $data = array();
            foreach($this->rows as $key => $value){
                array_push($data,$value);
                //$data[$key] = $value;

            }
            return $data;
        }
        public function buscar(){       


        }
        public function uptdate(){

        }
        public function delete(){
            
        }
        
    }