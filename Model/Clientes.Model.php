<?php

    class Clientes
    {
         public $con;
        public function __construct()
        {
            $this->con=new Conexion();
        }
        public function Registrarse($r,$nombre,$apel,$tel,$correo)
        {
            $query="INSERT INTO `usuario`(`Rol_id_Rol`,`nombre`,`Apellido`,`Telefono`,`Correo`) VALUES ('$r','$nombre','$apel','$tel','$correo')";
            $consulta=$this->con->query($query);
            $this->con->close();
            return $consulta;
        }
        public function BuscarCliente($n,$a,$t)
        {
            $consulta=$this->con->query("SELECT * FROM `usuario` WHERE `nombre` = '$n' AND `Apellido` = '$a' AND `Telefono` = '$t'");
            $this->con->close();
            return $consulta;
        }  



    }
       
  
?>     
