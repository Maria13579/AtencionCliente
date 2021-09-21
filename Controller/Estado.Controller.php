<?php
    Class Estado
    {
        public $esta;
        public $smarty;
        public $e;
        public function __construct()
        {
            Session_start();
            $this->esta = new Estados();
            $this->smarty = new Smarty();
        }
        public function atendidoprotec()
        {
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
                $idre=$vec[0]['idRegistroestado'];
                $this->esta->atendidos($idre);          
                $this->smarty->assign('nombreu',$nomuser);
                $this->smarty->assign('codigou',$codigose);
                $this->smarty->assign('nombre', $_SESSION['nombre']); 
                $this->smarty->assign('apellido', $_SESSION['apellido']);
                $this->smarty->assign('ro', $_SESSION['rol']); 
                $this->smarty->assign('title','Trabajador');
                $this->smarty->display('Trabajador/Problemastecnicos.tpl');
        }
        public function atendidoredu()
        {
            $con=0;
            $r=$this->esta->lisredu();
            if ($r->num_rows>0)
            {
                
              $vec = array();
              $nomuser = array();
              $codigose = array();
              while($fila=mysqli_fetch_assoc($r))
              {
                array_push($vec,$fila);
                $n=mysqli_fetch_assoc($this->esta->Vernombres($vec[$con]['Usuario_id_Usuario']));
                 array_push($nomuser,$n);
                 $c=mysqli_fetch_assoc($this->esta->VerCodigo($vec[$con]['Codigo_id_Codigo']));
                 array_push($codigose,$c);  
                $con ++ ;
              }
            }
            $idre=$vec[0]['idRegistroestado'];
            $this->esta->atendidos($idre);
            $this->smarty->assign('nombreu',$nomuser);
            $this->smarty->assign('codigou',$codigose);
            $this->smarty->assign('nombre', $_SESSION['nombre']); 
            $this->smarty->assign('apellido', $_SESSION['apellido']);
            $this->smarty->assign('ro', $_SESSION['rol']); 
            $this->smarty->assign('title','Trabajador');
            $this->smarty->display('Trabajador/resoluciondudas.tpl');
        }
        public function atendidoventas()
        {
            $con=0;
            $v=$this->esta->lisventa();
            if ($v->num_rows>0)
            {
              $vec = array();
              $nomuser = array();
              $codigose = array();
              while($fila=mysqli_fetch_assoc($v))
              {
                array_push($vec,$fila);
                $n=mysqli_fetch_assoc($this->esta->Vernombres($vec[$con]['Usuario_id_Usuario']));
                 array_push($nomuser,$n);
                 $c=mysqli_fetch_assoc($this->esta->VerCodigo($vec[$con]['Codigo_id_Codigo']));
                 array_push($codigose,$c);  
                $con ++ ;
              }
            }
            $idre=$vec[0]['idRegistroestado'];
            $this->esta->atendidos($idre);
            $this->smarty->assign('nombreu',$nomuser);
            $this->smarty->assign('codigou',$codigose);
            $this->smarty->assign('nombre', $_SESSION['nombre']); 
            $this->smarty->assign('apellido', $_SESSION['apellido']);
            $this->smarty->assign('ro', $_SESSION['rol']); 
            $this->smarty->assign('title','Trabajador');
            $this->smarty->display('Trabajador/ventas.tpl');
        }
    }
?>