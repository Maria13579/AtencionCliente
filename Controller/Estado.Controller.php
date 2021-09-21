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
              $nomuser = array();
              $codigose = array();
              while($fila=mysqli_fetch_assoc($r))
              {
                  array_push($vec,$fila);
                  array_push($nomuser,$this->esta->Vernombres($vec['Usuario_id_Usuario']));
                  array_push($codigose,$this->esta->VerCodigo($vec['Codigo_id_Codigo']));  
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
                var_dump($vec[$con]['Codigo_id_Codigo']);
                var_dump($vec[$con]['Usuario_id_Usuario']);
                echo "<br> <br><br>";
                 array_push($nomuser,$this->esta->Vernombres($vec[$con]['Usuario_id_Usuario']));
                 array_push($codigose,$this->esta->VerCodigo($vec[$con]['Codigo_id_Codigo']));  
                $con ++ ;
              }
              echo "<br> <br><br>";
              var_dump($nomuser);
              echo "<br> <br><br>";
              var_dump($codigose);
              echo "<br> <br><br>";
                die();
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