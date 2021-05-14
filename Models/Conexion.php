<?php

    class Conexion {

        private $conn;

        public function __construct()
        {
            $this-> conn = new mysqli('localhost', 'roo', '', 'productos');
        }

        public function getProductos(){
            $query = $this-> conn->query('SELECT * FROM producto');

            $retorno = [];
            
            $i = 0;
            while($fila = $query->fetch_assoc()){
                $retorno[$i] = $fila;
                $i++;
            }

            return $retorno;
        }
    }
?>