<?php
    Class codigo
    {
        public $codi
        public $co
        public function __construct()
        {
            Session_start();
            $this->codi=new cod();
            
        }
        public function CodigoVentas()
        {
          $co=$this->codi->Vercodigo(C)
          $vec = array();
          while($fila=mysqli_fetch_assoc($co))
          {
              array_push($vec,$fila);
          } 
          var_dump($vec);

            $_SESSION['idUsua']
            
        }
        public function Codigoredu()
        {

        }
        public function Codigoprotec()
        {
            
        }
    }
?>