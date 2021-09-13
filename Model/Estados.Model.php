<?php 
    class Estados
    {
        public $con;
        public function __construct()
        {
            $this->con = new Conexion();
        }
        public function lIsredu()
        {
            $result=$this->con->query("SELECT * FROM `registroestado` WHERE `Estado_idEstado`= 1  AND `Ventanilla_idVentanilla` = 2 ORDER BY `Codigo_id_Codigo` ASC ");
            return $result;
        }
        public function lisprotec()
        {
            $result=$this->con->query("SELECT * FROM `registroestado` WHERE `Estado_idEstado`= 1  AND `Ventanilla_idVentanilla` = 1 ORDER BY `Codigo_id_Codigo` ASC ");
            return $result;
        }
        public function lisventa()
        {
            $result=$this->con->query("SELECT * FROM `registroestado` WHERE `Estado_idEstado`= 1  AND `Ventanilla_idVentanilla` = 3 ORDER BY `Codigo_id_Codigo` ASC ");
            return $result;
        }
        
    
    }
?>