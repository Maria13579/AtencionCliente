<?php
    Class Conexion extends mysqli
    {
        function __construct ()
        {
            $servidor="localhost";
            $pass="";
            $user="root";
            $DB="proyecto";
              /*$servidor="mysql.webcindario.com";
            $pass="Corona2468@";
            $user="atencionmk";
            $DB="atencionmk";*/
        
            parent::__construct($servidor,$user,$pass,$DB);
            $this->query("SET NAMES 'utf8';");
            $this->connect_errno ? die('Error en la conexion') : $error='Conectado a '.$DB;
           //echo $error;
        }
    }

?>