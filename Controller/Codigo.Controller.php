<?php
    Class Codigo
    {
        public $codi;
        public $co;
        public $direc;
        public function __construct()
        {
           
            $this->codi=new cod();
            $this->direc=new Direcciones();
        }
        public function CodigoVentas()
        {
          $co=$this->codi->Vercodigo('C');
          
          $vec = array();
          while($fila=mysqli_fetch_assoc($co))
          {
              array_push($vec,$fila);
          } 
          //var_dump($vec);
          $_SESSION['idcod'] = $vec[0]['id_Codigo'];
          $c=$vec[0]['Codigo'];
          $this->codi->Insertcodigo( $_SESSION['idUsua'],$c,'C');
          $this->direc->CodigoV();
         
            
        }
        public function Codigoredu()
        {

        }
        public function Codigoprotec()
        {
            
        }
    }
?>