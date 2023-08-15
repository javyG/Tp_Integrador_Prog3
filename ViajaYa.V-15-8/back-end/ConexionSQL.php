<?php
    //Capa modelo
    //Clase abstractacta de conexion a MySql
    abstract class ConexionSQL{
       //Atributos
       private static $server = "db4free.net:3306";
       private static $user = "trenes_viajaya";
       private static $password = "viajaya123";
       protected $db ="trenes";
       private static $db_charset = 'utf8';

       private $conn;//para trabajar la conexión contenida en una variable
       protected $query;//variable para ejecutar las consultas
       protected $rows = array(); //para contener los datos de las consultas en un array
       
       //Metodos Abstractos para CRUD de clases que heredan. NO NECESITAN SER INSTANCIADOS
       abstract protected function create();
       abstract protected function read();
       abstract protected function update();
       abstract protected function delete();
       abstract protected function search();
       abstract function contar();

       //metodoS privadoS de conexion a db;
       //ES PRIVATE PORQ SOLO ESTE ARCHIVO TIENE LA CONEXION
       private function db_open(){
            $this->conn = new mysqli(
                self::$server,
                self::$user,
                self::$password,
                $this->db);
            
            //Establece juego de caracteres utf8.
            //TODAS LAS CONEXIONES ACEPTAN UTF-8
            $this->conn->set_charset(self::$db_charset);
       }
       //metodo privado de desconexion a db.
        private function db_close(){
            $this->conn->close();
       }


       //ejecuta un INSERT, DELETE o UPDATE
       //Determina la afectacion de datos(si el CRUD fue exitoso)
       protected function set_query(){
            $this->db_open();
            //abre, conecta, y el método 'query' ejecuta una consulta IN DE o UP que esté enviando en la variable tambien llamada 'query' 
            $this->conn->query($this->query);

            $this->db_close();
       }
       //Trae LOS RESULTADOS de una consulta(SELECT) en un array;
       protected function get_query(){
            $this->db_open();
            $result = $this->conn->query($this->query);

            //uso la variable ROWS q defini previamente como un array
            //con fetch assoc guarda un registro en cada posición del array
            while( $this->rows[] = $result->fetch_assoc() );

            //limpia los datos ejecutados en 'result'. Libera la memoria de 'result'
            $result->close();

            //cierro la conexión de la clase
            $this->db_close();

            //nos retorna lo q venga en 'rows' menos el último
            return array_pop($this->rows);
            //return $this->rows;
       }

    }
?>
