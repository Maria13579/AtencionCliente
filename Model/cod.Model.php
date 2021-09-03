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
            return $result;
        }
        public function Insertcodigo($idu,$cod,$le)
        {
            $result=$this->con->query("INSERT INTO `codigo`(`Usuario_id_Usuario`, `Codigo`, `letra`) VALUES ('$idu', '$cod', '$le')");
            return $result;
        }

        public function Insertestado($idv,$idc,$idu,$ide) 
        {
            $result=$this->con->query("INSERT INTO `registroestado`(`Ventanilla_idVentanilla`, `Codigo_id_Codigo`, `Usuario_id_Usuario`, `Estado_idEstado`) VALUES ('$idv','$idc','$idu','$ide')");
            $this->con->close();
            return $result;
        }
        public function Buscarcod($l,$c)
        {
            $result=$this->con->query("SELECT * FROM `codigo` WHERE `Codigo` = '$c' AND `letra` = '$l'");
            return $result;
        }

        
    }


?>