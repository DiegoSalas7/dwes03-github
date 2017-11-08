<?php

class Triangulo
{
    public $base;
    public $altura;
    
    
    public function area()
    {
        return $this->base * $this->altura /2;
    }
    
    public function __construct(){
        
        $this->base=$_POST["base"];
        $this->altura=$_POST["altura"];
        
    }
    
}


?>