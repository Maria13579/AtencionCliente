<?php
    Class Codigo
    {
        public $codi;
        public $co;
        public $direc;
        PUBLIC $smarty;
        public function __construct()
        {
           
            $this->codi=new cod();
            $this->direc=new Direcciones();
            $this->smarty = new Smarty();
        }


        public function CodigoVentas()
        {
          $co=$this->codi->Vercodigo('C');
          if ($co->num_rows>0)
          {
            $vec = array();
            while($fila=mysqli_fetch_assoc($co))
            {
                array_push($vec,$fila);
            }
            $_SESSION['idcod'] = $vec[0]['id_Codigo'];
            $c=$vec[0]['Codigo']+1;
            $this->codi->Insertcodigo($_SESSION['idUsua'],$c,'C');
            $this->codi->Insertestado(3, $_SESSION['idcod'],$_SESSION['idUsua'],1);
            $this->smarty->assign('co',$c);
            $this->smarty->assign('le','C');
            $this->smarty->assign('nombre', $_SESSION['nombre']); 
            $this->smarty->assign('apellido', $_SESSION['apellido']);
            $this->smarty->assign('ro', $_SESSION['rol']); 
            $this->smarty->assign('title','En espera');
            $this->smarty->display('Clientes/CodigoV.tpl');
          }
          else
          {
            $this->codi->Insertcodigo($_SESSION['idUsua'],1,'C');
            $a=$this->codi->Buscarcod('C',1);
            $vec = array();
            while($fila=mysqli_fetch_assoc($a))
            {
                array_push($vec,$fila);
            }
            $_SESSION['idcod'] = $vec[0]['id_Codigo'];
            $this->codi->Insertestado(3, $_SESSION['idcod'],$_SESSION['idUsua'],1);
            $this->smarty->assign('co',1);
            $this->smarty->assign('le','C');
            $this->smarty->assign('nombre', $_SESSION['nombre']); 
            $this->smarty->assign('apellido', $_SESSION['apellido']);
            $this->smarty->assign('ro', $_SESSION['rol']); 
            $this->smarty->assign('title','En espera');
            $this->smarty->display('Clientes/CodigoV.tpl');
          } 
         
        }
        

        public function Codigoredu()
        {
            $co=$this->codi->Vercodigo('B');
            if ($co->num_rows>0)
            {
              $vec = array();
              while($fila=mysqli_fetch_assoc($co))
              {
                  array_push($vec,$fila);
              }
              $_SESSION['idcod'] = $vec[0]['id_Codigo'];
              $c=$vec[0]['Codigo']+1;
              $this->codi->Insertcodigo($_SESSION['idUsua'],$c,'B');
              $this->codi->Insertestado(2, $_SESSION['idcod'],$_SESSION['idUsua'],1);
              $this->smarty->assign('co',$c);
              $this->smarty->assign('le','B');
              $this->smarty->assign('nombre', $_SESSION['nombre']); 
              $this->smarty->assign('apellido', $_SESSION['apellido']);
              $this->smarty->assign('ro', $_SESSION['rol']); 
              $this->smarty->assign('title','En espera');
              $this->smarty->display('Clientes/CodigoR.tpl');
            }
            else
            {
              $this->codi->Insertcodigo($_SESSION['idUsua'],1,'B');
              $b=$this->codi->Buscarcod('B',1);
              $vec = array();
              while($fila=mysqli_fetch_assoc($b))
              {
                  array_push($vec,$fila);
              }
              $_SESSION['idcod'] = $vec[0]['id_Codigo'];
              $this->codi->Insertestado(2, $_SESSION['idcod'],$_SESSION['idUsua'],1);
              $this->smarty->assign('co',1);
              $this->smarty->assign('le','B');
              $this->smarty->assign('nombre', $_SESSION['nombre']); 
              $this->smarty->assign('apellido', $_SESSION['apellido']);
              $this->smarty->assign('ro', $_SESSION['rol']);
              $this->smarty->assign('title','En espera');
              $this->smarty->display('Clientes/CodigoR.tpl');
            }
        }


        public function Codigoprotec()
        {
            $co=$this->codi->Vercodigo('A');
            if ($co->num_rows>0)
            {
              $vec = array();
              while($fila=mysqli_fetch_assoc($co))
              {
                  array_push($vec,$fila);
              }
              $_SESSION['idcod'] = $vec[0]['id_Codigo'];
              $c=$vec[0]['Codigo']+1;
              $this->codi->Insertcodigo($_SESSION['idUsua'],$c,'A');
              $this->codi->Insertestado(1, $_SESSION['idcod'],$_SESSION['idUsua'],1);
              $this->smarty->assign('co',$c);
              $this->smarty->assign('le','A');
              $this->smarty->assign('nombre', $_SESSION['nombre']); 
              $this->smarty->assign('apellido', $_SESSION['apellido']);
              $this->smarty->assign('ro', $_SESSION['rol']); 
              $this->smarty->assign('title','En espera');
              $this->smarty->display('Clientes/CodigoP.tpl');
            }
            else
            {
              $this->codi->Insertcodigo($_SESSION['idUsua'],1,'A');
              $d=$this->codi->Buscarcod('A',1);
              $vec = array();
              while($fila=mysqli_fetch_assoc($d))
              {
                  array_push($vec,$fila);
              }
              $_SESSION['idcod'] = $vec[0]['id_Codigo'];
              $this->codi->Insertestado(1, $_SESSION['idcod'],$_SESSION['idUsua'],1);
              $this->smarty->assign('co',1);
              $this->smarty->assign('le','A');
              $this->smarty->assign('nombre', $_SESSION['nombre']); 
              $this->smarty->assign('apellido', $_SESSION['apellido']);
              $this->smarty->assign('ro', $_SESSION['rol']); 
              $this->smarty->assign('title','En espera');
              $this->smarty->display('Clientes/CodigoP.tpl');
            }
            
        }
    }
?>