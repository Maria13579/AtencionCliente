<?php

Class DireccionNav
{
    public $admin;
    public $smarty;
    
    public function __construct()
    {
        session_start();
        $this->smarty=new Smarty();
        
    }
    
}



?>

