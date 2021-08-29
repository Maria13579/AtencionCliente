<?php
    Class Conexion extends mysqli
    {
        function __construct ()
        {
            $servidor="localhost";
            //"mysql.webcindario.com";
            $pass="";
            //"Corona2468@";
            $user="root";
            //"atencionmk";
            $DB="proyecto"
            //"atencionmk";

            parent::__construct($servidor,$user,$pass,$DB);
            $this->query("SET NAMES 'utf8';");
            $this->connect_errno ? die('Error en la conexion') : $error='Conectado a '.$DB;
           //echo $error;
        }
    }

?>