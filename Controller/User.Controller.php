<?php
    Class User
    {
        public $smarty;
        public $persona;
        public $USUARIO;
        public $direc;
        public $clien;
        public function __construct()
        {
        
            $this->persona = new Usuario();
            $this->smarty = new Smarty();
            $this->direc = new Direcciones();
            $this->clien = new Clientes();
        }
        public function BuscarUsuario()
        {        
            $user=$_POST['user'];
            $pass=$_POST['pass'];
            
            $dato=$this->persona->BuscarUsuario($user,$pass);   
            if($dato->num_rows==1)
            {
                $vec=array();
                while($fila=mysqli_fetch_assoc($dato))
                {
                    array_push($vec,$fila);
                }  
                //var_dump($vec);              
                if($vec[0]['Rol_id_Rol']==1)
                {
                    $_SESSION['nombre'] = $vec[0]['nombre'];
                    $_SESSION['apellido'] = $vec[0]['Apellido'];
                    $_SESSION['rol'] = $vec[0]['Rol_id_Rol'];
                    $_SESSION['idUsua']=$vec[0]['id_Usuario'];
                    if($_SESSION['rol']==1)
                    {
                        $_SESSION['rol']= "Administrador";
                    }
                    else if ($_SESSION['rol']==2)
                    {
                        $_SESSION['rol'] = "Trabajador";
                    }                  
                  $this->smarty->assign('nombre', $_SESSION['nombre']); 
                  $this->smarty->assign('apellido', $_SESSION['apellido']);
                  $this->smarty->assign('ro', $_SESSION['rol']);
                  $this->smarty->assign('title','Administrador');
                  $this->direc->VistaCrearTrabajador();
                    
                }
                else if($vec[0]['Rol_id_Rol']==2)
                {
                    $_SESSION['nombre'] = $vec[0]['nombre'];
                    $_SESSION['apellido'] = $vec[0]['Apellido'];
                    $_SESSION['rol'] = $vec[0]['Rol_id_Rol'];
                    $_SESSION['idUsua']=$vec[0]['id_Usuario'];
                    if($_SESSION['rol']==1)
                    {
                        $_SESSION['rol']= "Administrador";
                    }
                    else if ($_SESSION['rol']==2)
                    {
                        $_SESSION['rol']= "Trabajador";
                    }
                    $this->smarty->assign('nombre', $_SESSION['nombre']); 
                    $this->smarty->assign('apellido', $_SESSION['apellido']);
                    $this->smarty->assign('ro', $_SESSION['rol']); 
                    $this->smarty->assign('title','Trabajador');
                    $this->smarty->display('Trabajador/trabajador.tpl');
             
                }  
           
            }
            else
            {      
                    $this->smarty->assign('msn','Usuario o Contaseña incorrecto'); 
                    $this->smarty->assign('title','Inicio Sesion');       
                    $this->smarty->display('Trabajador/Iniciotrabajador.tpl');                             
            }
        
        }
        public function buscarclientes()
        {
            $name=$_POST['nombre'];
            $lastname=$_POST['apellido'];
            $phone=$_POST['Telefono'];
            $dato=$this->clien->BuscarCliente($name,$lastname,$phone);   
            if($dato->num_rows==1)
            {
                $vec=array();
                while($fila=mysqli_fetch_assoc($dato))
                {
                    array_push($vec,$fila);
                }  
                if($vec[0]['Rol_id_Rol']==3) 
                {
                    $_SESSION['nombre'] = $vec[0]['nombre'];
                    $_SESSION['apellido'] = $vec[0]['Apellido'];
                    $_SESSION['rol'] = $vec[0]['Rol_id_Rol'];
                    $_SESSION['idUsua']=$vec[0]['id_Usuario'];  
                    if($_SESSION['rol']==3)
                    {
                        $_SESSION['rol']= "Cliente";
                    }
                    $this->smarty->assign('nombre', $_SESSION['nombre']); 
                    $this->smarty->assign('apellido', $_SESSION['apellido']);
                    $this->smarty->assign('ro', $_SESSION['rol']); 
                    $this->smarty->assign('title','Cliente');
                    $this->direc->VisElegir();
                }
            }
        }
    }
?>