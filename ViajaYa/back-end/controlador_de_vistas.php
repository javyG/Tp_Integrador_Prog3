<?php
  class controlador_de_vistas{
    private static $directorio = './';
      public function cargar_vista($ver)
      {
        require_once (self::$directorio . $ver .'.php');
      } 
  }
?>