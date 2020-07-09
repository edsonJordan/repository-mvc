<?php 
    class Ocupacion{
        private $db;
        public function __construct(){
            $this->db = new Base;
        }
        
        public function obtenerServicio(){
            $this->db->query("SELECT * FROM tb_servicio");
            $resultados = $this->db->registros();
            return  $resultados;
        }
    }
