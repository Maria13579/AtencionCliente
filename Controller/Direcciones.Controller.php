<?php
   
    Class Direcciones
    {
        public $smarty;
        public $admin;
        public $esta;
        public $tablas;
        public function __construct()
        {
            Session_start();
            $this->smarty = new Smarty();
            $this->admin = new Admin();
            $this->esta = new Estados();
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
            $e=$this->esta->lisventa();
            $con=0;
                if ($e->num_rows>0)
                {
                  $vec = array();
                  $nomuser = array();
                  $codigose = array();
                  while($fila=mysqli_fetch_assoc($e))
                  {
                      array_push($vec,$fila);
                    $n=mysqli_fetch_assoc($this->esta->Vernombres($vec[$con]['Usuario_id_Usuario']));
                     array_push($nomuser,$n);
                     $c=mysqli_fetch_assoc($this->esta->VerCodigo($vec[$con]['Codigo_id_Codigo']));
                     array_push($codigose,$c);  
                    $con ++ ;
                  }
                }
                $this->smarty->assign('nombreu',$nomuser);
                $this->smarty->assign('codigou',$codigose);
            $this->smarty->assign('title','Trabajador');
            $this->smarty->display('Trabajador/ventas.tpl');
        }

        public function Visresoluciondudas()
        {
            $this->Dataencabezado();  
             
            $e=$this->esta->lisredu();
            $con=0;
                if ($e->num_rows>0)
                {
                  $vec = array();
                  $nomuser = array();
                  $codigose = array();
                  while($fila=mysqli_fetch_assoc($e))
                  {
                      array_push($vec,$fila);
                    $n=mysqli_fetch_assoc($this->esta->Vernombres($vec[$con]['Usuario_id_Usuario']));
                     array_push($nomuser,$n);
                     $c=mysqli_fetch_assoc($this->esta->VerCodigo($vec[$con]['Codigo_id_Codigo']));
                     array_push($codigose,$c);  
                    $con ++ ;
                  }
                }
                $this->smarty->assign('nombreu',$nomuser);
                $this->smarty->assign('codigou',$codigose);
                $this->smarty->assign('title','Trabajador');
                $this->smarty->display('Trabajador/resoluciondudas.tpl');
        }
        
        public function Visproblematecnico()
        {
            
            $this->Dataencabezado(); 
            
            $e=$this->esta->lisprotec();
            $con=0;
            if ($e->num_rows>0)
            {
              $vec = array();
              $nomuser = array();
              $codigose = array();
              while($fila=mysqli_fetch_assoc($e))
              {
                  array_push($vec,$fila);
                $n=mysqli_fetch_assoc($this->esta->Vernombres($vec[$con]['Usuario_id_Usuario']));
                 array_push($nomuser,$n);
                 $c=mysqli_fetch_assoc($this->esta->VerCodigo($vec[$con]['Codigo_id_Codigo']));
                 array_push($codigose,$c);  
                $con ++ ;
              }
            }
            $this->smarty->assign('nombreu',$nomuser);
            $this->smarty->assign('codigou',$codigose);
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
            $this->smarty->assign('title','Clientes');
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