<?php

    class Clientes
    { public $con;
        public function __construct()
        {
            $this->con=new Conexion();
            

        }
        public function Registrarse($nombre,$ape,$tel,$correo,$usuario,$pass)
        {
            $query="UPDATE `usuario`SET `nombre`='$nombre',`Apellido`='$ape',`Telefono`='$tel',`Correo`='$correo',`Usuario`='$usuario',`Pass`='$pass' ";
            $consulta=$this->con->query($query);
            $this->con->close();
            return $consulta;
        }


    }
       
  
?>     
