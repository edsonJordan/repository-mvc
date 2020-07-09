<?php 
class Inicios extends Controller
{
    public function __construct()
    {

        $this->seguridad();
       
    }
    public function index()
    {
    
       return  $this->vista('/home');
      
    }
    
}
?>