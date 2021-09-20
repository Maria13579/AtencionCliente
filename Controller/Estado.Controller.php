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
            //select nombre from user where id='$id';
            //$nuser=$this->buscarUs($id);
                if ($e->num_rows>0)
                {
                  $vec = array();
                  $nomuser = array();
                  $codigose = array();
                  while($fila=mysqli_fetch_assoc($e))
                  {
                      array_push($vec,$fila);
                      array_push($nomuser,$this->esta->Vernombres($vec['Usuario_id_Usuario']));
                      array_push($codigose,$this->esta->VerCodigo($vec['Codigo_id_Codigo']));  
                  }
                }
                var_dump($vec);
                $idre=$vec[0]['idRegistroestado'];
                $this->esta->atendidos($idre);          
                $this->smarty->assign('listaesperap',$e);
                $this->smarty->assign('nombre', $_SESSION['nombre']); 
                $this->smarty->assign('apellido', $_SESSION['apellido']);
                $this->smarty->assign('ro', $_SESSION['rol']); 
                $this->smarty->assign('title','Trabajador');
                $this->smarty->display('Trabajador/Problemastecnicos.tpl');
        }
        public function atendidoredu()
        {
            $r=$this->esta->lisredu();
            if ($r->num_rows>0)
            {
              $vec = array();
              while($fila=mysqli_fetch_assoc($r))
              {
                  array_push($vec,$fila);
              }
            }
            $idre=$vec[0]['idRegistroestado'];
            $this->esta->atendidos($idre);
            $this->smarty->assign('listaesperar',$r);
            $this->smarty->assign('nombre', $_SESSION['nombre']); 
            $this->smarty->assign('apellido', $_SESSION['apellido']);
            $this->smarty->assign('ro', $_SESSION['rol']); 
            $this->smarty->assign('title','Trabajador');
            $this->smarty->display('Trabajador/resoluciondudas.tpl');
        }
        public function atendidoventas()
        {
            $v=$this->esta->lisventa();
            if ($v->num_rows>0)
            {
              $vec = array();
              while($fila=mysqli_fetch_assoc($v))
              {
                  array_push($vec,$fila);
              }
            }
            $idre=$vec[0]['idRegistroestado'];
            $this->esta->atendidos($idre);
            $this->smarty->assign('listaesperav',$v);
            $this->smarty->assign('nombre', $_SESSION['nombre']); 
            $this->smarty->assign('apellido', $_SESSION['apellido']);
            $this->smarty->assign('ro', $_SESSION['rol']); 
            $this->smarty->assign('title','Trabajador');
            $this->smarty->display('Trabajador/ventas.tpl');
        }
    }
?>