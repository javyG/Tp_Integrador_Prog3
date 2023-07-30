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
          
            //recordar q get query conecta, consulta y trae datos en un array asociativo osea registros en columnas 
            $this->get_query();

            //var_dump($this->rows);
            //$num_rows = count($this->rows);

            //es un array vacio. Lo recorro con foeach
            $data = array();

            // del array rows, en su campo, traer el valor
            foreach($this->rows as $key => $value){
                
                //agregar una posición al final del array
                //guardando en el array data un nuevo 'value'
                array_push($data,$value);
                //$data[$key] = $value; esta forma funciona igual
            }
            //finalmente retornara locontenido en data
            return $data;
        }

        public function buscar(){       
            
        }
        public function uptdate(){

        }
        public function delete(){
            
        }
        
    }