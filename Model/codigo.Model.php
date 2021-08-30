<?php
    class  cod
    {
        public $con;
        public function __construct()
        {
            $this->con = new Conexion();
        }
        public function Vercodigo()
        {
            $result=$this->con->query("SELECT * FROM `codigo`");
            $this->con->close();
            return $result;
        }
        
    }


?>