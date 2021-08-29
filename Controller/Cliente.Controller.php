<?php
    Class Cliente
    {
     
        public $smarty;
        public $direc;
        public $clien;
        public function __construct()
        {
            $this->clien = new Clientes();
            $this->smarty = new Smarty();
            $this->direc = new Direcciones();
        }
        public function regisCliente()
        {
            $nombre=$_POST['nombre'];
            $apel=$_POST['apellido'];
            $tel=$_POST['Telefono'];
            $correo=$_POST['Correo'];
            $this->clien->Registrarse(3,$nombre,$apel,$tel,$correo);
            $this->smarty->assign('nombre', $_SESSION['nombre']); 
            $this->smarty->assign('apellido', $_SESSION['apellido']);
        
            $this->direc->VisInicio();
        }
    }
    
?>