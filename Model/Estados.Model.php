<?php 
    class Estados
    {
        public $con;
        public function __construct()
        {
            $this->con = new Conexion();
        }
        public function lisredu()
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
        public function atendidos($idr)
        {
            $result=$this->con->query("UPDATE `registroestado` SET `Estado_idEstado`= 2 WHERE `idRegistroestado`= '$idr'");
            return $result;
        }
        public function NomCliente()
        {
            $result=$this->con->query("SELECT * FROM `usuario`");
            return $result;
        }
        public function codle()
        {
            $result=$this->con->query("SELECT * FROM `codigo`");
            return $result;
        }
        public function verestado()
        {
            $result=$this->con->query("SELECT * FROM `estado`");
            return $result;
        }
    
    }
?>