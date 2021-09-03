<?php
    class  cod
    {
        public $con;
        public function __construct()
        {
            $this->con = new Conexion();
        }
        public function Vercodigo($l)
        {
            $result=$this->con->query("SELECT * FROM `codigo` WHERE `letra`='$l' ORDER BY `Codigo` DESC ");
            $this->con->close();
            return $result;
        }
        public function Insertcodigo($idu,$cod,$le)
        {
            $result=$this->con->query("INSERT INTO `codigo`(`Usuario_id_Usuario`, `Codigo`, `letra`) VALUES ('$idu', '$cod', '$le')");
            $this->con->close();
            return $result;
        }

        
    }


?>