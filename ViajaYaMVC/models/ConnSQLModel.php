<?php
    //Capa modelo
    //Clase abstractacta de conexion a MySql
    abstract class ConnSQLModel{
       //Atributos
       private static $server = "db4free.net:3306";
       private static $user = "trenes_viajaya";
       private static $password = "viajaya123";
       protected $db ="trenes";
       private static $db_charset = 'utf8';
       private $conn;
       protected $query;
       protected $rows = array();
       //Metodos Abstractos para CRUD de clases que heredan.
       abstract protected function create();
       abstract protected function read();
       abstract protected function update();
       abstract protected function delete();
       abstract protected function search();


       
       //metodo privado de conexion a db;
       private function db_open(){
            $this->conn = new mysqli(
                self::$server,
                self::$user,
                self::$password,
                $this->db);
            //Establece juego de caracteres utf8.
            $this->conn->set_charset(self::$db_charset);
       }
       //metodo privado de desconexion a db.
        private function db_close(){
            $this->conn->close();
       }
       //Destermina la afectacion de datos(si el CRUD fue exitoso)
       protected function set_query(){
            $this->db_open();
            $this->conn->query($this->query);
            $this->db_close();
       }
       //OBtiene datos de una consulta(SELECT);
       protected function get_query(){
            $this->db_open();
            $result = $this->conn->query($this->query);
            while( $this->rows[] = $result->fetch_assoc() );
            $result->close();
            $this->db_close();
            return array_pop($this->rows);
            //return $this->rows;
       }

    }
?>
