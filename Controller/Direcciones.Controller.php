<?php
   
    Class Direcciones
    {
        public $smarty;
        public $admin;
        public function __construct()
        {
            Session_start();
            $this->smarty = new Smarty();
            $this->admin = new Admin();
        }
        public function VistaInicio()
        {
            $this->smarty->assign('title','Inicio Sesion Empleados');
            $this->smarty->display('Trabajador/Iniciotrabajador.tpl');
        }
        public function Dataencabezado()
        {
            $this->smarty->assign('nombre', $_SESSION['nombre']); 
            $this->smarty->assign('apellido', $_SESSION['apellido']);
            $this->smarty->assign('ro', $_SESSION['rol']); 
        }
        public function VistaCrearTrabajador()
        {
            $a=$this->admin->VerRol();
            $arr=array();
            while($row=mysqli_fetch_assoc($a))
            {
                array_push($arr,$row);        
            }
            $this->smarty->assign('NombreRol',$arr);
            $this->Dataencabezado(); 
            $this->smarty->assign('title','Crear Trabajador');
            $this->smarty->display('Administrador/Creartrabajador.tpl');

        }
        public function Vistrabajador()
        {
            $this->Dataencabezado(); 
            $this->smarty->assign('title','Trabajador');
            $this->smarty->display('Trabajador/trabajador.tpl');
        }
        public function Visventas()
        {
       
            $this->Dataencabezado(); 
            $this->smarty->assign('title','Trabajador');
            $this->smarty->display('Trabajador/ventas.tpl');
        }
        public function Visresoluciondudas()
        {
          
            $this->Dataencabezado();  
            $this->smarty->assign('title','Trabajador');
            $this->smarty->display('Trabajador/resoluciondudas.tpl');
        }
        public function Visproblematecnico()
        {
            
            $this->Dataencabezado(); 
            $this->smarty->assign('title','Trabajador');
            $this->smarty->display('Trabajador/Problemastecnicos.tpl');
        }
        
         public function Registro()
        { 
            
            $this->smarty->assign('title','Clientes');
            $this->smarty->display('Clientes/Registro.tpl');
        }
         public function visInicio()
        { 
            $this->smarty->assign('title','Trabajador');
            $this->smarty->display('Clientes/Inicio.tpl');
        }
        public function VisElegir()
        {
            $this->Dataencabezado(); 
            $this->smarty->assign('title','Clientes');
            $this->smarty->display('Clientes/Elegir.tpl');
        }
        public function CodigoP()
        { 
            $this->Dataencabezado(); 
            $this->smarty->assign('title','Clientes');
            $this->smarty->display('Clientes/CodigoP.tpl');
            
        }
        public function CodigoR()
        { 
            $this->Dataencabezado(); 
            $this->smarty->assign('title','Clientes');
            $this->smarty->display('Clientes/CodigoR.tpl');
            
        }
        public function CodigoV()
        { 
            $this->Dataencabezado(); 
            $this->smarty->assign('title','Clientes');
            $this->smarty->display('Clientes/CodigoV.tpl');
            
        }
        public function Ven()
        {
            $this->Dataencabezado(); 
            $this->smarty->assign('title','Clientes');
            $this->smarty->display('Clientes/Ven.tpl');
        }
        public function Redu()
        {
            $this->Dataencabezado(); 
            $this->smarty->assign('title','Clientes');
            $this->smarty->display('Clientes/ReDu.tpl');
        }
        public function ProTec()
        {
            $this->Dataencabezado(); 
            $this->smarty->assign('title','Clientes');
            $this->smarty->display('Clientes/ProTec.tpl');
        }
    
    }   
?>