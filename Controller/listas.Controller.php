<?php
    class listas
    {
        public $smarty;
        public $es;
        public function __construct()
        {
            Session_start();
            $this->smarty = new Smarty();
            $this->es = new Estados();
        }
        public function listasventas()
        {
            $c=$this->es->lisventa();
           
            if ($c->num_rows>0)
            {
                $vec = array();
                $co=array();
                while($fila=mysqli_fetch_assoc($c))
                {
                    array_push($vec,$fila);
                   $a=mysqli_fetch_assoc($this->es->VerCodigo($vec[0]['Codigo_id_Codigo']));                   
                }
                $this->smarty->assign('codigou',$a['letra']);
                $this->smarty->assign('codigos', $a['Codigo']);
            }
          
            $this->smarty->assign('nombre', $_SESSION['nombre']); 
            $this->smarty->assign('apellido', $_SESSION['apellido']);
            $this->smarty->assign('ro', $_SESSION['rol']); 
            $this->smarty->assign('title','Lista en espera');
            $this->smarty->display('Clientes/listaventas.tpl');

        }
        public function listasredu()
        {
            $c=$this->es->lisredu();
           
            if ($c->num_rows>0)
            {
                $vec = array();
                $co=array();
                while($fila=mysqli_fetch_assoc($c))
                {
                    array_push($vec,$fila);
                   $a=mysqli_fetch_assoc($this->es->VerCodigo($vec[0]['Codigo_id_Codigo']));
                   
                }
                $this->smarty->assign('codigou',$a['letra']);
                $this->smarty->assign('codigos', $a['Codigo']);
            }
          
            $this->smarty->assign('nombre', $_SESSION['nombre']); 
            $this->smarty->assign('apellido', $_SESSION['apellido']);
            $this->smarty->assign('ro', $_SESSION['rol']); 
            $this->smarty->assign('title','Lista en espera');
            $this->smarty->display('Clientes/listaredu.tpl');
        }
        public function listasprotec()
        {
            $c=$this->es->lisprotec();
           
            if ($c->num_rows>0)
            {
                $vec = array();
                $co=array();
                while($fila=mysqli_fetch_assoc($c))
                {
                    array_push($vec,$fila);
                   $a=mysqli_fetch_assoc($this->es->VerCodigo($vec[0]['Codigo_id_Codigo']));
                }
                $this->smarty->assign('codigou',$a['letra']);
                $this->smarty->assign('codigos', $a['Codigo']);
            }
         
            $this->smarty->assign('nombre', $_SESSION['nombre']); 
            $this->smarty->assign('apellido', $_SESSION['apellido']);
            $this->smarty->assign('ro', $_SESSION['rol']); 
            $this->smarty->assign('title','Lista en espera');
            $this->smarty->display('Clientes/listaprotec.tpl');
        }
    }
    

?>