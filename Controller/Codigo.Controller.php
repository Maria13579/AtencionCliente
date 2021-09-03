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
            $z= echo "C".$c;
            $this->smarty->assign('co',$z);

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
          } 
          $this->direc->CodigoV();
        }
        

        public function Codigoredu()
        {
            $co=$this->codi->Vercodigo('B');
            if ($co>0)
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
            }
            $this->direc->CodigoR();

        }

        public function Codigoprotec()
        {
            $co=$this->codi->Vercodigo('A');
            if ($co>0)
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
            }
            $this->direc->CodigoP();
        }
    }
?>