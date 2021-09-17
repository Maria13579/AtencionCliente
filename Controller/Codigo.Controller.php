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
            $c=$vec[0]['Codigo']+1;
            $this->codi->Insertcodigo($_SESSION['idUsua'],$c,'C');
            $b=$this->codi->Buscarcod('C',$c);
            $arr = array();
            while($fila=mysqli_fetch_assoc($b))
            {
                array_push($arr,$fila);
            }
            $x = $arr[0]['id_Codigo'];
            $this->codi->Insertestado(3,$x,$_SESSION['idUsua'],1);
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
            $y = $vec[0]['id_Codigo'];
            $this->codi->Insertestado(3, $y,$_SESSION['idUsua'],1);
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
              $c=$vec[0]['Codigo']+1;
              $this->codi->Insertcodigo($_SESSION['idUsua'],$c,'B');
              $F=$this->codi->Buscarcod('B',$c);
              $arr = array();
              while($fila=mysqli_fetch_assoc($F))
              {
                  array_push($arr,$fila);
              }
              $z = $arr[0]['id_Codigo'];
              $this->codi->Insertestado(2,$z,$_SESSION['idUsua'],1);
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
              $d = $vec[0]['id_Codigo'];
              $this->codi->Insertestado(2, $d,$_SESSION['idUsua'],1);
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
              $c=$vec[0]['Codigo']+1;
              $this->codi->Insertcodigo($_SESSION['idUsua'],$c,'A');
              $f=$this->codi->Buscarcod('A',$c);
              $vec = array();
              while($fila=mysqli_fetch_assoc($f))
              {
                  array_push($vec,$fila);
              }
              $a = $vec[0]['id_Codigo'];
              $this->codi->Insertestado(1, $a,$_SESSION['idUsua'],1);
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
              $arr = array();
              while($fila=mysqli_fetch_assoc($d))
              {
                  array_push($arr,$fila);
              }
              $g = $arr[0]['id_Codigo'];
              $this->codi->Insertestado(1, $g,$_SESSION['idUsua'],1);
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